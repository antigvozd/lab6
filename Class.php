<?php

include "Postavshik.php";
include "Bar.php";

function filter($mas, $cath){
    for ($x=0;$x=$mas; $x++){
        if ($this->cathegory == $cath){
            return $this->fio . ", " . $this->address . ", " . $this->telefon;
        }
    }
}

$post = new Postavshik();
$post->setinfo("Андрей", "22 str", "8-800-555-35-35", "main");
$post->getinfo();
?>
