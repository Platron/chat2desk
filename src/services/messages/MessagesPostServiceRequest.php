<?php

namespace Platron\Chat2desk\services\messages;

use Platron\Chat2desk\SdkException;
use Platron\Chat2desk\services\BasePostServiceRequest;

class MessagesPostServiceRequest extends BasePostServiceRequest {

    protected $client_id;
    protected $text;
    protected $attachment;
    protected $type;
    protected $transport;
    protected $channel_id;
    protected $operator_id;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::REQUEST_URL.'messages';
    }
    
    /**
     * Установить id клиента
     * @param int $clientId
     */
    public function setClientId($clientId){
        $this->client_id = $clientId;
    }
    
    /**
     * Сообщение для отправки
     * @param string $text
     */
    public function setText($text){
        $this->text = $text;
    }
    
    /**
     * Url где находится вложение
     * @param string $url
     */
    public function setAttachment($url){
        $this->attachment = $url;
    }
    
    /**
     * Установка транспорта из конатант
     * @param string $transport
     */
    public function setTransport($transport){
        if(!in_array($transport, $this->getTransports())){
            throw new SdkException('Wrong transport');
        }
        $this->transport = $transport;
    }
    
    /**
     * Установка типа канала из констант
     * @param string $type
     */
    public function setType($type){
        if(!in_array($type, $this->getTypes())){
            throw new SdkException('Wrong type');
        }
        $this->type = $type;
    }
    
    /**
     * Установка id канала
     * @param int $channelId
     */
    public function setChannelId($channelId){
        $this->channel_id = $channelId;
    }
    
    /**
     * Установка id оператора
     * @param int $operatorId
     */
    public function setOperatorId($operatorId){
        $this->operator_id = $operatorId;
    }

}
