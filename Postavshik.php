<?php

    class Postavshik
    {
        var $fio;
        var $address;
        var $telefon;
        var $cathegory;
        var $info;

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



