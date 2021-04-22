<?php
spl_autoload_register(function ($class){
    $arquivo = str_replace('\\','/',$class).'.php';
    if(file_exists($arquivo)):
        require_once $arquivo;
    else:
        die('Arquivo não encontrado: '.$arquivo);
    endif;
});

//require_once 'Conexao.php';
//require_once 'Recados/Recado.php';


use Recados\Conexao;

$conexao = new Conexao();
$db = $conexao->getConexao();

//Usuário preencheu os dados para cadastro
if ( !empty($_POST['acao']) && ($_POST['acao'] == 'Cadastrar')):
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $recado = $_POST['recado'];
    $sql = "INSERT INTO `default`.`recados` (`nome`, `email`, `cidade`, `recado`) VALUES ('$nome','$email','$cidade','$recado');";

    if(!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao inserir: '.$db->error;
    else:
        echo 'Cadastro realizado com sucesso!';
    endif;
endif;

//Usuário preencheu os dados para alteração
if ( !empty($_POST['acao']) && ($_POST['acao'] == 'Alterar')):
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $recado = $_POST['recado'];
    $id = $_POST['id'];

    $sql = "UPDATE `default`.`recados` SET `nome` = '$nome', `email` = '$email', `cidade` = '$cidade', `recado` = '$recado' WHERE `idrecados` = $id;";

    if(!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao alterar: '.$db->error;
    else:
        echo 'Cadastro alterado com sucesso!';
    endif;
endif;

//Usuário clicou no link para excluir
if (!empty($_GET['excluir'])):
    $id = $_GET['excluir'];
    $sql = "DELETE FROM `default`.`recados` WHERE `recados`.`idrecados` = $id ; ";

    if(!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao excluir: '.$db->error;
    else:
        if ($db->affected_rows > 0):
            echo 'Cadastro excluido com sucesso!';
        else:
            echo 'Cadastro não existe';
        endif;
    endif;
endif;

//Usuário clicou no link para alterar
if (!empty($_GET['alterar'])):
    $id = $_GET['alterar'];
    $sql = "SELECT * FROM `default`.`recados` WHERE `recados`.`idrecados` = $id ; ";

    if(!$result = $db->query($sql)):
        echo 'Ocorreu um erro ao recuperar dados: '.$db->error;
    else:
        if ($db->affected_rows > 0):
            $dados = $result->fetch_object('Recados\Recado');
        else:
            echo 'Cadastro não existe';
        endif;
    endif;
endif;
