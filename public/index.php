<?php

require __DIR__ . '/../vendor/autoload.php';

$miTorta = new App\Http\Torta;
$tuTorta = new \App\Http\Torta;

$miTorta->tamaño = "20";
$miTorta->color = "azul";
$miTorta->rellenos = "2";
$miTorta->nombre = "Feliz cumpleaños daniel";

$tuTorta->tamaño = "50";
$tuTorta->color = "rojo";
$tuTorta->rellenos = "4";
$tuTorta->nombre = "Feliz cumpleaños gloria";


$miTorta->mostrar();
$tuTorta->mostrar();