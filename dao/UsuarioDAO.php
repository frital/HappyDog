<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/util/Conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/entidade/Teste.php";

class UsuarioDAO {
    
    private static $instancia = null;
   
    private function __construct() {
    }
    
    public static function getInstance() {
        if (self::$instancia == NULL) {
            self::$instancia = new UsuarioDAO();
        }
        return self::$instancia;
    }

    public function listarUsuarios($limite) {
        try {
            $sql = "SELECT * FROM teste limit :limite";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":limite", $limite);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação.";
        }
    }

    

}

?>
