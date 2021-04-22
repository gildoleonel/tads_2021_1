<?php
include_once 'Fruta.php';
include_once 'Produto.php';

class Maca extends Fruta implements Produto
{
    private int $tipoMaca;
    const FUJI = 16;
    public function __construct($cor,$tipoMaca)
    {
        echo "<p>Criando a Maça</p>";

        $this->cor = $cor;
        $this->tipo = Fruta::PSEUDOFRUTO;

        echo $this->cor;

        $this->tipoMaca = $tipoMaca;


    }

    public function morder(){
        echo"<p>Mordendo a Maça</p>";
    }

    public function __destruct()
    {
        echo "<p>Destruindo a Maça</p>";
    }

    public function imprimeInformacoes()
    {
        echo "Imprimindo informações da fruta: <br>";


        switch ($this->cor){
            case PRETO: echo "Cor: Preta <br>";
                        break;
            case VERMELHO: echo "Cor: vermelha <br>";
                        break;
        }

        if ($this->tipoMaca == self::FUJI)
            echo "Tipo: Fuji <br>";
    }

    public function imprimeEtiqueta()
    {
        self::imprimeInformacoes();
        echo "Quantidade de frutas criadas: ";
        echo Fruta::$quantidade;
        echo "<br>";

    }

    public function exibeDesconto(float $desconto)
    {
        echo "Não tem desconto";
    }

    public function __call($name,$args)
    {
        echo 'Tentou acessar '.$name;
        var_dump($args);
    }
}