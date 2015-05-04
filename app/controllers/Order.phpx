<?php namespace controllers;
use core\view;

require(DIR.'app/models/order/Product.php');

/*
 * Order controller
 *
 */
class Order extends \core\controller{

	/**
	 * Call the parent construct
	 */
	public function __construct(){
		parent::__construct();
		$this->_model = new \models\order();

	}
	
	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['title'] = 'Orders';
		
		View::rendertemplate('header', $data);
		View::render('order/index', $data);
		View::rendertemplate('footer', $data);
	}


	/**
	 * New order page title and load template files
	 */
	public function newOrder() {
		$data['title'] = 'New Order';
		
		View::rendertemplate('header', $data);
		View::render('order/new', $data);
		View::rendertemplate('footer', $data);

		$this->_model->addProduct(new Product('Pizza', 10.99));

		
	}

}
