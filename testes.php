<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/dao/UsuarioDAO.php";

$usuarioDao = UsuarioDAO::getInstance();

$usuarios = $usuarioDao->listarUsuarios(0);//echo strlen('tamanho dessa palavra');

foreach ($usuarios as $i => $usuario) {
    echo 'Este é o registro numero: '.($i+1).' = ';
    echo $usuario->getDescricao();
    echo '<br>';
}






/*
  //
  require_once $_SERVER['DOCUMENT_ROOT'].'/HappyDog/entidade/Usuario.php';

  $novoUsuario = new Usuario();

  $novoUsuario->setNome('Chris');
 */
?>

