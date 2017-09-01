<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\services\ClientPostServiceRequest;
use Platron\Chat2desk\services\ClientPostServiceResponse;

class ClientPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $service = new ClientPostServiceRequest();
        $service->setPhone($this->phoneTo);
        $service->setTransport($this->getTransport());
        
        $this->assertTrue((new ClientPostServiceResponse($this->client->sendRequest($service)))->isValid());
    }
}
