<?php
if(!isset($_POST["nome"])or!isset($_POST["nascimento"])or!isset($_POST["id"]))
    exit ('Voc� n�o preencheu todos os dados do formul�rio');

$nome = $_POST["nome"];

$nascimento = $_POST["nascimento"];

$id = $_POST["id"];

include_once('conectamysql.php');

/*** Conex�o bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql INSERT***/
$sql = "UPDATE aluno SET nome = '$nome', data_nasc = '$nascimento' WHERE aluno = $id";

if($mysqli->query($sql) === TRUE)
{
    echo 'Registro alterado com sucesso!<br />';
}
else
{
    echo $sql.'<br />' . $mysqli->error;
}

/*** close connection ***/
$mysqli->close();



?>