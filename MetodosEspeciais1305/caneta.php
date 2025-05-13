<?php

class Caneta
{
    private $ponta;
    public $cor;

    public function __construct($ponta, $cor) //construtor
    {
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    public function getPonta() //get pega
    {
        return $this->ponta;
    }

    public function setPonta($ponta)  //set acessa 
    {
        $this->cor = $ponta;
    }


}

$c1 = new Caneta(10, "branca");
print_r($c1);

?>