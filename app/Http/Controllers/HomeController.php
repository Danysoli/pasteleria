<?php

namespace App\Http\Controllers;

class HomeController
{
    function index()
    {
        echo '<p> implementar la logica del controlador Home del metodo index </p>';
        return new \App\Http\Response(' home');
    }

    function saludar()
    {
        echo '<p> implementar la logica del controlador home del metodo saludar <\p>';
    }
}