<?php
class Livro {
    public $titulo; //$titulo e $autor são públicos: podem ser acessados diretamente de fora da classe.
    public $autor;
    private $preco; //$preco é privado: só pode ser acessado e alterado por métodos da própria classe (getPreco e setPreco).
    protected $estoque = 0; //$estoque é protegido: só pode ser acessado pela própria classe e por classes filhas.

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($valor) {
        $this->preco = $valor;
    }

    protected function adicionarEstoque($quantidade) { //O método adicionarEstoque é protegido: só pode ser chamado dentro da classe ou por classes filhas.
        $this->estoque += $quantidade;
    }

    public function getEstoque() { //O método getEstoque permite consultar o estoque de fora da classe.
        return $this->estoque;
    }
}

class LivroFisico extends Livro { //LivroFisico herda de Livro.
    public function aumentarEstoque($quantidade) {
        $this->adicionarEstoque($quantidade); //O método aumentarEstoque é público e usa o método protegido adicionarEstoque para aumentar o estoque.
    }
}

// Exemplo de uso:
$livro = new LivroFisico("Dom Casmurro", "Machado de Assis"); //Cria um objeto LivroFisico
$livro->setPreco(39.90); //Define o preço usando o método público.
$livro->aumentarEstoque(10); //Aumenta o estoque usando o método público da classe filha.

echo "Título: {$livro->titulo}\n";
echo "Autor: {$livro->autor}\n";
echo "Preço: R$ {$livro->getPreco()}\n";
echo "Estoque: {$livro->getEstoque()}\n"; //Exibe as informações do livro.

//O código demonstra encapsulamento e herança em PHP, controlando o acesso aos atributos e métodos conforme o nível de visibilidade (público, privado, protegido)