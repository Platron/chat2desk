<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\clients\PostClient;
use Platron\Chat2desk\services\MessagesPostServiceRequest;
use Platron\Chat2desk\services\MessagesPostServiceResponse;

class MessagesPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $client = new PostClient($this->authString);
        
        $service = new MessagesPostServiceRequest();
        $service->setClientId($clientId);
        $service->setText('Test');
        $service->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($client->sendRequest($service)))->isValid());
    }
}
