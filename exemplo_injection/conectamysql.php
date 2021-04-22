<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

/*** Novo objeto mysqli ***/
$mysqli = @new mysqli($hostname, $username, $password);

/* check connection */
if(mysqli_connect_errno())
{
    /*** Não foi possível conectar ***/
    echo 'Falha na conexão';
    exit();
}
?>