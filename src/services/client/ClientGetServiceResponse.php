<?php

namespace Platron\Chat2desk\services\client;

use Platron\Chat2desk\SdkException;
use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;

class ClientGetServiceResponse extends BaseServiceResponse {
	public function __construct(stdClass $response) {
		throw new SdkException('Not implemented method');
	}
}