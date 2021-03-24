<?php
class Calculadora
{
    function soma(int $a,int $b):int{
        return $a.$b;
    }

    public function __construct()
    {
    }
}

$calcula = new Calculadora();
echo $calcula->soma(1,2);