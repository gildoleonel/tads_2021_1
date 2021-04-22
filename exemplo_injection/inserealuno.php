<?php
if(!isset($_POST["nome"])or!isset($_POST["nascimento"]))
    exit ('Você não preencheu todos os dados do formulário');

$nome = $_POST["nome"];

$nascimento = $_POST["nascimento"];

include_once('conectamysql.php');

/*** Conexão bem sucedida ***/
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