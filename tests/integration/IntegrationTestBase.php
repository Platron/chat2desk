<?php

namespace Platron\Chat2desk\tests\integration;

use Platron\Chat2desk\tests\integration\UserSettings;

class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
    /** @var string */
    protected $login;
    /** @var string */
    protected $password;
    /** @var int */
    protected $inn;
    /** @var string */
    protected $groupCode;
    /** @var string */
    protected $paymentAddress;
    
    public function __construct() {
        $this->login = UserSettings::LOGIN;
        $this->password = UserSettings::PASSWORD;
        $this->inn = UserSettings::INN;
        $this->groupCode = UserSettings::GROUP_ID;
        $this->paymentAddress = UserSettings::PAYMENT_ADDRESS;
    }
}
