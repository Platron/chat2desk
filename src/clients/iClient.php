<?php

namespace Platron\Chat2desk\clients;

use Platron\Atol\services\BaseServiceRequest;

interface iClient {
    
    /**
     * Послать запрос
     * @param \Platron\Atol\BaseService $service
     */
    public function sendRequest(BaseServiceRequest $service);
}
