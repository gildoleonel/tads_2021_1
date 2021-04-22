<?php
include_once('conectamysql.php');

/*** Conexão bem sucedida ***/
echo 'Conectado com sucesso<br />';

$mysqli->select_db('aluno');

/*** sql SELECT***/
$sql ="SELECT * FROM `aluno`";

$result = $mysqli->query($sql);

if($result === false) {
    // Erro ao selecionar
    echo 'Falha na seleção<br />';
} else {
    echo 'Total de alunos: ' . $result->num_rows.'<BR>'; ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Nascimento</td>
            <td>EXCLUIR</td>
            <td>ALTERAR</td>
        </tr>
<?php
    // Quebra o resultado em arrays
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
             <td> <?= $row['aluno'] ?></td>
             <td> <?= $row['nome'] ?></td>
             <td> <?= $row['data_nasc'] ?></td>
            <td> <a href='excluiraluno.php?id=<?= $row['aluno'] ?>'>X</a></td>
             <td> <a href='editaaluno.php?id=<?= $row['aluno'] ?>'>X</a></td>
        </tr>
<?php } ?>
   </table>
<?php
}
/*** close connection ***/
$mysqli->close();



?>