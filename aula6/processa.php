<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['user_id']) && $_POST['user_id']==123){
    echo 'O sobrenome do usuário é: '.$_POST['nome']. '<BR>';
    echo 'O turno dele é '.$_POST['turno'].'<BR>';
    echo 'O periodo é '.$_POST['periodo'].'<BR>';
    echo 'Estava presente nas aulas: ';
    echo '<ul>';
    foreach ($_POST['presenca'] as $aula){
        echo '<li>';
        echo getNomeAula($aula);
        echo '</li>';
    }
    echo '<ul>';

}


function getNomeAula($numAula){
     switch ($numAula){
         case '1':
             return 'primeira';
             break;
         case '2':
             return 'segunda';
             break;
         case '3':
             return 'terceira';
             break;
         case '4':
             return 'quarta';
             break;
         default:
             return 'Valor inválido';
     }
};
