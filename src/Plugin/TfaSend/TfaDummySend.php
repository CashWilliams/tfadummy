<?php

/**
 * @file
 * Contains Drupal\tfadummy\Plugin\TfaSend\TfaDummySend
 */

namespace Drupal\tfadummy\Plugin\TfaSend;

use Drupal\tfa\TfaSendInterface;

/**
 * Send plugin test.
 *
 * @TfaSend(
 *   id = "tfa_dummy_send",
 *   title = @Translation("Testing send plugin"),
 *   description = @Translation("Testing only")
 * )
 */
class TfaDummySend implements TfaSendInterface {
	//TODO - Fill out params/return variables
	/**
	 * TFA process begin.
	 */
	public function begin(){
		return TRUE;
	}
}
