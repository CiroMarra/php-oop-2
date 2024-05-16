<?php
require_once __DIR__ . '/Models/Dog.php'; 
require_once __DIR__ . '/Models/Cat.php'; 
require_once __DIR__ . '/Models/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Articoli per  cani:</h2>
        <?php foreach($dog_articles as $dog) { ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dog->article; ?></h5>
                    <img src="<?php echo $dog->image; ?>">
                    <h6 class="card-text text-danger">Marca: <?php echo $dog->breed; ?></h6>     
                    <p class="card-text"> <strong>Descrizione: </strong>  <?php echo $dog->description; ?> </p>        
                    <p class="card-text"><strong>Prezzo:</strong> <?php echo $dog->price; ?></p>
                    <p class="card-text"><strong>Colore:</strong> <?php echo $dog->color; ?></p>
                    <p class="card-text text-danger"><strong><?php echo $dog->category; ?></strong></p>
                </div>
            </div>
        <?php } ?>

        <h2>Articoli per  gatti:</h2>
        <?php foreach($cat_articles as $cat) { ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cat->article; ?></h5>
                    <img src="<?php echo $cat->image; ?>">
                    <h6 class="card-text"><strong>Marca:</strong> <?php echo $cat->breed; ?></h6>     
                    <p class="card-text"> <strong>Descrizione: </strong>  <?php echo $cat->description; ?> </p>        
                    <p class="card-text"><strong>Prezzo:</strong> <?php echo $cat->price; ?></p>
                    <p class="card-text"><strong>Colore:</strong> <?php echo $cat->color; ?></p>
                    <p class="card-text text-danger"><strong><?php echo $cat->category; ?></strong></p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>