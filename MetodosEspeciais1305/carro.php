<?php

class Carro
{
    private $modelo;
    private $cor;
    private $ano;

    public function __construct($modelo, $cor, $ano)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;

    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;

    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getAno()
    {
        return $this->ano;

    }

}

$c1 = new Carro("Palio", "vermelho", 2010);
echo "O modelo do carro é: " . $c1->getAno() . "<br> A cor é: " . $c1->getCor() . "<br> O ano é: " . $c1->getAno();

?>