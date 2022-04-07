<?php

namespace App\Http\Controllers;

class TortasController
{
    function index()
    {
        echo '<p> inicio torta </p>';
        return new \App\Http\Response(' tortas');
    }

    function crear()
    {
        echo '<p> crear </p>';
        return new \App\Http\Response(' crearTortas');
    }

    function editar()
    {
        echo '<p> editar </p>';
        return new \App\Http\Response(' editarTortas');
    }


}