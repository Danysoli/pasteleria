<?php

require __DIR__ . '/../vendor/autoload.php';

$request =  new App\Http\Request;

echo $request->send();