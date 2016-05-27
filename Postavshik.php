<?php

    class Postavshik
    {

        function setinfo($fio, $address, $telefon, $cathegory){
            $this->fio = $fio;
            $this->address = $address;
            $this->telefon = $telefon;
            $this->cathegory = $cathegory;
        }

        function getinfo(){
            return $this->fio . ", " . $this->address . ", " . $this->telefon . ", " . $this->cathegory;
        }
    }

?>



