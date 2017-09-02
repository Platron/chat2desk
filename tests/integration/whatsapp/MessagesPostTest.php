<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\services\messages\MessagesPostServiceRequest;
use Platron\Chat2desk\services\messages\MessagesPostServiceResponse;

class MessagesPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $service = new MessagesPostServiceRequest();
        $service->setClientId(1);
        $service->setText('Test');
        $service->setTransport($this->getTransport());
        
        $this->assertTrue((new MessagesPostServiceResponse($service->sendRequest($this->authString)))->isValid());
    }
}
