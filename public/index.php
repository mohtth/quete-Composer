<?php

require __DIR__ .'/../vendor/autoload.php';
use App\Wcs\Hello;


$hello = new Hello();
//$helloWorld = new HelloWorld\SayHello();

echo $hello->talk();
//echo $helloWorld::world();

