<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/util/Conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/entidade/Animal.php";

class AnimalDAO {
    
    private static $instancia = null;
   
    private function __construct() {
    }
    
    public static function getInstance() {
        if (self::$instancia == NULL) {
            self::$instancia = new AnimalDAO();
        }
        return self::$instancia;
    }

    public function listarAnimais() {
        try {
            $sql = "SELECT * FROM animal WHERE status > 0 ORDER BY nome";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            return $p_sql->fetchAll(PDO::FETCH_CLASS, 'Animal');
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }
    public function inserirAnimal(Animal $animal) {
        try {
            $sql = "INSERT INTO animal VALUES (null, :nome, :descricao,
                :sexo, :peso, :altura, :idRaca, :idCor, :dataChegada,
                :dataObito, :obs, :status)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(':nome', $animal->getNome());
            $p_sql->bindValue(':descricao', $animal->getDescricao());
            $p_sql->bindValue(':sexo', $animal->getSexo());
            $p_sql->bindValue(':peso', $animal->getPeso());
            $p_sql->bindValue(':altura', $animal->getAltura());
            $p_sql->bindValue(':idRaca', $animal->getIdRaca());
            $p_sql->bindValue(':idCor', $animal->getIdCor());
            $p_sql->bindValue(':dataChegada', $animal->getDataChegada());
            $p_sql->bindValue(':dataObito', $animal->getDataObito());
            $p_sql->bindValue(':obs', $animal->getObs());
            $p_sql->bindValue(':status', $animal->getStatus());
            if($p_sql->execute())
                return Conexao::$instance->lastInsertId();
            return false;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }
    public function editarAnimal(Animal $animal) {
        try {
            $sql = "UPDATE animal SET nome =  :nome, descricao = :descricao,
                sexo = :sexo, peso = :peso, altura = :altura, idRaca = :idRaca, 
                idCor = :idCor, dataChegada = :dataChegada,
                dataObito = :dataObito, obs = :obs, status = :status";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(':nome', $animal->getNome());
            $p_sql->bindValue(':descricao', $animal->getDescricao());
            $p_sql->bindValue(':sexo', $animal->getSexo());
            $p_sql->bindValue(':peso', $animal->getPeso());
            $p_sql->bindValue(':altura', $animal->getAltura());
            $p_sql->bindValue(':idRaca', $animal->getIdRaca());
            $p_sql->bindValue(':idCor', $animal->getIdCor());
            $p_sql->bindValue(':dataChegada', $animal->getDataChegada());
            $p_sql->bindValue(':dataObito', $animal->getDataObito());
            $p_sql->bindValue(':obs', $animal->getObs());
            $p_sql->bindValue(':status', $animal->getStatus());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }
    public function excluirAnimal(Animal $animal) {
        try {
            $sql = "UPDATE animal SET status = 0 WHERE idAnimal = :idAnimal";
            // $sql = "DELETE FROM animal WHERE idAnimal = :idAnimal";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(':idAnimal', $animal->getIdAnimal());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação. <br> $e";
        }
    }
}

?>
