<?php
namespace Drupal\photography_qa\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\photography_qa\Service\PhotographyQAService;

class PhotographyQAExerciseForm extends FormBase {

  protected $qaService;

  public function __construct(PhotographyQAService $qa_service) {
      $this->qaService = $qa_service;
  }

  public static function create(ContainerInterface $container) {
      return new static(
          $container->get('photography_qa.qa_service') // Service ID
      );
  }


  public function getFormId() {
    return 'photography_qaex_form';
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
    \Drupal::logger('photography_qa')->notice('UpDATE Form State answer: ' . $form_state->get('answer') );

    if ($answer = $form_state->get('answer')) {
      \Drupal::logger('photography_qa')->notice('UpDATE Form State answer: ' . $answer);
      $form['response'] = [
        '#markup' => '<p><strong>Answer:</strong> ' . $answer . '</p>',
      ];
    }

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $question = strtolower($form_state->getValue('question'));
    $answer = $this->getAnswer($question);
    \Drupal::logger('photography_qa')->notice('UDATE Form answer: ' . $answer );

    $form_state->set('answer', $answer);
    $form_state->setRebuild(TRUE);



  }

  private function getAnswer($question) {
    $rules = $this->qaService->getRulesAdvanced(); // Fetch rules from servicev
    foreach ($rules as $keyword => $response) {
      if (strpos($question, $keyword) !== FALSE) {
        \Drupal::logger('photography_qa')->notice('User asked: ' . $question . ' | keyword found: ' . $keyword );
        $exercises = $this->qaService->getExercises($keyword);

        \Drupal::logger('photography_qa')->notice('User asked: ' . $question . ' | exercises found: ' . print_r($exercises,True) . ' | Answer: ' . $response);
        $ex_list = implode(" ", $exercises);
        \Drupal::logger('photography_qa')->notice('UDATE Form response: ' . $question . ' | exercises found: ' .$ex_list );
        return $response . " Exercises: " . $ex_list;

      }
    }
   
    return "I\'m not sure about that. Try asking about camera settings, lighting, or composition!";
  }
}

  
