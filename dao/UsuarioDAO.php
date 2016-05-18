<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/util/Conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/entidade/Teste.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/entidade/Admin.php";

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

    public function login($login, $senha) {

        try {
            $sql = "SELECT idAdmin, email, senha FROM admin WHERE email = :login AND senha = :senha AND status = 1";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":login", $login);
            $p_sql->bindValue(":senha", $senha);
            $p_sql->execute();
            if ($p_sql->rowCount() == 1)
                return $p_sql->fetchAll(PDO::FETCH_CLASS, 'Admin');
            else
                return false;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }

    public function listarUsuarios($id) {

        try {
            $sql = "SELECT * FROM teste WHERE idTeste > :id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_CLASS, 'Teste');
            //return $p_sql->fetchAll(PDO::FETCH_CLASS, 'Teste');
            // return $p_sql->fetchObject('Teste');
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }

}

?>
