<?php

require_once 'carro.php';

//$carro1 = new Carro();

$carro1 = new Carro("azul", "Ferrari", "Gallardo", 250, 720, 2);
$carro2 = new Carro("verde", "Audi", "RS", 200, 630, 4);
$carro3 = new Carro("amarillo", "Mercedez", "AMG GT", 180, 831, 2);
$carro4 = new Carro("Rojo", "BMW", "x3", 220, 292, 4);

var_dump($carro1);
var_dump($carro2); 
var_dump($carro3);
var_dump($carro4);