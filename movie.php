<?php 

class Movie {

    public $name;
    public $date;
    public $time;
    public $explicit;
    public $maggiorenne;

    public function __construct($_name, $_date, $_time, $_explicit, $_maggiorenne) {

        $this->name = $_name;
        $this->date = $_date;
        $this->time = $_time;
        $this->explicit = $_explicit;
        $this->maggiorenne = $_maggiorenne;
    }

    public function get18() {
        if($this->explicit == "yes") {
            return $this->maggiorenne = "+18";
        }

        return false;
        
        
    }
}
