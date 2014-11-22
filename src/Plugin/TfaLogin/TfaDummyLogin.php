<?php

/**
 * @file
 * Contains Drupal\tfadummy\Plugin\TfaLogin\TfaDummyLogin
 */


namespace Drupal\tfadummy\Plugin\TfaLogin;

use Drupal\tfa\TfaLoginInterface;


/**
 * @TfaLogin(
 *   id = "tfa_dummy_login",
 *   title = @Translation("Testing login plugin"),
 *   description = @Translation("Testing only")
 * )
 */
class TfaDummyLogin implements TfaLoginInterface {
	/**
	 * Whether authentication should be interrupted.
	 *
	 * @return bool
	 */
	public function loginAllowed(){
		return TRUE;
	}
}
