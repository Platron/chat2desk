<?php

namespace Platron\Chat2desk\services\messages;

use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;
use Platron\Chat2desk\data_objects\Message;

class MessagesGetServiceResponse extends BaseServiceResponse {
    /** @var Message[] */
    public $messages;

    public $total;
    public $limit;
    public $offset;
    
    public function __construct(stdClass $response) {
		parent::__construct($response);
		if($this->isValid()){
			foreach($response->data as $message){
				$innerClass = new Message();
				foreach (get_object_vars($innerClass) as $name => $value) {
					if (!empty($message->$name)) {
						$innerClass->$name = $message->$name;
					}
				}
				$this->messages[] = $innerClass;
			}
		}
		parent::__construct($response->meta);
    }
}
