<?php 
namespace ex013\Polimorfismo;

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    public function __construct($peso = 0, $idade = 0, $membros = 0) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }

    // Getters e Setters
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
}


class Mamifero extends Animal {
    protected $corPelo;

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

    public function locomover() {
        echo "Correndo<br>";
    }

    public function alimentar() {
        echo "Mamando<br>";
    }

    public function emitirSom() {
        echo "Som de Mamífero<br>";
    }
}


class Reptil extends Animal {
    protected $corEscama;

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function locomover() {
        echo "Rastejando<br>";
    }

    public function alimentar() {
        echo "Comendo Vegetais<br>";
    }

    public function emitirSom() {
        echo "Som de Réptil<br>";
    }
}


class Peixe extends Animal {
    protected $corEscama;

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function locomover() {
        echo "Nadando<br>";
    }

    public function alimentar() {
        echo "Comendo substâncias<br>";
    }

    public function emitirSom() {
        echo "Peixe não faz som<br>";
    }

    public function soltarBolha() {
        echo "Soltou uma bolha<br>";
    }
}


class Ave extends Animal {
    protected $corPena;

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function locomover() {
        echo "Voando<br>";
    }

    public function alimentar() {
        echo "Comendo frutas<br>";
    }

    public function emitirSom() {
        echo "Som de Ave<br>";
    }

    public function fazerNinho() {
        echo "Construiu um ninho<br>";
    }
}


class Canguru extends Mamifero {

    public function usarBolsa() {
        echo "Usando bolsa<br>";
    }

    public function locomover() {
        echo "Saltando<br>";
    }
}


class Lobo extends Mamifero {

    public function enterrarOsso() {
        echo "Enterrando osso<br>";
    }

    public function abanarRabo() {
        echo "Abanando o rabo<br>";
    }

    public function emitirSom() {
        echo "Auuuuuuuuuuuuu<br>";
    }
}

class Cachorro extends Lobo {

    public function emitirSom() {
        echo "Au! Au! Au!<br>";
    }

    public function reagir($a, $b = null) {

        // Reagir a frase
        if (is_string($a)) {

            if ($a == "toma comida" || $a == "olá") {
                echo "Abanar e Latir<br>";
            } else {
                echo "Rosnar<br>";
            }

        }

        // Reagir a hora
        elseif (is_int($a) && is_int($b)) {

            if ($a < 12) {
                echo "Abanar<br>";
            } elseif ($a >= 18) {
                echo "Ignorar<br>";
            } else {
                echo "Abanar e Latir<br>";
            }

        }

        // Reagir a dono
        elseif (is_bool($a)) {

            if ($a) {
                echo "Abanar<br>";
            } else {
                echo "Rosnar e Latir<br>";
            }

        }

        // Reagir a idade e peso
        elseif (is_int($a) && is_float($b)) {

            if ($a < 5) {
                if ($b < 10) {
                    echo "Abanar<br>";
                } else {
                    echo "Latir<br>";
                }
            } else {
                if ($b < 10) {
                    echo "Rosnar<br>";
                } else {
                    echo "Ignorar<br>";
                }
            }

        }
    }
}


class Cobra extends Reptil {

    public function emitirSom() {
        echo "Ssssss<br>";
    }
}


class Tartaruga extends Reptil {

    public function locomover() {
        echo "Andando bem devagar<br>";
    }
}


class GoldFish extends Peixe {

    public function emitirSom() {
        echo "GoldFish não faz som<br>";
    }
}


class Arara extends Ave {

    public function emitirSom() {
        echo "Gritando<br>";
    }
}

?>