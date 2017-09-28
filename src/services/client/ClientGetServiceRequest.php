<?php

namespace Platron\Chat2desk\services\client;

use Platron\Chat2desk\services\BaseGetServiceRequest;

class ClientGetServiceRequest extends BaseGetServiceRequest {

    private $id;
    
    /**
     * @param integer $id
     */
    public function __construct($id) {
        $this->id = $id;
    }
    
	/**
	 * {@inheritdoc}
	 */
	public function getRequestUrl() {
		return self::REQUEST_URL.'/clients/'.$this->id;
	}

}
