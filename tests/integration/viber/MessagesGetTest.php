<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\services\messages\MessagesGetServiceRequest;
use Platron\Chat2desk\services\messages\MessagesGetServiceResponse;
use Platron\Chat2desk\tests\integration\viber\ViberBaseTest;

class MessagesGetTest extends ViberBaseTest {
	public function testSendRequest(){
		$service = new MessagesGetServiceRequest();
		$service->setTransport($this->getTransport());
		$this->assertTrue((new MessagesGetServiceResponse($service->sendRequest($this->authString)))->isValid());
	}
}
