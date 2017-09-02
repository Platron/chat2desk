<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\clients\PostClient;
use Platron\Chat2desk\services\ClientsPostServiceRequest;
use Platron\Chat2desk\services\ClientsPostServiceResponse;

class ClientPostTest extends WhatsappTestBase {
    public function testSendRequest(){
        $client = new PostClient($this->authString);
        
        $service = new ClientsPostServiceRequest();
        $service->setPhone($this->phoneTo);
        $service->setTransport($this->getTransport());
        
        $this->assertTrue((new ClientsPostServiceResponse($client->sendRequest($service)))->isValid());
    }
}
