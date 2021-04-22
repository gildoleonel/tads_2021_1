<?php
include_once('conectamysql.php');

if(!isset($_GET["id"]))
    exit ('Opção inválida');

$id = $_GET["id"];

/*** Conexão bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql SELECT***/
$sql ="SELECT * FROM `aluno` WHERE aluno=$id";

$result = $mysqli->query($sql);

if($result === false) {
    // Erro ao selecionar
    echo 'Falha na seleção<br />';
} else {
    $row = mysqli_fetch_assoc($result);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form action="alteraraluno.php" method="post">
        Nome: <input type="text" name="nome" value='<?= $row['nome'] ?>'> <br>
        Nascimento:  <input type="date" name="nascimento" value='<?= $row['data_nasc'] ?>'> <br>
        <input type="hidden" name="id" value='<?= $row['aluno'] ?>'> <br>
        <input type="submit">
    </form>
    </body>
    </html>
    <?php
}

/*** close connection ***/
$mysqli->close();



?>