<?php 
namespace ex006\Encapsulamento;

class ControleRemoto {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        if ($this->getLigado()) {
            echo "<br>Ligado: " . ($this->getLigado() ? "Sim" : "Não");
            echo "<br>Tocando: " . ($this->getTocando() ? "Sim" : "Não");
            echo "<br>Volume: " . $this->getVolume();

            echo "<br>";
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
        } else {
            echo "<br>Não é possível abrir o menu. Controle desligado!";
        }
    }

    public function fecharMenu() {
        echo "<br>Fechando menu...";
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<br>Não posso aumentar o volume";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<br>Não posso diminuir o volume";
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        } else {
            echo "<br>Não posso dar play";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        } else {
            echo "<br>Não posso pausar";
        }
    }

    private function setVolume($v) {
        $this->volume = $v;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function setLigado($l) {
        $this->ligado = $l;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setTocando($t) {
        $this->tocando = $t;
    }

    private function getTocando() {
        return $this->tocando;
    }
}
?>