<?php

namespace Platron\Chat2desk\services;

class ClientPostServiceRequest extends BaseServiceRequest {
    
    protected $channel_id;
    protected $phone;
    protected $transport;
    
    public function getRequestUrl() {
        return 'clients';
    }
    
    /**
     * Установить номер телефона
     * @param int $phone
     */
    public function setPhone($phone){
        $this->phone = $phone;
    }

    /**
     * Установить транспорт
     * @param string $transport
     */
    public function setTransport($transport){
        $this->transport = $transport;
    }
    
    /**
     * Установка id канала
     * @param int $channelId
     */
    public function setChannelId($channelId){
        $this->channel_id = $channelId;
    }
}
