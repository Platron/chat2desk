<?php

namespace Platron\Chat2desk\services;

class MessagesPostServiceResponse extends BaseServiceResponse{
    public $channel_id;
    public $operator_id;
    public $transport;
    public $type;
    public $client_id;
    
    public function __construct(stdClass $response) {
        parent::__construct($response);
        if($this->isValid()){
            parent::__construct($response->data);
        }
    }
}
