<?php 

namespace ex009\Exercicios;

// INTERFACE
interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
}

// CLASSE PESSOA
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniver() {
        $this->idade++;
    }

    // GETTERS
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}

// CLASSE LIVRO
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo "Livro: {$this->titulo}<br>";
        echo "Autor: {$this->autor}<br>";
        echo "Total de páginas: {$this->totPaginas}<br>";
        echo "Página atual: {$this->pagAtual}<br>";
        echo "Aberto: " . ($this->aberto ? "Sim" : "Não") . "<br>";
        echo "Leitor: {$this->leitor->getNome()}<br>";
    }

    // IMPLEMENTAÇÃO DA INTERFACE

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag() {
        if ($this->pagAtual < $this->totPaginas) {
            $this->pagAtual++;
        }
    }

    public function voltarPag() {
        if ($this->pagAtual > 0) {
            $this->pagAtual--;
        }
    }

    // GETTERS E SETTERS

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

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
}

?>