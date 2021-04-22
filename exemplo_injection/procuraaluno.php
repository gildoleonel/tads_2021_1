<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
    Nome: <input type="text" name="nome"> <br>
    <input type="submit">
</form>


<?php

if (isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    include_once('conectamysql.php');

    /*** Conexão bem sucedida ***/
    echo 'Conectado com sucesso<br />';

    $mysqli->select_db('aluno');

    /*** sql SELECT***/
    $sql = "SELECT * FROM aluno WHERE nome LIKE '$nome'";
    var_dump($sql);
    $result = $mysqli->query($sql);

    if ($result === false) {
        // Erro ao selecionar
        echo 'Falha na seleção<br />';
    } else {
        echo 'Total de alunos: ' . $result->num_rows . '<BR>'; ?>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Nascimento</td>
            </tr>
            <?php
            // Quebra o resultado em arrays
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td> <?= $row['aluno'] ?></td>
                    <td> <?= $row['nome'] ?></td>
                    <td> <?= $row['data_nasc'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
    /*** close connection ***/
    $mysqli->close();

}

?>

</body>
</html>
