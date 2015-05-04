<?php namespace controllers;
use core\view as View;

class Product extends \core\controller{

	public function __construct(){
		parent::__construct();
		$this->_model = new \models\product();		
	}

	public function index(){
		
	}

	public function getProducts(){
		return $this->_model->getProducts();
	}
	
}