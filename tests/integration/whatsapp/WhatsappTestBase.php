<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\clients\PostClient;
use Platron\Chat2desk\services\BaseServiceRequest;
use Platron\Chat2desk\tests\integration\IntegrationTestBase;

class WhatsappTestBase extends IntegrationTestBase{
    
    public function setUp() {
        parent::setUp();
        
        $this->client = new PostClient($this->authString);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getTransport(){
        return BaseServiceRequest::TRANSPORT_WHATSAPP;
    }
}
