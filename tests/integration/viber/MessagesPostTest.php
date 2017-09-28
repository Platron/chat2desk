<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\client\ClientGetServiceRequest;
use Platron\Chat2desk\services\client\ClientGetServiceResponse;
use Platron\Chat2desk\services\clients\ClientsGetServiceRequest;
use Platron\Chat2desk\services\clients\ClientsGetServiceResponse;
use Platron\Chat2desk\services\clients\ClientsPostServiceRequest;
use Platron\Chat2desk\services\clients\ClientsPostServiceResponse;
use Platron\Chat2desk\services\messages\MessagesPostServiceRequest;
use Platron\Chat2desk\services\messages\MessagesPostServiceResponse;

class MessagesPostTest extends ViberBaseTest {
    public function testSendRequest(){
        
        $service = new ClientsGetServiceRequest();
		$service->setPhone($this->phoneTo);
		$getClientsResponse = new ClientsGetServiceResponse($service->sendRequest($this->authString));
        
        if(!empty($getClientsResponse->clients[0])){
            $clientRequest = new ClientGetServiceRequest($getClientsResponse->clients[0]->id);
            $clientResponse = new ClientGetServiceResponse($clientRequest->sendRequest($this->authString));
        }
        
        if(empty($getClientsResponse->clients[0]) || empty($clientResponse->channels) || !in_array($this->getTransport(), $clientResponse->channels[0]->transports)){
            $servicePostClient = new ClientsPostServiceRequest();
            $servicePostClient->setPhone($this->phoneTo);
            $servicePostClient->setTransport($this->getTransport());

            $createdClient = new ClientsPostServiceResponse($servicePostClient->sendRequest($this->authString));
        }
        else {
            $createdClient = $getClientsResponse->clients[0];
        }
        
        $servicePostMessage = new MessagesPostServiceRequest();
        $servicePostMessage->setClientId($createdClient->id);
        $servicePostMessage->setText('Test');
        $servicePostMessage->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($servicePostMessage->sendRequest($this->authString)))->isValid());
    }
}
