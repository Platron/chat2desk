<?php

namespace Platron\Chat2desk\services;

use Platron\Chat2desk\clients\PutClient;

abstract class BasePutServiceRequest extends BaseServiceRequest {
	/**
	 * {@inheritdoc}
	 */
	public function sendRequest($authString){
		return (new PutClient($authString))->sendRequest($this);
	}
}
