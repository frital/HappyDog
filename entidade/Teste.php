<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teste
 *
 * @author Lemao
 */
class Teste {
    
    public $idTeste;
    public $descricao1;
    public $inteiro;
    
    public function __construct() {
        
    }

    
    public function getIdTeste() {
        return $this->idTeste;
    }

    public function setIdTeste($idTeste) {
        $this->idTeste = $idTeste;
    }

    public function getDescricao1() {
        return $this->descricao1;
    }

    public function setDescricao1($descricao1) {
        $this->descricao1 = $descricao1;
    }

    public function getInteiro() {
        return $this->inteiro;
    }

    public function setInteiro($inteiro) {
        $this->inteiro = $inteiro;
    }


}

?>
