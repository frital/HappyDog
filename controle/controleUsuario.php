<?php

switch ($_REQUEST['acao']) {
    case 'contato': {
            $nome = entrada($_REQUEST['nome']);
            $email = strtolower(entrada($_REQUEST['emailContato']));
            $telefone = entrada($_REQUEST['telefone']);
            $msg = entrada($_REQUEST['msg']);

            if (empty($nome) || strlen($nome) < 5) {
                echo 'O nome é obrigatório.';
                break;
            } elseif (empty($email)) {
                echo 'E-mail é obrigatório.';
                break;
            } elseif (empty($telefone)) {
                echo 'Telefone obrigatório.';
                break;
            } elseif (empty($msg)) {
                echo 'Mensagem obrigatória.';
                break;
            }
            $msgFinal = 'Nome: '.$nome.'<br>';
            $msgFinal .= 'Email: '.$email.'<br>';
            $msgFinal .= 'Telefone: '.$telefone.'<br>';
            $msgFinal .= 'Mensagem: '.$msg.'<br>';
            mail('chrismanuel@iftm.edu.br', 'Contato realizado no site', $msgFinal);
            // enviar o e-mail;
        }break;
    default: {
        }break;
}

function entrada($valor) {
    $valor = trim($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}

?>
