<?php
namespace models;

class Order extends \core\model {

	public $products = [];
    
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

}

