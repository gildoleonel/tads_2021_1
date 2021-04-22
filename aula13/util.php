<?php
spl_autoload_register(function ($class){
    $base = 'app/';
    $nomeDaClasse = str_replace('\\','/',$class);
    $nomeDaClasse =$base.$nomeDaClasse.'.php';
    require_once $nomeDaClasse;
});