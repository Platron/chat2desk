<?php

namespace Platron\Chat2desk\services;

use Platron\Chat2desk\SdkException;
use stdClass;

class ClientGetServiceResponse extends BaseServiceResponse {
	public function __construct(stdClass $response) {
		throw new SdkException('Not implemented method');
	}
}
