<?php

// Definição da classe ContaBancaria
class ContaBancaria{
    // Atributos privados: titular da conta e saldo
    private $titular;
    private $saldo;

    // Construtor: inicializa o titular e o saldo da conta
    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    // Método para depositar um valor na conta
    // Só permite depósitos de valores positivos
    public function depositar($valor){
        if ($valor > 0){
            $this->saldo += $valor; // Adiciona o valor ao saldo
            return true; // Retorna true se o depósito for realizado
        }
        return false; // Retorna false se o valor não for válido
    }

    // Método para sacar um valor da conta
    // Só permite saques de valores positivos e se houver saldo suficiente
    public function sacar($valor){
        if ($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor; // Subtrai o valor do saldo
            return true; // Retorna true se o saque for realizado
        }
        return false; // Retorna false se o valor não for válido ou saldo insuficiente
    }

    // Método para obter o nome do titular da conta
    public function getTitular(){
        return $this->titular;
    }

    // Método para obter o saldo atual da conta
    public function getSaldo(){
        return $this->saldo;
    }
}

// Criação de um objeto ContaBancaria com titular "Nayane" e saldo inicial 2
$conta = new ContaBancaria("Nayane", 2);

// Exibe o titular e o saldo inicial da conta
echo "Titular: ". $conta->getTitular() . "<br>";
echo "Saldo: " . $conta->getSaldo() . "<br>";

// Realiza um depósito de 100 reais
$conta->depositar(100);
// Realiza um saque de 50 reais
$conta->sacar(50);

// Exibe o saldo após as operações
echo "Saldo após operações: ". $conta->getSaldo() . "<br>";

//3. Crie uma classe chamada ContaBancaria com os seguintes atributos privados: titular e saldo.

//Implemente:

//Construtor para iniciar os valores;

//Métodos depositar($valor) e sacar($valor) com validações básicas;

//Métodos getTitular() e getSaldo().