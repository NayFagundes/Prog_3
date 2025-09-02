<?php
// Classe base Quarto
class Quarto {
    protected $numero; // Número do quarto
    protected $preco;  // Preço do quarto

    // Construtor recebe o número do quarto
    public function __construct($num) {
        $this->numero = $num;
    }

    // Retorna o número do quarto
    public function getNumero() {
        return $this->numero;
    }
}

// Classe Standard herda de Quarto
class Standard extends Quarto {
    public function getPreco() {
        return $this->preco = 300.00;
    }
}

// Classe Deluxe herda de Quarto
class Deluxe extends Quarto {
    public function getPreco($hospedes) {
        if ($hospedes > 2) {
            // Mais de 2 hóspedes: 20% + 10%
            return $this->preco = (300.00 * 1.2) * 1.1;
        } else {
            // Até 2 hóspedes: 20%
            return $this->preco = 300.00 * 1.2;
        }
    }
}

// Classe Suite herda de Quarto
class Suite extends Quarto {
    public function getPreco($dia) {
        if ($dia >= 2 && $dia <= 6) {
            // Dias úteis: 50% acréscimo
            return $this->preco = 300.00 * 1.5;
        } else {
            // Finais de semana: 50% + 50%
            return $this->preco = (300.00 * 1.5) * 1.5;
        }
    }
}

// Testes
$std = new Standard(11);
echo "Hospede - Quarto: " . $std->getNumero() . " Valor R$ " . $std->getPreco() . "<br>";

$duplo = new Deluxe(41);
echo "Hospede - Quarto: " . $duplo->getNumero() . " Valor R$ " . $duplo->getPreco(2) . "<br>";

$suite = new Suite(101);
echo "Hospede - Quarto: " . $suite->getNumero() . " Valor R$ " . $suite->getPreco(1) . "<br>";
?>
