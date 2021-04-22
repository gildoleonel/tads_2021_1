<?php
include_once('conectamysql.php');

if(!isset($_GET["id"]))
    exit ('Opção inválida');

$id = $_GET["id"];

/*** Conexão bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql SELECT***/
$sql ="DELETE FROM aluno WHERE aluno = $id";

$result = $mysqli->query($sql);
if($mysqli->query($sql) === TRUE)
{
    echo 'Aluno excluido com sucesso!<br />';
}
else
{
    echo $sql.'<br />' . $mysqli->error;
}
/*** close connection ***/
$mysqli->close();



?>