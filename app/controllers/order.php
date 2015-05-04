<?php namespace controllers;
use \core\view,
	\helpers\session,
	\helpers\url,
	\helpers\paginator;


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
		
		
		$pages = new paginator('10','p');
		$pages->set_total(count($this->_model->getTotalOrders()));
		$data['orders'] = $this->_model->getOrders($pages->get_limit());
		$data['page_links'] = $pages->page_links();		

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
	
	}

}
