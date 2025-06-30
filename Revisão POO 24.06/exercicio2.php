<?php

// Definição da classe Livro
class Livro {
    // Atributos privados: título, autor e disponibilidade do livro
    private $titulo;
    private $autor;
    private $disponivel;

    // Construtor: inicializa o título, autor e define o livro como disponível
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    // Retorna o título do livro
    public function getTitulo() {
        return $this->titulo;
    }

    // Verifica se o livro está disponível para empréstimo
    public function estaDisponivel() {
        return $this->disponivel;
    }

    // Realiza o empréstimo do livro, se estiver disponível
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false; // Marca como emprestado
            echo "Livro emprestado com sucesso!<br>";
        } else {
            echo "Livro já foi emprestado!";
        }
    }

    // Devolve o livro, tornando-o disponível novamente
    public function devolver() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso! <br>";
    }
}

// Definição da classe Aluno
class Aluno {
    // Atributos privados: nome e matrícula do aluno
    private $nome;
    private $matricula;

    // Construtor: inicializa o nome e, opcionalmente, a matrícula
    public function __construct($nome, $matricula = null) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    // Método para o aluno pegar um livro emprestado
    public function pegarLivro(Livro $l) {
        echo $this->nome . " pegou o livro '" . $l->getTitulo() . "'.<br>";
        $l->emprestar();
    }
}

// Criação de um objeto Livro e um objeto Aluno
$livro = new Livro("1984", "George Orwell");
$aluno = new Aluno("Nayane");

// O aluno pega o livro emprestado
$aluno->pegarLivro($livro);
