<?php

namespace Platron\Chat2desk\services\client;

use Platron\Chat2desk\data_objects\Channel;
use Platron\Chat2desk\data_objects\Client;
use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;

class ClientGetServiceResponse extends BaseServiceResponse {
	
    /** @var Client */
    public $client;
    /** @var Channel */
    public $channels;
	
	public function __construct(stdClass $response) {
		parent::__construct($response);
		if($this->isValid()){
            $innerClass = new Client();
            foreach (get_object_vars($innerClass) as $name => $value) {
                if (!empty($response->data->$name)) {
                    $innerClass->$name = $response->data->$name;
                }
            }
            $this->client = $innerClass;
            
            foreach($response->data->channels as $channel){
                $currentChannel = new Channel();
                foreach (get_object_vars($currentChannel) as $name => $value) {
                    if (!empty($channel->$name)) {
                        $currentChannel->$name = $channel->$name;
                    }
                }
                $this->channels[] = $currentChannel;
            }
		}
	}
}
