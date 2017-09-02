<?php

namespace Platron\Chat2desk\services\clients;

use Platron\Chat2desk\SdkException;
use Platron\Chat2desk\services\BasePostServiceRequest;

class ClientsPostServiceRequest extends BasePostServiceRequest {
    
    protected $channel_id;
    protected $phone;
    protected $transport;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::REQUEST_URL.'clients';
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
        if(!in_array($transport, $this->getTransports())){
            throw new SdkException('Wrong transport');
        }
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
