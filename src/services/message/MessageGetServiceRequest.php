<?php

namespace Platron\Chat2desk\services\message;

use Platron\Chat2desk\services\BaseGetServiceRequest;

class MessageGetServiceRequest extends BaseGetServiceRequest {
	
	protected $id;
	
	public function getRequestUrl() {
		return self::REQUEST_URL.'messages/'.$this->id;
	}

	/**
	 * @param int $id
	 */
	public function __construct($id) {
		$this->id = $id;
	}
}
