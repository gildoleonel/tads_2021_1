<?php
include_once "Pessoa.php";

class Professor extends Pessoa{
    public function __construct()
    {
        Pessoa::__contruct();
    }

    function showIdadeProfessor(){
        Pessoa::showIdade();
        echo "Complemento da função";
    }
}
