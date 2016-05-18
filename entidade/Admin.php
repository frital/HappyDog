<?php


class Admin {
    private $idAdmin;
    private $email;
    private $senha;
    
    function __construct() {
        
    }

    public function getIdAdmin() {
        return $this->idAdmin;
    } 
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


    
}

?>
