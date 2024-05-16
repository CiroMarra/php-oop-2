<?php

class Product {
    public $article;
    public $breed;
    public $description;
    public $price;
    public $image;

    public function __construct($_article, $_breed, $_description, $_price, $_image) {
        $this->article = $_article;
        $this->breed = $_breed;
        $this->description = $_description;
        $this->price = $_price;
        $this->image = $_image;
    }
}

?>