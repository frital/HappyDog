<?php
require_once './gerenciaSessao.php';

$cliente = array('nome'=>'Chris Manuel', 'email' => 'chrismanuel@iftm.edu.br');

$ses->addNode('cliente', $cliente);


?>