<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\clients\GetClient;
use Platron\Chat2desk\services\ClientsGetServiceRequest;
use Platron\Chat2desk\services\ClientsGetServiceResponse;

class ClientsGetTest extends WhatsappTestBase {
	public function testSendRequest(){
		$client = new GetClient($this->authString);
		$service = new ClientsGetServiceRequest();
		$service->setPhone($this->phoneTo);
		
		$this->assertTrue((new ClientsGetServiceResponse($client->sendRequest($service)))->isValid());
	}
}
