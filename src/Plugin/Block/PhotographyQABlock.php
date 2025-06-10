<?php


/**
 * @file
 * Contains \Drupal\photography_qa\Plugin\Block.
 */
namespace Drupal\photography_qa\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Photography QA' Block.
 *
 * @Block(
 *   id = "photography_qa_block",
 *   admin_label = @Translation("Photography  Q&A"),
 *   category = @Translation("Photography QA"),
 * )
 */
class PhotographyQABlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\photography_qa\Form\PhotographyQAForm');
    return $form;
  }

}

