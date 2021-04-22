<?php
include_once 'Maca.php';
include_once 'const.php';

$fruta = new Maca(VERMELHO,Maca::FUJI);
$fruta->imprimeEtiqueta();

$fruta->morder();

$fruta->descartar(1,'lixo',true);

var_dump($fruta);
?>
