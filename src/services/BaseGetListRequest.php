<?php

namespace Platron\Chat2desk\services;

abstract class BaseGetListRequest extends BaseServiceRequest {
	
	protected $limit = 20;
	protected $offset = 0;
	
	/**
	 * Установка кол-ва возвращаемых записей
	 * @param int $limit
	 */
	public function setLimit($limit){
		$this->limit = $limit;
	}
	
	/**
	 * Смещение относительно 1-ой строки списка
	 * @param int $offset
	 */
	public function setOffset($offset){
		$this->offset = $offset;
	}
}
