<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/dao/UsuarioDAO.php";

$usuarioDao = UsuarioDAO::getInstance();

$usuarios = $usuarioDao->listarUsuarios(2);
print_r($usuarios);
?>

