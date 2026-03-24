<?php 

namespace ex010\Herança;

class Pessoas {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniver() {
        $this->idade += 1;
    }

    // GETTERS E SETTERS
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
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

class Aluno extends Pessoas {
    private $matr;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matr, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matr = $matr;
        $this->curso = $curso;
    }

    public function cancelarMatr() {
        echo "Matrícula cancelada.";
    }

    public function getMatr() {
        return $this->matr;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

class Professor extends Pessoas {
    private $especialidade; 
    private $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAum($aumento) {
        $this->salario += $aumento;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}

class Funcionario extends Pessoas {
    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo, $setor, $trabalhando = true) {
        parent::__construct($nome, $idade, $sexo);
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
}

?>