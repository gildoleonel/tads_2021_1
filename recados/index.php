<?php
require_once 'parts/inicializacao.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mural de Recados</title>
</head>
<body>
<h1>Mural de Recados</h1><br>
<hr>
<p>
    <a href="index.php">Cadastrar novo recado</a>
</p>
<form action="index.php" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome" value="<?= isset($dados)?$dados->getNome():'' ?>"><br>
    <label for="email">E-mail: </label>
    <input type="text" name="email" id="email" value="<?= isset($dados)?$dados->getEmail():'' ?>"><br>
    <label for="cidade">Cidade: </label>
    <input type="text" name="cidade" id="cidade" value="<?= isset($dados)?$dados->getCidade():'' ?>"><br>
    <label for="recado">Recado: </label>
    <input type="text" name="recado" id="recado" value="<?= isset($dados)?$dados->getRecado():'' ?>"><br>
    <input type="hidden" name="id" value="<?= isset($dados)?$dados->getIdrecados():'' ?>">
    <input type="submit" name="acao" value="<?= isset($dados)?'Alterar':'Cadastrar' ?>">
</form>
<p>
<?php
    include 'parts/tabelaDeRecados.php';
?>
</p>

</body>
</html>