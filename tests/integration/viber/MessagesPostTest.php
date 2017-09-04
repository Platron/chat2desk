<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\messages\MessagesPostServiceRequest;
use Platron\Chat2desk\services\messages\MessagesPostServiceResponse;
use Platron\Chat2desk\services\clients\ClientsPostServiceResponse;
use Platron\Chat2desk\services\clients\ClientsPostServiceRequest;

class MessagesPostTest extends ViberBaseTest {
    public function testSendRequest(){
		$servicePostClient = new ClientsPostServiceRequest();
        $servicePostClient->setPhone($this->phoneTo);
        $servicePostClient->setTransport($this->getTransport());
		
		$createdClient = new ClientsPostServiceResponse($servicePostClient->sendRequest($this->authString));
		
        $servicePostMessage = new MessagesPostServiceRequest();
        $servicePostMessage->setClientId($createdClient->id);
        $servicePostMessage->setText('Test');
        $servicePostMessage->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($servicePostMessage->sendRequest($this->authString)))->isValid());
    }
}
