<?php

namespace App\Http;

class Torta
{
    public $tamaño;
    public $color;
    public $rellenos;
    public $nombre;

    function mostrar ()
    {
        echo '<p>la torta es para '. $this->tamaño . ' personas </p>';
        echo '<p>la torta es de color '. $this->color . '</p>';
        echo '<p>la torta tiene '. $this->rellenos . ' rellenos </p>';
        echo '<p>la torta tiene el nombre de '. $this->nombre . '</p>';
    }
}