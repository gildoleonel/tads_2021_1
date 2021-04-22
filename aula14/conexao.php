<?php
$conexao = new mysqli('127.0.0.1','root','root','default',3306);

if ($conexao->connect_errno > 0){
    die('Não foi possível conectar '.$conexao->connect_error );
}