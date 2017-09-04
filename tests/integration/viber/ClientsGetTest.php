<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\clients\ClientsGetServiceRequest;
use Platron\Chat2desk\services\clients\ClientsGetServiceResponse;

class ClientsGetTest extends ViberBaseTest {
	public function testSendRequest(){
		$service = new ClientsGetServiceRequest();
		$service->setPhone($this->phoneTo);

		$this->assertTrue((new ClientsGetServiceResponse($service->sendRequest($this->authString)))->isValid());
	}
}
