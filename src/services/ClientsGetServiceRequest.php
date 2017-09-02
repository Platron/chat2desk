<?php

namespace Platron\Chat2desk\services;

class ClientsGetServiceRequest extends BaseGetListRequest {

	protected $phone;
	
	public function getRequestUrl() {
		return self::REQUEST_URL.'clients';
	}

	/**
	 * Установить фильтр по номеру телефона
	 * @param int $phone
	 */
	public function setPhone($phone){
		$this->phone = $phone;
	}
}
