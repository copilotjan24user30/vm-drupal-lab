<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a login block.
 *
 * @Block(
 *   id = "login_block",
 *   admin_label = @Translation("Login Block"),
 *   category = @Translation("Custom Blocks")
 * )
 */
class LoginBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Add your login block logic here.
    $form = \Drupal::formBuilder()->getForm('Drupal\my_module\Form\LoginForm');
    
    return $form;
  }

}