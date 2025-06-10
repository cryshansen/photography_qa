<?php


/**
 * @file
 * Contains \Drupal\photography_qa\Plugin\Block.
 */
namespace Drupal\photography_qa\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Photography QA Exercise' Block.
 *
 * @Block(
 *   id = "photography_qaex_block",
 *   admin_label = @Translation("Photography  Q&A Exercise"),
 *   category = @Translation("Photography QA exercise"),
 * )
 */
class PhotographyQAExerciseBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\photography_qa\Form\PhotographyQAExerciseForm');
    return $form;
  }

}

