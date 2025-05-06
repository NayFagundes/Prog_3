<?php
//  Exercício 1 – Criando uma classe básica
Class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes() {
        echo "<p><strong>Nome:</strong> $this->nome<br>";
        echo "<strong>Preço:</strong> R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "<strong>Quantidade:</strong> $this->quantidade</p>";
    }
}

// Exercício 2:  Criando objetos e atribuindo valores
$produto1 = new Produto();
$produto1->nome = "Caneta";
$produto1->preco = 2.50;
$produto1->quantidade = 10;

$produto2 = new Produto();
$produto2->nome = "Lápis";
$produto2->preco = 1.50;
$produto2->quantidade = 20;

$produto1->exibirInformacoes();
$produto2->exibirInformacoes();


// Exercício 3 – Criando uma função para mostrar a média de preços
function mostrarMediaPrecos($produto1, $produto2){
    $media = ($produto1->preco + $produto2->preco)/2;
    echo "A média de preços é: R$ " . number_format($media, 2, ',', '.') . "<br>";
}
mostrarMediaPrecos($produto1, $produto2);


?>