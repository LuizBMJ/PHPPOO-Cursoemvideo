<?php 

namespace ex011\Herança;

abstract class Pessoa {
    private $name;
    private $idade;
    private $sexo;

    public function __construct($name, $idade, $sexo) {
        $this->name = $name;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Método final (não pode ser sobrescrito)
    final public function fazerAniv() {
        $this->idade++;
        echo "Feliz aniversário! Agora tem {$this->idade} anos.<br>";
    }

    // Getters e Setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}

class Visitante extends Pessoa {
    // Herdando tudo de Pessoa
}

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function __construct($name, $idade, $sexo, $matricula, $curso) {
        parent::__construct($name, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade() {
        echo "Mensalidade paga pelo aluno {$this->getName()}.<br>";
    }

    // Getters e Setters
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($name, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($name, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "Bolsa renovada para o aluno {$this->getName()}.<br>";
    }

    // Sobrescrevendo método da classe Aluno
    public function pagarMensalidade() {
        echo "Aluno bolsista {$this->getName()} tem desconto na mensalidade.<br>";
    }

    // Getter e Setter
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}

?>