<?php

    class Postavshik
    {
        var $fio; ///<ФИО Поставщика
        var $address; ///<Адрес Поставщика
        var $telefon;   ///<Телефон Поставщика
        var $info;
        
        function setinfo($fio, $address, $telefon){
            $this->fio = $fio;
            $this->address = $address;
            $this->telefon = $telefon;
        }

        function getinfo(){
            return $this->fio . ", " . $this->address . ", " . $this->telefon;
        }
    }

?>



