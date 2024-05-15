<?php
class Cat extends Product {
 
    public $category;


    public function __construct($_article, $_breed, $_description, $_color, $_price, $_image, $_category) {
        parent::__construct($_article, $_breed, $_description, $_color, $_price, $_image);
        $this->category = $_category; 
    }


}

$cat_articles = [
    new Cat('Collare Extra Luxory con campanellino', 'CatgCode#122', ' Oggetto Bellissimo Per Gatti', 'Rosa', '10.52 E', './img/cat_collar.png','articolo per gatti'),
    new Cat('Tiragraffi a forma di scatola', 'CatCode#122', 'tiragraffi per gatti', 'Lavanda','71.99 E', './img/graffi.png', 'articolo per gatti'),
    new Cat('Gomitolo di lana per gatti Pulce&Gattana', 'CatCode#122', 'gomitolo giocattolo per gatti', 'Blu', '19.99 E','./img/lana.png','articolo per gatti')
]
?>