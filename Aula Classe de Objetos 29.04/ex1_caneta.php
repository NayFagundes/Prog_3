<?php

// Definindo a classe Caneta

class Caneta
{
    public $Cor;
    public $marca;
    public $ponta;
    public $tamanho;
    public $carga;


    //definir métodos
    public function escrever($texto) 
    {
        echo "Escrevendo...$texto na tela<br>";
    }

    public function rabiscar()
    {
        echo "Rabiscando...<br>";

    }
    public function sublinhar()
    {
        echo "Sublinhando...<br>";

    }
    public function pintar()
    {
        echo "Pintando...<br>";
    }
}

    //Instanciando a Classe Caneta
    $caneta1 = new Caneta();
    // como os atributos da Classe Caneta são públicos, podemos acessá-los diretamente

    $caneta1->cor="azul"; 
    $caneta1->marca="BIC";
    $caneta1->ponta=0.5;
    $caneta1->tamanho="grande";
    $caneta1->carga=100;
    $caneta1->Cor="azul";

    //exibindo os atributos da caneta
    echo "Cor: " . $caneta1->cor . "<br>";
    echo "Marca: " . $caneta1->marca . "<br>";
    echo "Ponta: " . $caneta1->ponta . "<br>";
    echo "Tamanho: " . $caneta1->tamanho . "<br>";
    echo "Carga: " . $caneta1->carga . "<br>";

    //Chamando os métodos da caneta
    $caneta1->escrever(1);
    $caneta1->rabiscar();
    $caneta1->sublinhar();
    $caneta1->pintar();
    
    $caneta2 = new Caneta();
    $caneta2->escrever("Fim da aula", )  

?>