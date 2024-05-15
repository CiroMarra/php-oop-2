<?php
class Product {
    public $article;
    public $breed;
    public $description;
    public $color;
    public $price;
    public $image;

    public function __construct($_article, $_breed, $_description, $_color, $_price, $_image) {
        $this->article = $_article;
        $this->breed = $_breed;
        $this->description = $_description;
        $this->color = $_color;
        $this->price = $_price;
        $this->image = $_image;
    }
}
?>