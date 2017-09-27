<?php

namespace Platron\Chat2desk\services;

use Platron\Chat2desk\clients\GetClient;

abstract class BaseGetServiceRequest extends BaseServiceRequest {
	
	/**
	 * {@inheritdoc}
	 */
	public function sendRequest($authString){
		return (new GetClient($authString, $this->logger, $this->timeout))->sendRequest($this);
	}
}
