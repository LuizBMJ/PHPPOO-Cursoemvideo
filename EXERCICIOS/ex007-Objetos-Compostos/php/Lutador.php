<?php 

namespace ex007\ObjsCompostos;

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function apresentar() {
        echo "Lutador: {$this->nome}\n";
        echo "Nacionalidade: {$this->nacionalidade}\n";
        echo "Idade: {$this->idade} anos\n";
        echo "Altura: {$this->altura} m\n";
        echo "Peso: {$this->peso} kg\n";
        echo "Categoria: {$this->categoria}\n";
        echo "Vitórias: {$this->vitorias}\n";
        echo "Derrotas: {$this->derrotas}\n";
        echo "Empates: {$this->empates}\n";
    }

    public function status() {
        echo "{$this->nome} é um lutador da categoria {$this->categoria}\n";
        echo "Cartel: {$this->vitorias}V - {$this->derrotas}D - {$this->empates}E\n";
    }

    public function ganharLuta() {
        $this->vitorias++;
    }

    public function perderLuta() {
        $this->derrotas++;
    }

    public function empatarLuta() {
        $this->empates++;
    }

    public function setNome($no) {
        $this->nome = $no;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setCategoria() {

        if($this->peso < 52.2) {
            $this->categoria = "Invalido";
        }

        elseif($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }

        elseif($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }

        else {
            $this->categoria = "Pesado";
        }
    }

    public function getCategoria() {
        return $this->categoria;
    }
}
?>