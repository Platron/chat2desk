<?php

namespace Platron\Chat2desk\services\messages;

use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;

class MessagesPostServiceResponse extends BaseServiceResponse{
    
	public $message_id;
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
