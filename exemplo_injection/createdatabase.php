<?php
include_once('conectamysql.php');
    /*** Conex�o bem sucedida ***/
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

    /*** termina a conex�o***/
    $mysqli->close();

?>