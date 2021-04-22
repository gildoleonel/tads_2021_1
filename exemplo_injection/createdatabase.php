<?php
include_once('conectamysql.php');
    /*** Conexão bem sucedida ***/
    echo 'Conectado com sucesso<br />';

    /*** SQL ***/
    $sql = 'CREATE DATABASE IF NOT EXISTS aluno;';

    if($mysqli->query($sql) === TRUE)
    {
        echo 'Base de dados criada com sucesso<br />';
    }
    else
    {
        echo $sql.'<br />' . $mysqli->error;
    }

    /*** termina a conexão***/
    $mysqli->close();

?>