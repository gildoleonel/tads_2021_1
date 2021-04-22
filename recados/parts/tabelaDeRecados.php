<?php
require_once 'inicializacao.php';

    $sql = 'SELECT *  FROM `default`.`recados`;';

    if(!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao acessar a base: '.$db->error;
    else:
?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th>Recado</th>
                <th></th>
                <th></th>
            </tr>
<?php
            while ($row = $result->fetch_object('Recados\Recado') ):
?>
                <tr>
                    <td><?= $row->getNome() ?></td>
                    <td><?= $row->getEmail() ?></td>
                    <td><?= $row->getCidade() ?></td>
                    <td><?= $row->getRecado() ?></td>
                    <td><a href="index.php?excluir=<?= $row->getIdrecados() ?>">Excluir</a> </td>
                    <td><a href="index.php?alterar=<?= $row->getIdrecados() ?>">Alterar</a> </td>
                </tr>
<?php
            endwhile;
?>
        </table>

<?php
    endif;
?>