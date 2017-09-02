<?php

namespace Platron\Chat2desk\services\client;

use Platron\Chat2desk\SdkException;
use Platron\Chat2desk\services\BaseGetServiceRequest;

class ClientGetServiceRequest extends BaseGetServiceRequest {
	
	/**
	 * {@inheritdoc}
	 */
	public function getRequestUrl() {
		throw new SdkException('Not implemented method');
	}

}
