<?php

    class Postavshik
    {
        var $fio; ///<��� ����������
        var $address; ///<����� ����������
        var $telefon;   ///<������� ����������
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



