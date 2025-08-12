<?php

// Classe base 'veiculo'
class veiculo {
    public $marca;
    public $cor;
    public $ano;
    public $tipoCombustivel;

    // Método para simular o veículo andando
    public function andar() {
        echo "andar<br>";
    }

    // Método para simular o veículo parando
    public function parar() {
        echo "parar<br>";
    }

    // Questão 3: Método para mostrar o tipo de combustível
    public function mostrarCombustivel() {
        echo "Tipo de Combustível: " . $this->tipoCombustivel . "<br>";
    }
}


// Classe 'carro' herda de 'veiculo'
class carro extends veiculo {
    // Método específico da classe carro
    public function limparPB() {
        echo "...limpandoPB<br>";
    }
}

// ---------------------------------------------
// Questão 5: Herança em Cadeia
// ---------------------------------------------
// Classe 'CarroEletrico' herda de 'carro'
class CarroEletrico extends carro {
    public function carregarBateria() {
        echo "Bateria Carregada<br>";
    }
}

// ---------------------------------------------
// Questão 2: Personalização de Método Herdado
// ---------------------------------------------
// Classe 'moto' herda de 'veiculo'
class moto extends veiculo {
    // Sobrescreve o método andar()
    public function andar() {
        echo "Moto está em movimento<br>";
    }
    public function darGrau() {
        echo "...dandoGrau<br>";
    }
}

// ---------------------------------------------
// Questão 1: Criação de Nova Classe com Herança
// ---------------------------------------------
// Classe 'caminhao' herda de 'veiculo'
class caminhao extends veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!<br>";
    }
}
// ---------------------------------------------
// Questão 3: Atributos Específicos em Carro
// ---------------------------------------------
// ---------------------------------------------
// Questão 4: Criando Múltiplos Objetos
// ---------------------------------------------

// Instancia o primeiro carro
echo "<strong>Carro 1:</strong><br>";
$carro1 = new carro();
$carro1->marca = "Uno";
$carro1->cor = "Azul";
$carro1->ano = 1999;
$carro1->tipoCombustivel = "alcool";
$carro1->andar();
$carro1->limparPB();
$carro1->mostrarCombustivel();

// Instancia o segundo carro
echo "<strong>Carro 2:</strong><br>";
$carro2 = new carro();
$carro2->marca = "Gol";
$carro2->cor = "Prata";
$carro2->ano = 2015;
$carro2->tipoCombustivel = "etanol";
$carro2->parar();
$carro2->mostrarCombustivel();

// Instancia a primeira moto
echo "<strong>Moto 1:</strong><br>";
$moto1 = new moto();
$moto1->marca = "Honda";
$moto1->cor = "Vermelha";
$moto1->ano = 2000;
$moto1->tipoCombustivel = "gasolina";
$moto1->andar();
$moto1->darGrau();

// Instancia a segunda moto
echo "<strong>Moto 2:</strong><br>";
$moto2 = new moto();
$moto2->marca = "Yamaha";
$moto2->cor = "Azul";
$moto2->ano = 2018;
$moto2->tipoCombustivel = "gasolina";
$moto2->parar();
$moto2->mostrarCombustivel();

// ---------------------------------------------
// Questão 5: Testando CarroEletrico
// ---------------------------------------------
echo "<strong>Carro Elétrico:</strong><br>";
$carroEletrico = new CarroEletrico();
$carroEletrico->marca = "Tesla";
$carroEletrico->cor = "Preto";
$carroEletrico->ano = 2020;
$carroEletrico->tipoCombustivel = "eletrico";
$carroEletrico->andar();
$carroEletrico->carregarBateria();
$carroEletrico->mostrarCombustivel();

// ---------------------------------------------
// Questão 1: Testando Caminhao
// ---------------------------------------------
echo "<strong>Caminhão:</strong><br>";
$caminhao = new caminhao();
$caminhao->marca = "Volvo";
$caminhao->cor = "Branco";
$caminhao->ano = 2012;
$caminhao->tipoCombustivel = "diesel";
$caminhao->carregarCarga();
