<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\clients\PostClient;
use Platron\Chat2desk\services\ClientPostServiceRequest;
use Platron\Chat2desk\services\ClientPostServiceResponse;

class ClientPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $client = new PostClient($this->authString);
        $service = new ClientPostServiceRequest();
        $service->setPhone($this->phoneTo);
        $service->setTransport($this->getTransport());
        
        $this->assertNotEmpty((new ClientPostServiceResponse($client->sendRequest($service)))->id);
    }
}
