<?php

class Bar extends Postavshik
{
    function setinfo($fio, $address, $telefon, $cathegory){
        $this->fio = $fio;
        $this->address = $address;
        $this->telefon = $telefon;
        $this->cathegory = $cathegory;
    }
}
