<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function somar($a, $b){
   return $a + $b;
}

function retorna($c, $d){
    return $c;
}

$d = 4;
$c = 10;

function imprimeD(&$var){
    echo $var. '<br>';
    $var++;
}

imprimeD($d);

echo $d;



