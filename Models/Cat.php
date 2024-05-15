<?php
class Cat extends Product {
    public $article;
    public $breed;
    public $description;
    public $color;
    public $price;

}

$cat_articles = [
    new Cat('Collare Extra Luxory con campanellino', 'CatgCode#122', 'Descrizione Oggetto Bellissimo Per Gatti', 'Rosa', '10.52 E', './img/cat_collar.png'),
    new Cat('Tiragraffi a forma di scatola', 'CatCode#122', 'Descrizione tiragraffi per gatti', 'Lavanda','71.99 E', './img/graffi.png'),
    new Cat('Gomitolo di lana per gatti Pulce&Gattana', 'CatCode#122', 'Descrizione gomitolo giocattolo per gatti', 'Blu', '19.99 E','./img/lana.png')
]
?>