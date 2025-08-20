<?php

/***********************
 * Exercício 1
 ***********************/
// Classe base Funcionario
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Adiciona aumento ao salário
    public function addAumento($valor) {
        $this->salario += $valor;
    }

    // Retorna o ganho anual
    public function ganhoAnual() {
        return $this->salario * 12;
    }

    // Exibe dados do funcionário
    public function exibeDados() {
        echo "Nome: {$this->nome}, Salário: {$this->salario} </br>";
    }
}

// Classe Assistente, herda Funcionario
class Assistente extends Funcionario {
    private $matricula;

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($numero) {
        $this->matricula = $numero;
    }

    // Sobrescreve exibeDados para mostrar matrícula
    public function exibeDados() {
        parent::exibeDados();
        echo "Número de Matrícula: {$this->matricula} </br>";
    }
}

// Classe Tecnico, herda Assistente, possui bônus salarial
class Tecnico extends Assistente {
    private $bonus = 1000; // valor fixo de bônus

    // Sobrescreve ganhoAnual para incluir bônus
    public function ganhoAnual() {
        return parent::ganhoAnual() + $this->bonus;
    }
}

// Classe Administrativo, herda Assistente, possui turno e adicional noturno
class Administrativo extends Assistente {
    private $turno;
    private $adicionalNoturno;

    public function __construct($nome, $salario, $turno, $adicionalNoturno) {
        parent::__construct($nome, $salario);
        $this->turno = $turno;
        $this->adicionalNoturno = $adicionalNoturno;
    }

    // Sobrescreve ganhoAnual para incluir adicional noturno
    public function ganhoAnual() {
        return parent::ganhoAnual() + ($this->turno == "noite" ? $this->adicionalNoturno * 12 : 0);
    }
}

/***********************
 * Exercício 2
 ***********************/
// Diagrama Pessoa, Rica, Pobre, Miseravel
class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    public function __construct($nome, $idade, $dinheiro) {
        parent::__construct($nome, $idade);
        $this->dinheiro = $dinheiro;
    }

    public function fazCompras() {
        echo "{$this->nome} está fazendo compras com R$ {$this->dinheiro} </br>";
    }
}

class Pobre extends Pessoa {
    public function trabalha() {
        echo "{$this->nome} está trabalhando </br>";
    }
}

class Miseravel extends Pessoa {
    public function mendiga() {
        echo "{$this->nome} está mendigando </br>";
    }
}

// Diagrama Animal, Cachorro, Gato
class Animal {
    protected $nome;
    protected $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function caminha() {
        echo "{$this->nome} está caminhando </br>";
    }
}

class Cachorro extends Animal {
    public function late() {
        echo "{$this->nome} late: Au Au! </br>";
    }
}

class Gato extends Animal {
    public function mia() {
        echo "{$this->nome} mia: Miau! </br>";
    }
}

/***********************
 * Exercício 3
 ***********************/
// Classe Ingresso
class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function imprimeValor() {
        echo "Valor do Ingresso: R$ {$this->valor} </br>";
    }
}

// Classe VIP, herda Ingresso, possui valor adicional
class VIP extends Ingresso {
    private $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function valorVIP() {
        return $this->valor + $this->valorAdicional;
    }
}

// Classe Normal, herda Ingresso
class Normal extends Ingresso {
    public function imprime() {
        echo "Ingresso Normal </br>";
    }
}

// Classe CamaroteInferior, herda VIP, possui localização
class CamaroteInferior extends VIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function acessaLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeLocalizacao() {
        echo "Localização: {$this->localizacao} </br>";
    }
}

// Classe CamaroteSuperior, herda VIP, valor adicional
class CamaroteSuperior extends VIP {
    public function valorCamaroteSuperior() {
        return $this->valorVIP() + 50;
    }
}

/***********************
 * Exercício 4
 ***********************/
// Classe Imovel
class Imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Classe Novo, herda Imovel, possui adicional no preço
class Novo extends Imovel {
    private $adicionalPreco;

    public function __construct($endereco, $preco, $adicionalPreco) {
        parent::__construct($endereco, $preco);
        $this->adicionalPreco = $adicionalPreco;
    }

    public function getPrecoFinal() {
        return $this->preco + $this->adicionalPreco;
    }

    public function imprimeAdicional() {
        echo "Adicional do imóvel novo: R$ {$this->adicionalPreco} </br>";
    }
}

// Classe Velho, herda Imovel, possui desconto no preço
class Velho extends Imovel {
    private $descontoPreco;

    public function __construct($endereco, $preco, $descontoPreco) {
        parent::__construct($endereco, $preco);
        $this->descontoPreco = $descontoPreco;
    }

    public function getPrecoFinal() {
        return $this->preco - $this->descontoPreco;
    }

    public function imprimeDesconto() {
        echo "Desconto do imóvel velho: R$ {$this->descontoPreco} </br>";
    }
}

/***********************
 * Exercício 5 - Classe de Teste
 ***********************/
class Teste {
    public static function main() {
        // a. Criação de assistente administrativo e técnico
        $assistenteAdmin = new Administrativo("João", 3000, "noite", 500);
        $assistenteAdmin->setMatricula(123);
        echo "Assistente Administrativo: ";
        $assistenteAdmin->exibeDados();

        $assistenteTec = new Tecnico("Maria", 3500);
        $assistenteTec->setMatricula(456);
        echo "Assistente Técnico: ";
        $assistenteTec->exibeDados();

        // b. Criação de cachorro e gato
        $cachorro = new Cachorro("Rex", "Vira-lata");
        $gato = new Gato("Mimi", "Siamês");
        $cachorro->late();
        $gato->mia();
        $cachorro->caminha();
        $gato->caminha();

        // c. Teste das classes Rica, Pobre e Miseravel
        $rica = new Rica("Ana", 30, 10000);
        $rica->fazCompras();

        $pobre = new Pobre("Carlos", 25);
        $pobre->trabalha();

        $miseravel = new Miseravel("José", 40);
        $miseravel->mendiga();

        // d. Teste das classes de ingresso
        echo "<hr>";
        $tipoIngresso = readline("Digite 1 para ingresso Normal ou 2 para VIP: ");
        if ($tipoIngresso == 1) {
            $ingresso = new Normal(50);
            $ingresso->imprime();
            $ingresso->imprimeValor();
        } else {
            $tipoVIP = readline("Digite 1 para Camarote Superior ou 2 para Camarote Inferior: ");
            if ($tipoVIP == 1) {
                $vip = new CamaroteSuperior(100, 30);
                echo "Ingresso VIP Camarote Superior: R$ " . $vip->valorCamaroteSuperior() . "</br>";
            } else {
                $vip = new CamaroteInferior(100, 30, "Setor A");
                echo "Ingresso VIP Camarote Inferior: R$ " . $vip->valorVIP() . "</br>";
                $vip->imprimeLocalizacao();
            }
        }

        // e. Teste das classes de imóvel
        echo "<hr>";
        $tipoImovel = readline("Digite 1 para imóvel Novo ou 2 para Velho: ");
        if ($tipoImovel == 1) {
            $imovelNovo = new Novo("Rua A", 200000, 5000);
            echo "Preço final do imóvel novo: R$ " . $imovelNovo->getPrecoFinal() . "</br>";
            $imovelNovo->imprimeAdicional();
        } else {
            $imovelVelho = new Velho("Rua B", 150000, 10000);
            echo "Preço final do imóvel velho: R$ " . $imovelVelho->getPrecoFinal() . "</br>";
            $imovelVelho->imprimeDesconto();
        }
    }
}

// Executa os testes
Teste::main();

?>