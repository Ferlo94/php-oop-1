<?php
require_once __DIR__ . './movie.php';

    $movies = [
        new Movie("Il Gladiatore", "19 Maggio 2000"),
        new Movie("Gli Aristogatti", "13 Novembre 1971"),
    ];

?>

<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I FILM</h1>
    <ul>
        
        <?php foreach($movies as $movie) { ?>

            <li>
                <h3><?php echo $movie->name; ?></h3>
            </li>

        <?php } ?>

    </ul>
</body>
</html>