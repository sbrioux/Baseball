<?php
namespace Baseball\View;

class View {
	private $model;
	public function __construct(\Baseball\Model\Model $model){
		$this->model = $model;
	}
}