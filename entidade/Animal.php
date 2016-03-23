<?php
class Animal {
    private $idAnimal;
    private $nome;
    private $descricao;
    private $sexo;
    private $peso;
    private $altura;
    private $idRaca;
    private $idCor;
    private $dataChegada;
    private $dataObito;
    private $obs;
    private $status;
    
    public function __construct() {
    }
    
    public function getIdAnimal() {
        return $this->idAnimal;
    }

    public function setIdAnimal($idAnimal) {
        $this->idAnimal = $idAnimal;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getIdRaca() {
        return $this->idRaca;
    }

    public function setIdRaca($idRaca) {
        $this->idRaca = $idRaca;
    }

    public function getIdCor() {
        return $this->idCor;
    }

    public function setIdCor($idCor) {
        $this->idCor = $idCor;
    }

    public function getDataChegada() {
        return $this->dataChegada;
    }

    public function setDataChegada($dataChegada) {
        $this->dataChegada = $dataChegada;
    }

    public function getDataObito() {
        return $this->dataObito;
    }

    public function setDataObito($dataObito) {
        $this->dataObito = $dataObito;
    }

    public function getObs() {
        return $this->obs;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}

?>
