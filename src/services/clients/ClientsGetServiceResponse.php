<?php

namespace Platron\Chat2desk\services\clients;

use Platron\Chat2desk\data_objects\Client;
use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;

class ClientsGetServiceResponse extends BaseServiceResponse {
	
	/** @var Client[] */
	public $clients;
	
	public $total;
	public $limit;
	public $offset;
	
	public function __construct(stdClass $response) {
		parent::__construct($response);
		if($this->isValid()){
			foreach($response->data as $client){
				$innerClass = new Client();
				foreach (get_object_vars($innerClass) as $name => $value) {
					if (!empty($client->$name)) {
						$innerClass->$name = $client->$name;
					}
				}
				$this->clients[] = $innerClass;
			}
		}
		parent::__construct($response->meta);
	}
	
}
