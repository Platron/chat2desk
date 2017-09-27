<?php

namespace Platron\Chat2desk\services;

use Psr\Log\LoggerInterface;

abstract class BaseServiceRequest {
    const REQUEST_URL = 'https://api.chat2desk.com/v1/';
    
    CONST 
        TYPE_TO_CLIENT = 'to_client',
        TYPE_AUTOREPLY = 'autoreply',
        TYPE_SYSTEM = 'system';
    
    CONST 
        TRANSPORT_WHATSAPP = 'whatsapp',
        TRANSPORT_VIBER = 'viber',
        TRANSPORT_VKONTAKTE = 'vkontakte',
        TRANSPORT_FACEBOOK = 'facebook',
        TRANSPORT_TELEGRAM = 'telegram',
        TRANSPORT_SMS = 'sms';
    
    /** @var LoggerInterface */
    protected $logger = null;
    /** @var integer */
    protected $timeout = 30;
    
    /**
	 * Получить url ждя запроса
	 * @return string
	 */
	abstract public function getRequestUrl();
    
    /**
	 * Получить параметры, сгенерированные командой
	 * @return array
	 */
	public function getParameters() {
		$filledvars = array();
		foreach (get_object_vars($this) as $name => $value) {
			if ($value) {
				$filledvars[$name] = (string)$value;
			}
		}

		return $filledvars;
	}
    
    /**
     * Получить все транспорты
     * @return string[]
     */
    public function getTransports(){
        return [
            self::TRANSPORT_FACEBOOK,
            self::TRANSPORT_SMS,
            self::TRANSPORT_TELEGRAM,
            self::TRANSPORT_VIBER,
            self::TRANSPORT_VKONTAKTE,
            self::TRANSPORT_WHATSAPP,
        ];
    }
    
    /**
     * Получить все типы
     * @return string[]
     */
    public function getTypes(){
        return [
            self::TYPE_AUTOREPLY,
            self::TYPE_SYSTEM,
            self::TYPE_TO_CLIENT,
        ];
    }
    
    /**
     * Установить лог
     * @param LoggerInterface $logger
     */
    public function setLog(LoggerInterface $logger){
        $this->logger = $logger;
    }
    
    /**
     * Установить максимальное время ожидания ответа
     * @param integer $timeout
     */
    public function setConnectionTimeout($timeout){
        $this->timeout = $timeout;
    }
}
