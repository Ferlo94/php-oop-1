<?php 

class Movie {

    public $name;
    public $date;
    public $time;

    public function __construct($_name, $_date) {

        $this->name = $_name;
        $this->date = $_date;
    }
}

// $ilGladiatore->name = "Il Gladiatore";
// $ilGladiatore->date = "19 Maggio 2000";
// $ilGladiatore->time = "2h 35m";

// $gliAristogatti->name = "Gli Aristogatti";
// $gliAristogatti->date = "13 Novembre 1971";
// $gliAristogatti->time = "1h 18m";