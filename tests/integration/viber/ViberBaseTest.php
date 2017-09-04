<?php

namespace Platron\Chat2desk\tests\integration\viber;

use Platron\Chat2desk\services\BaseServiceRequest;
use Platron\Chat2desk\tests\integration\IntegrationTestBase;

class ViberBaseTest extends IntegrationTestBase{    
    /**
     * {@inheritdoc}
     */
    public function getTransport(){
        return BaseServiceRequest::TRANSPORT_VIBER;
    }
}
