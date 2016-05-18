<?php
require_once '../dao/UsuarioDAO.php';
session_start();
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
            $msgFinal = 'Nome: ' . $nome . '<br>';
            $msgFinal .= 'Email: ' . $email . '<br>';
            $msgFinal .= 'Telefone: ' . $telefone . '<br>';
            $msgFinal .= 'Mensagem: ' . $msg . '<br>';
            mail('chrismanuel@iftm.edu.br', 'Contato realizado no site', $msgFinal);
            // enviar o e-mail;
        }break;
    case 'cadastrar': {
        $usuario = $_SESSION['admin'];
        
        if($_SESSION)
            echo '<span class="alert alert-danger col-md-12">Estamos aqui</span>';
        }break;
    case 'login': {
        
            $login = entrada($_REQUEST['login']);
            $senha = entrada($_REQUEST['senha']);
            if(empty($login)){
                echo 'Favor informe o login;';
                break;
            }
            if(empty($senha)){
                echo 'Favor informe a senha;';
                break;
            }            
            $usuarioDao = UsuarioDAO::getInstance();
            $admin = $usuarioDao->login($login,$senha);
            if($admin){
                $_SESSION['admin']=$admin[0];
                echo '<script>window.location.href = "interno"</script>';
            }else{
                echo 'Erro de autenticação';
            }
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
