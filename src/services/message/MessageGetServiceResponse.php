<?php

namespace Platron\Chat2desk\services\message;

use Platron\Chat2desk\services\BaseServiceResponse;
use Platron\Chat2desk\data_objects\Message;
use stdClass;

class MessageGetServiceResponse extends BaseServiceResponse {
	
	/** @var Message */
	public $message;
	
	public function __construct(stdClass $response) {
		parent::__construct($response);
		if($this->isValid()){
			$this->message = new Message();
			foreach (get_object_vars($this->message) as $name => $value) {
				if (!empty($response->data->$name)) {
					$this->message->$name = $response->data->$name;
				}
			}
		}
    }
}
