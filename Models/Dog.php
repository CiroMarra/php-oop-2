<?php
require_once 'Product.php';

class Dog extends Product {

    public $category;


    public function __construct($_article, $_breed, $_description, $_color, $_price, $_image, $_category) {
        parent::__construct($_article, $_breed, $_description, $_color, $_price, $_image);
        $this->category = $_category; 
    }
    

}

$dog_articles = [
    new Dog('Collare Extra Luxory', 'DogCode#122', 'Oggetto Bellissimo Per Cani', 'Rosso', '10.52 E', './img/collare.png', 'Articolo per cani'),
    new Dog('Cuscino Extra Comodo', 'DogCode#122', ' cuccia per cani', 'Grigia','52.99 E', './img/cuscino.png', 'articolo per cani'),
    new Dog('Masticabile aromatizzato al Manzo di Kobe ricetta di Antogattino Canevacciulo', 'DogCode#122', ' masticabile per cani', 'Giallo', '9.99 E','./img/masticabile.png', 'articolo per cani')
];


?>