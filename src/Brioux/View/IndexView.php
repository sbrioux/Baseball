<?php
namespace Baseball\View;

class IndexView {
	private $model;

	public function __construct(\Baseball\Model\Model $model){
		$this->model = $model;
	}
}