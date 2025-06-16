<?php

// 📘 Classe Livro
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true; // começa disponível
        $this->leitorAtual = null;
    }

    // Getters e setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function setDisponivel($estado) {
        $this->disponivel = $estado;
    }

    // Método bônus do exercício 1
    public function exibirInformacoes() {
        echo "📚 Título: " . $this->titulo . "<br>";
        echo "✍️ Autor: " . $this->autor . "<br>";
        echo "📅 Ano de Publicação: " . $this->anoPublicacao . "<br>";
        echo "📦 Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
        echo "🙋 Leitor Atual: " . ($this->leitorAtual ?? "Nenhum") . "<br><br>";
    }

    // Exercício 2: métodos de empréstimo
    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "✅ Livro emprestado para $nomeLeitor.<br>";
        } else {
            echo "❌ Livro já está emprestado.<br>";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            echo "🔄 Livro devolvido por " . $this->leitorAtual . ".<br>";
            $this->leitorAtual = null;
        } else {
            echo "⚠️ Livro já estava disponível.<br>";
        }
    }

    public function estaDisponivel() {
        echo $this->disponivel ? "📗 Está disponível para empréstimo.<br>" : "📕 Está emprestado.<br>";
    }

    public function quemPegou() {
        return $this->leitorAtual ?? "Ninguém pegou ainda.";
    }
}

// 🧑 Classe Leitor
class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function exibirLeitor() {
        echo "👤 Leitor: $this->nome<br>";
        echo "📧 Email: $this->email<br>";
        echo "📱 Telefone: $this->telefone<br><br>";
    }
}


//exercicio 5
// 🏛️ Classe Biblioteca
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "<h3>📚 Lista de Livros:</h3>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "<h3>👥 Lista de Leitores:</h3>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}

// Criando biblioteca
$biblioteca = new Biblioteca("Biblioteca Central");

// Criando livros
$livro1 = new Livro("Quarto de Despejo", "Carolina Maria de Jesus", 1960);
$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943);
$livro3 = new Livro("A Hora da Estrela", "Clarice Lispector", 1977);

// Criando leitores
$leitor1 = new Leitor("Nayane", "nayane@email.com", "99999-0000");
$leitor2 = new Leitor("João", "joao@email.com", "88888-0000");

// Adicionando na biblioteca
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);
$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

// Empréstimo e devolução
$livro1->emprestar($leitor1->getNome()); // Nayane pega o livro
$livro1->estaDisponivel();
$livro1->devolver();
$livro1->estaDisponivel();

// Listar tudo
$biblioteca->listarLivros();
$biblioteca->listarLeitores();
