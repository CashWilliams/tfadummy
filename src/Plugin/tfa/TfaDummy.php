<?php

/**
 * Plugin implementation of 'tfaDummy'.
 *
 * @tfa()
 */

namespace Drupal\tfaDummy\Plugin\tfa;

use Drupal\tfa\TfaValidationPluginInterface;
use Drupal\tfa\TfaLoginPluginInterface;
use Drupal\tfa\TfaBasePlugin;

/**
 * Class TfaTrustedDevice
 */
class TfaDummy extends TfaBasePlugin implements TfaLoginPluginInterface, TfaValidationPluginInterface {

  public function __construct(array $context) {
    parent::__construct($context);
  }

  /**
   * @return bool
   */
  public function loginAllowed() {
    if (\Drupal::config('tfadummy.settings')->get('dumb')) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * @copydoc TfaValidationPluginInterface::getForm()
   */
  public function getForm(array $form, array &$form_state) {
    $form['dummy'] = array(
      '#type' => 'markup',
      '#title' => t('You are using TFA Dummy.'),
    );
    return $form;
  }

  /**
   * @copydoc TfaValidationPluginInterface::getForm()
   */
  public function validateForm(array $form, array &$form_state) {
    return TRUE;
  }
}
