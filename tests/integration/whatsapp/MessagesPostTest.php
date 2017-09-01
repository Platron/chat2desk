<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\services\MessagesPostServiceRequest;
use Platron\Chat2desk\services\MessagesPostServiceResponse;

class MessagesPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $service = new MessagesPostServiceRequest();
        $service->setClientId($clientId);
        $service->setText('Test');
        $service->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($this->client->sendRequest($service)))->isValid());
    }
}
