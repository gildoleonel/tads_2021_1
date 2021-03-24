<?php
include_once 'Pessoa.php';

$mariazinha = new Pessoa('Mariazinha',7,null);
$juquinha = new Pessoa('Juquinha',12,$mariazinha);
$pedrinho = new Pessoa('Pedrinho',30,$juquinha);

echo 'O(a) Primo(a) de segundo grau do ';
$pedrinho->showNome();
echo ' é ';
$pedrinho->primo->primo->showNome();

