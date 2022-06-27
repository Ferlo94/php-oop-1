<?php


class Movie {
    public $name;
    public $date;

    public function __construct($_name, $_date) {

    }
   
}

$ilGladiatore = new Movie("Il Gladiatore", "19 Maggio 2000");
$ilGladiatore->name = "Il Gladiatore";
$ilGladiatore->date = "19 Maggio 2000";

$gliAristogatti = new Movie("Gli Aristogatti", "13 Novembre 1971");
$gliAristogatti->name = "Gli Aristogatti";
$gliAristogatti->date = "13 Novembre 1971";

var_dump($ilGladiatore, $gliAristogatti);

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