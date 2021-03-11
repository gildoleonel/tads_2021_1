<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $var = array();


    $var[] = array('nome' => 'Pedrinho', 'sobrenome' => 'Silva','idade' => 7);
    $var[] = array('nome' => 'Juquinha', 'sobrenome' => 'Pereira', 'cidade' => 'Bicas');
    $var[] = array('nome' => 'Mariazinha', 'sobrenome' => 'Costa', 'nota' => 10, 'idade' => 8);


    foreach ( $var as $item) {

        foreach ( $item as $index => $conteudo){
            echo $index.': '.$conteudo.' ';

            $$index = $conteudo;

        }

        echo '<br>';
    }

    echo '<hr><br>';

















