<?php


class Teste {
   
    private $idTeste;
    private $descricao;
    private $valor;
    
    function __construct() {
        
    }

    public function getIdTeste() {
        return $this->idTeste;
    }

    public function setIdTeste($idTeste) {
        $this->idTeste = $idTeste;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


}

?>
