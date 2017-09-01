<?php

namespace Platron\Chat2desk\tests\integration;

use Platron\Chat2desk\clients\BaseClient;
use Platron\Chat2desk\tests\integration\UserSettings;
use Platron\Chat2desk\clients\BaseClient;

abstract class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
    
    /** @var BaseClient */
    protected $client;
    /** @var string секретная строка из ЛК */
    protected $authString;
    /** @var string Номер телефона, на который будет отправляться сообщения */
    protected $phoneTo;
    
    public function __construct() {
        $this->authString = UserSettings::API_STRING;
        $this->phoneTo = UserSettings::PHONE_TO_SEND_MESSAGES;
    }
    
    /**
     * Получить транспорт
     * @return string
     */
    abstract public function getTransport();
}
