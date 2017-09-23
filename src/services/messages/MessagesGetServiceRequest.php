<?php

namespace Platron\Chat2desk\services\messages;

use Platron\Chat2desk\services\BaseGetListRequest;

class MessagesGetServiceRequest extends BaseGetListRequest {
    
    protected $transport;
    protected $type;
    protected $dialog_id;
    protected $read;
    
    public function getRequestUrl() {
        return self::REQUEST_URL.'messages';
    }

    /**
     * Установить фильтр по транспорту из констант класса
     * @param string $transport
     */
    public function setTransport($transport){
        if(!in_array($transport, $this->getTransports())){
            throw new SdkException('Wrong transport');
        }
        $this->transport = $transport;
    }
    
    /**
     * Установить фильтр по диалогу
     * @param int $dialog
     */
    public function setDialog($dialog){
        $this->dialog_id = $dialog;
    }
    
    /**
     * Установить тип сообщения - от клиента или к клиенту из констант
     * @param string $type
     */
    public function setType($type){
        if(!in_array($type, $this->getTypes())){
            throw new SdkException('Wrong type');
        }
        $this->type = $type;
    }
    
    /**
     * Получить только прочтенные сообщения
     */
    public function setReaded(){
        $this->read = true;
    }
    
    /**
     * Получить только не прочтенные сообщения
     */
    public function setNotReaded(){
        $this->read = false;
    }
}
