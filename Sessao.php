<?php

class Sessao {

    function __construct() {
        
    }

    function start() {
        session_start();
    }

    function addNode($chave, $valor) {
        $_SESSION['node'][$chave] = $valor;
    }

    function getNode($chave) {
        if (isset($_SESSION['node'][$chave]))
            return $_SESSION['node'][$chave];
        return "";
    }
    function remNode($chave){
        if(isset($_SESSION['node'][$chave]))
            unset ($_SESSION['node'][$chave]);
    }
    function destroi(){
        unset($_SESSION['node']);
    }

}

?>
