<?php
class ContaBancaria{
    public $titular; // Pode ser acessado de fora
    protected $saldo;  // Só a classe e subclasses acessam
    private $senha;  // Só a própria classe acessa


    public function __construct($titular, $senha){
        $this->titular = $titular;
        $this->saldo = 0; // Começa zerado 
        $this->senha = $senha;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor, $senha){

        if ($senha === $this->senha) {
            if ($this->saldo >= $valor) {
                $this->saldo -= $valor;
                echo "Saque de R$$valor realizado com sucesso. <br>";
            
            }else{
                echo "Saldo insuficiente.<br>";
            }
            }else{
                echo "Senha incorreta. Saque não autorizado.<br>";
        }
    }

    public function verSaldo($senha) {
        if ($senha === $this->senha){
            echo "Saldo atual: R$" . $this->saldo . "<br>";
        }else{
            echo "Senha incorreta. Não é possível mostrar o saldo.<br>";
        }
    }
}


// Criando a conta
$minhaConta = new ContaBancaria("Maria", "1234");

// 1. Depósito de R$100
$minhaConta->depositar(100);

// 2. Saque de R$50 com a senha correta
$minhaConta->sacar(50, "1234");

// 3. Tentativa de saque com senha errada
$minhaConta->sacar(30, "9999");

// 4. Ver saldo com a senha correta
$minhaConta->verSaldo("1234");

// 5. Ver saldo com a senha errada
$minhaConta->verSaldo("senhaerrada");
