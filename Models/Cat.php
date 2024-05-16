<?php
class Cat extends Product {
 
    public $category;


    public function __construct($_article, $_breed, $_description, $_color, $_price, $_image, $_category) {
        parent::__construct($_article, $_breed, $_description, $_color, $_price, $_image);
        $this->category = $_category; 
    }


}


?>