<?php

namespace Platron\Chat2desk\clients;

use Platron\Chat2desk\services\BaseServiceRequest;

interface iClient {
    
    /**
     * Послать запрос
     * @param \Platron\Chat2desk\BaseService $service
     */
    public function sendRequest(BaseServiceRequest $service);
}
