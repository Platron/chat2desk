<?php

namespace Platron\Chat2desk\tests\integration\whatsapp;

use Platron\Chat2desk\services\BaseServiceRequest;
use Platron\Chat2desk\tests\integration\IntegrationTestBase;

class WhatsappBaseTest extends IntegrationTestBase{    
    /**
     * {@inheritdoc}
     */
    public function getTransport(){
        return BaseServiceRequest::TRANSPORT_WHATSAPP;
    }
}
