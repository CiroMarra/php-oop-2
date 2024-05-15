<?php
require_once 'Product.php';

class Dog extends Product {
    public $article;
    public $breed;
    public $description;
    public $color;
    public $price;

    

}

$dog_articles = [
    new Dog('Collare Extra Luxory', 'DogCode#122', 'Descrizione Oggetto Bellissimo Per Cani', 'Rosso', '10.52 E', './img/collare.png'),
    new Dog('Cuscino Extra Comodo', 'DogCode#122', 'Descrizione cuccia per cani', 'Grigia','52.99 E', './img/cuscino.png'),
    new Dog('Masticabile aromatizzato al Manzo di Kobe ricetta di Antogattino Canevacciulo', 'DogCode#122', 'Descrizione masticabile per cani', 'Giallo', '9.99 E','./img/masticabile.png')
];


?>