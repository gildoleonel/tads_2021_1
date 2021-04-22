<?php
class Aluno {
    public $aluno;
    public $nome;
    public $data_nasc;

    public function info()
    {
        return '<hr>#'.$this->aluno.': '.$this->nome.' '.$this->data_nasc;
    }
}


$mysqli->select_db('aluno');

$sql ="SELECT * FROM aluno";

if($result = $mysqli->query($sql)) {
    while ($obj =  $result->fetch_object('Aluno')) {
        echo $obj->info();
    }
    $result->close();
} else {
    echo 'Falha na seleção<br />';
}
$mysqli->close();

?>