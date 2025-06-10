<?php
namespace Drupal\photography_qa\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\photography_qa\Service\PhotographyQAService;

class PhotographyQAForm extends FormBase {
  protected $qaService;

  public function __construct(PhotographyQAService $qa_service) {
      $this->qaService = $qa_service;
  }

  public static function create(ContainerInterface $container) {
      return new static(
          $container->get('photography_qa.qa_service'), // Service ID
      );
  }


  public function getFormId() {
    return 'photography_qa_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['question'] = [
      '#type' => 'textfield',
      '#title' => t('Ask a Photography Question'),
      '#required' => TRUE,
    ];
    // Ensure the response field is always present in the form
    $form['response'] = [
      '#type' => 'markup',
      '#markup' => '',
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Ask'),
    ];

    if ($answer = $form_state->get('answer')) {
      $form['response'] = [
        '#markup' => '<p><strong>Answer:</strong> ' . $answer . '</p>',
      ];
    }

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $question = strtolower($form_state->getValue('question'));
    \Drupal::logger('photography_qa')->notice('User asked: ' . $question . ' | Answer: ' . $answer);

    $answer = $this->getAnswer($question);
    $form_state->set('answer', $answer);
    $form_state->setRebuild(TRUE);

  }

  private function getAnswer($question) {
    $rules = $this->qaService->getRulesEasy(); // Fetch rules from servicev
    
    foreach ($rules as $keyword => $response) {
      \Drupal::logger('photography_qa')->notice('User asked: '.$question. ' checked ' . $keyword . ' | Answer: ' . $response);
      if (strpos(trim(strtolower($question)), $keyword) !== FALSE) {
        \Drupal::logger('photography_qa')->notice('User asked: ' . $question . ' | keyword found: ' . $keyword . ' | Answer: ' . $keyword);
        return $response;
      }
    }
    
    return  "I/'m not sure about that. Try asking about camera settings, lighting, or composition!";
  }
}
  
