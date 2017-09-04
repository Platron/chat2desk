<?php

namespace Platron\Chat2desk\services;

use stdClass;

abstract class BaseServiceResponse {
    
    /** @var string */
    public $status;
    
    /** @var int */
    protected $errorCode;
    
    /** @var string */
    protected $errorDescription;
    
    public function __construct(stdClass $response) {
                
        if(!empty($response->status) && $response->status == 'error'){
            $this->errorCode = 'error';
            $this->errorDescription = $response->message;
        }

        if(!empty($response->data->status) && $response->data->status == 'error'){
            $this->errorCode = 'error';
            $this->errorDescription = $response->data->message;
        }
        
        foreach (get_object_vars($this) as $name => $value) {
			if (!empty($response->$name)) {
				$this->$name = $response->$name;
			}
		}
    }
    
    /**
     * Проверка на ошибки в ответе
     * @param array $response
     * @return boolean
     */
    public function isValid(){
        if(!empty($this->errorCode)){
            return false;
        }
        else {
            return true;
        }
    }
    
    /**
     * Получить код ошибки из ответа
     * @return int
     */
    public function getErrorCode(){
        return $this->errorCode;
    }
    
    /**
     * Получить описание ошибки из ответа
     * @return string
     */
    public function getErrorDescription(){
        return $this->errorDescription;
    }
}
