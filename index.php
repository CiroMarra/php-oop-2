<?php
require_once __DIR__ . '/Models/Dog.php'; 
require_once __DIR__ . '/Models/Cat.php'; 




$dog_articles = [
    new Dog('Collare Extra Luxory', 'DogCode#122', 'Descrizione Oggetto Bellissimo Per Cani', 'Rosso', '10.52 E'),
    new Dog('Cuccia Extra Comoda', 'DogCode#122', 'Descrizioen cuccia per cani', 'Grigia','52.99 E'),
    new Dog('Masticabile aromatizzato al Manzo di Kobe ricetta di Antogattino Canevacciulo', 'DogCode#122', 'Descrizione masticabile per cani', 'Giallo', '9.99 E')
];

$cat_articles = [
    new Cat('Collare Extra Luxory con campanellino', 'CatgCode#122', 'Descrizione Oggetto Bellissimo Per Gatti', 'Rosa', '10.52 E'),
    new Cat('Tiragraffi a forma di scatola', 'CatCode#122', 'Descrizione tiragraffi per gatti', 'Lavanda','71.99 E'),
    new Cat('Gomitolo di lana per gatti Pulce&Gattana', 'CatCode#122', 'Descrizione gomitolo giocattolo per gatti', 'Blu', '19.99 E')
]
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
                    <h6 class="card-text text-danger">Marca: <?php echo $dog->breed; ?></h6>     
                    <p class="card-text"> <strong>Descrizione: </strong>  <?php echo $dog->description; ?> </p>        
                    <p class="card-text"><strong>Prezzo:</strong> <?php echo $dog->price; ?></p>
                    <p class="card-text"><strong>Colore:</strong> <?php echo $dog->color; ?></p>
                </div>
            </div>
        <?php } ?>

        <h2>Articoli per  gatti:</h2>
        <?php foreach($cat_articles as $cat) { ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cat->article; ?></h5>
                    <h6 class="card-text text-danger">Marca: <?php echo $cat->breed; ?></h6>     
                    <p class="card-text"> <strong>Descrizione: </strong>  <?php echo $cat->description; ?> </p>        
                    <p class="card-text"><strong>Prezzo:</strong> <?php echo $cat->price; ?></p>
                    <p class="card-text"><strong>Colore:</strong> <?php echo $cat->color; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>