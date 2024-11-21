<?php
require_once("clases/Electrodomesticos.php");

$televisor = new Televisor();
echo $televisor->encender();
$televisor->funcionar(); 
$televisor->funcionar(); 

$lavadora = new Lavadora();
$lavadora->funcionar(); 
$lavadora->funcionar();

var_dump($televisor,$lavadora);