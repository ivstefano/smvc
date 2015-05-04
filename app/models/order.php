<?php
namespace models;

class Order extends \core\model {

	public function getOrders($limit){
		return $this->_db->select("SELECT 
		".PREFIX."orders.id,
		".PREFIX."orders.date_added,
		".PREFIX."orders.status,
		".PREFIX."orders.customer_id FROM ".PREFIX."orders 
		".$limit);
	}

	public function getTotalOrders(){
		return $this->_db->select("SELECT id FROM ".PREFIX."orders");
	}

    public function addOrderProduct(){

    }

    public function getOrderTotal(){
    	
    }

    public function getOrderProducts(){
    	
    }

	public function getProducts(){ 
		return $this->_db->select("SELECT * FROM ".PREFIX."products");
	}

}

