<?php
if(!isset($_POST["nome"])or!isset($_POST["nascimento"]))
    exit ('Voc� n�o preencheu todos os dados do formul�rio');

$nome = $_POST["nome"];

$nascimento = $_POST["nascimento"];

include_once('conectamysql.php');

/*** Conex�o bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql INSERT***/
$sql = "INSERT INTO aluno ( nome, data_nasc)
    VALUES ( '$nome', '$nascimento')";


if($mysqli->query($sql) === TRUE)
{
    echo 'Novo registro inserido com sucesso!<br />';
}
else
{
    echo $sql.'<br />' . $mysqli->error;
}

/*** close connection ***/
$mysqli->close();



?>