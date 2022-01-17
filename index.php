<?php

    class Film{

        public $titolo;
        public $sottotitolo;
        public $regista;
        
        public function __construct($titolo){
            $this-> titolo = $titolo;
        }

        public function getFullTitle(){
            if(strlen($this-> sottotitolo) > 0){
                return $this-> titolo . ": " . $this->sottotitolo;
            }else{
                return $this-> titolo;
            }
        }

        public function __toString(){
            if(strlen($this-> regista) > 0){
                return $this -> getFullTitle() . " | " . $this -> regista;
            }else{
                return $this -> getFullTitle() . " | ???";
            }
        }
    }

    $film1 = new Film("Matrix");

    $film2 = new Film("Fantozzi 2");
    $film2 -> sottotitolo = "il ritorno di fantozzi";

    $film3 = new Film("Peter Pan");
    $film3 -> sottotitolo = "il ritorno all'isola che non c'e'";
    $film3 -> regista = "Robin Budd";

    echo $film1 . "<br>";
    echo $film2 . "<br>";
    echo $film3 . "<br>";
?>