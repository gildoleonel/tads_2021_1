<?php
include_once('conectamysql.php');

/*** Conexão bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql para criar a tabela ***/
$sql = "CREATE TABLE aluno (
          aluno int(11) NOT NULL auto_increment,
          nome varchar(100) NOT NULL,
          data_nasc date default NULL,
          PRIMARY KEY  (aluno)
        )";


if($mysqli->query($sql) === TRUE)
{
    echo 'Nova tabela criada com sucesso<br />';
}
else
{
    echo $sql.'<br />' . $mysqli->error;
}

/*** close connection ***/
$mysqli->close();



?>