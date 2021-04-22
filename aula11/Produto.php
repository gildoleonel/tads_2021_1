<?php

interface Produto{
    public function imprimeEtiqueta();
    public function exibeDesconto(float $desconto);
}