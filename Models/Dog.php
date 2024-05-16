<?php
require_once 'Product.php';

require_once __DIR__ .'/../Traits/Color.php';

class Dog extends Product {
    use Color;

    public $category;

    public function __construct($_article, $_breed, $_description,$_color, $_price,$_image, $_category) {
        parent::__construct($_article, $_breed, $_description, $_price, $_image);
        $this->category = $_category;
        $this->setColor($_color);
    }
}
?>