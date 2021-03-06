<?php

namespace Platron\Chat2desk\clients;

use Platron\Chat2desk\services\BaseServiceRequest;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

abstract class BaseClient {
 
    const LOG_LEVEL = LogLevel::INFO;
    
    /** @var string Ключ API */
    protected $authString;
    /** @var LoggerInterface */
    protected $logger;
    /** @var int */
    protected $connectionTimeout;
    
    /**
     * @param string $authString
     * @param LoggerInterface $logger
     * @param int $connectionTimeout
     */
    public function __construct($authString, LoggerInterface $logger = null, $connectionTimeout = 30) {
        $this->authString = $authString;
        $this->logger = $logger;
        $this->connectionTimeout = $connectionTimeout;
    }
    
    public function getHeadres(){
        return [
            'Authorization: '.$this->authString,
            'Content-Type: application/json',
        ];
    }
    
    /**
     * Послать запрос
     * @param \Platron\Chat2desk\BaseService $service
     */
    abstract public function sendRequest(BaseServiceRequest $service);
}
