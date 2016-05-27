<?php

    class Postavshik
    {

        var $fio; ///<ФИО Поставщика
        var $address; ///<Адрес Поставщика
        var $telefon;   ///<Телефон Поставщика
        var $cathegory;


        function setinfo($fio, $address, $telefon, $cathegory){

            $this->fio = $fio;
            $this->address = $address;
            $this->telefon = $telefon;
            $this->cathegory = $cathegory;
        }

        function getinfo(){
            return $this->fio . ", " . $this->address . ", " . $this->telefon;
        }
    }

?>



