<?php


abstract class Fruta
{
    private int $cor;
    private int $tipo;
    static int $quantidade = 0;

    const PSEUDOFRUTO = 5;

    abstract public function imprimeInformacoes();

    public function __get($name)
    {         
          if (property_exists(__CLASS__,$name)){
                return $this->$name;
          }else{
                echo 'Tentou acessar a propriedade'.$name;
          }
    }

    public function __set($name, $value)
    {
          if (property_exists(__CLASS__,$name)){
                $this->$name = $value;
          }else{
            echo 'Tentou acessar a propriedade'.$name.'e atribuir o valor'.$value;
          }
    }

}
