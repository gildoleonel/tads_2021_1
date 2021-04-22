<?php
if(!isset($_POST["nome"])or!isset($_POST["nascimento"])or!isset($_POST["id"]))
    exit ('Você não preencheu todos os dados do formulário');

$nome = $_POST["nome"];

$nascimento = $_POST["nascimento"];

$id = $_POST["id"];

include_once('conectamysql.php');

/*** Conexão bem sucedida ***/
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