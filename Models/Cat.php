<?php
class Cat {
    public $article;
    public $breed;
    public $description;
    public $color;
    public $price;

    public function __construct($_article, $_breed, $_description, $_color, $_price) {
        $this->article = $_article;
        $this->breed = $_breed;
        $this->description = $_description;
        $this->color = $_color;
        $this->price =$_price;
    }
}
?>