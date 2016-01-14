<?php
namespace Baseball\Controller;

class Controller {
	private $view;
	private $model;
	public function __construct(\Baseball\Controller\Controller $controller, \Baseball\View\View $view){
		$this->view = $view;
		$this->model = $model;
	}
}