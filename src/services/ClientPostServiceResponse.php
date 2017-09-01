<?php

namespace Platron\Chat2desk\services;

use stdClass;

class ClientPostServiceResponse extends BaseServiceResponse {
    
    public $id;
    public $asigned_name;
    public $phone;
    public $name;
    public $avatar;
    public $region_id;
    public $country_id;
    public $first_client_message;
    public $last_client_message;
    public $status;
    
    public function __construct(stdClass $response) {
        parent::__construct($response->data);
        parent::__construct($response);
    }
}
