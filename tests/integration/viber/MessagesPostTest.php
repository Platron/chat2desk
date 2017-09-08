<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\messages\MessagesPostServiceRequest;
use Platron\Chat2desk\services\messages\MessagesPostServiceResponse;
use Platron\Chat2desk\services\clients\ClientsPostServiceResponse;
use Platron\Chat2desk\services\clients\ClientsPostServiceRequest;
use Platron\Chat2desk\services\clients\ClientsGetServiceRequest;
use Platron\Chat2desk\services\clients\ClientsGetServiceResponse;

class MessagesPostTest extends ViberBaseTest {
    public function testSendRequest(){
        
        $service = new ClientsGetServiceRequest();
		$service->setPhone($this->phoneTo);
		$getResponseClient = new ClientsGetServiceResponse($service->sendRequest($this->authString));
        
        if(empty($getResponseClient->clients[0])){
		$servicePostClient = new ClientsPostServiceRequest();
        $servicePostClient->setPhone($this->phoneTo);
        $servicePostClient->setTransport($this->getTransport());
		
		$createdClient = new ClientsPostServiceResponse($servicePostClient->sendRequest($this->authString));
        }
        else {
            $createdClient = $getResponseClient->clients[0];
        }
        
        $servicePostMessage = new MessagesPostServiceRequest();
        $servicePostMessage->setClientId($createdClient->id);
        $servicePostMessage->setText('Test');
        $servicePostMessage->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($servicePostMessage->sendRequest($this->authString)))->isValid());
    }
}
