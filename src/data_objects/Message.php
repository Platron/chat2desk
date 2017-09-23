<?php

namespace Platron\Chat2desk\data_objects;

class Message extends BaseDataObject {
    public $id;
	public $text;
	public $photo;
	public $coordinates;
	public $transport;
	public $type;
	public $read;
	public $created;
	public $client_id;
	public $vb_bus_id;
	public $recipient_status;
	public $dialog_id;
	public $operator_id;
	public $channel_id;
}
