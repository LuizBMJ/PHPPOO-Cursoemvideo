<?php 
namespace Ex014\ExFinal;

interface AcoesVideo {
    public function play();
    public function pause();
    public function like();
}

class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }
    
    public function pause() {
        $this->reproduzindo = false;
    }

    public function like() {
        $this->curtidas++;
    }

    // Getters e Setters
    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao){
        $this->avaliacao = $avaliacao;
    }

    public function getViews(){
        return $this->views;
    }

    public function setViews($views){
        $this->views = $views;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }
}

abstract class Pessoa {
    protected $nome; 
    protected $idade; 
    protected $sexo; 
    protected $experiencia; 

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    protected function ganharExp() {
        $this->experiencia++;
    }

    // Getters e Setters
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }

    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }
}

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistindo;

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    public function viuMaisUm() {
        $this->totAssistindo++;
    }

    // Getters e Setters
    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getTotAssistindo(){
        return $this->totAssistindo;
    }

    public function setTotAssistindo($totAssistindo){
        $this->totAssistindo = $totAssistindo;
    }
}

?>