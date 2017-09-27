<?php

namespace Platron\Chat2desk\services;

use Platron\Chat2desk\clients\PostClient;

abstract class BasePostServiceRequest extends BaseServiceRequest {
	/**
	 * {@inheritdoc}
	 */
	public function sendRequest($authString){
		return (new PostClient($authString, $this->logger, $this->timeout))->sendRequest($this);
	}
}
