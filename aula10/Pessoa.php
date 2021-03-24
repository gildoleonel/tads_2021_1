<?php
class Pessoa
{
    public int $idade;
    private string $nome;
    public ?Pessoa $primo;

    function __construct(string $nome, int $idade,?Pessoa $primo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->primo = $primo;
    }


    function showIdade(){
        echo $this->idade;
    }

    function showNome(){
        echo $this->nome;
    }

}
