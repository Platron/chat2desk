<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\clients\ClientsPostServiceRequest;
use Platron\Chat2desk\services\clients\ClientsPostServiceResponse;

class ClientPostTest extends ViberBaseTest {
    public function testSendRequest(){
        $service = new ClientsPostServiceRequest();
        $service->setPhone($this->phoneTo);
        $service->setTransport($this->getTransport());

        $this->assertTrue((new ClientsPostServiceResponse($service->sendRequest($this->authString)))->isValid());
    }
}
