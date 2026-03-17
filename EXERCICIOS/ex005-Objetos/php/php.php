<?php 

namespace ex005\Objetos;

class ContaBanco {
    public $numConta;
    private $tipo;
    protected $dono;
    protected $saldo;
    protected $status;

    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }

    public function abrirConta($tipo) {
        $this->tipo = $tipo;
        $this->status = true;

        if ($tipo == "CC") {
            $this->saldo = 50;
        } elseif ($tipo == "CP") {
            $this->saldo = 150;
        }
    }

    public function fecharConta() {
        if ($this->saldo > 0) {
            echo "Conta com dinheiro. Não pode fechar.";
        } elseif ($this->saldo < 0) {
            echo "Conta em débito. Não pode fechar.";
        } else {
            $this->status = false;
        }
    }

    public function depositar($valor) {
        if ($this->status) {
            $this->saldo += $valor;
        } else {
            echo "Conta fechada.";
        }
    }

    public function sacar($valor) {
        if ($this->status && $this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente ou conta fechada.";
        }
    }

    public function pagarMensal() {
        $valor = 0;

        if ($this->tipo == "CC") {
            $valor = 12;
        } elseif ($this->tipo == "CP") {
            $valor = 20;
        }

        if ($this->status) {
            $this->saldo -= $valor;
        }
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($num) {
        $this->numConta = $num;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
}

?>