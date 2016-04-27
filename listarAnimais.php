<?php
require_once $_SERVER['DOCUMENT_ROOT']."/HappyDog/entidade/Animal.php";
require_once $_SERVER['DOCUMENT_ROOT']."/HappyDog/dao/AnimalDAO.php";

$animalDao = AnimalDAO::getInstance();
$animais = $animalDao->listarAnimais();
print_r($animais);

?>
