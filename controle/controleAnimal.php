<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/entidade/Animal.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/HappyDog/dao/AnimalDAO.php";

switch ($_REQUEST['acao']) {
    case 'inserirAnimal': {
            $nome = entrada($_REQUEST['nome']);
            $descricao = entrada($_REQUEST['descricao']);
            $sexo = intval(entrada($_REQUEST['sexo']));
            $peso = intval(entrada($_REQUEST['peso']));
            $altura = floatval(entrada($_REQUEST['altura']));
            $idRaca = intval(entrada($_REQUEST['raca']));
            $idCor = intval(entrada($_REQUEST['cor']));
            $dataChegada = entrada($_REQUEST['dataChegada']);
            $dataObito = entrada($_REQUEST['dataObito']);
            $obs = entrada($_REQUEST['obs']);

            if (strlen($nome) < 10) {
                echo 'Nome muito pequeno.';
                break;
            }
// passamos pela validação

            $animal = new Animal();
            $animal->setNome(mb_strtoupper($nome, 'utf-8'));
            $animal->setDescricao($descricao);
            $animal->setSexo($sexo);
            $animal->setPeso($peso);
            $animal->setAltura($altura);
            $animal->setIdRaca($idRaca);
            $animal->setIdCor($idCor);
            $animal->setDataChegada($dataChegada);
            $animal->setDataObito($dataObito);
            $animal->setObs($obs);
            $animal->setStatus(1);

            $animalDao = AnimalDAO::getInstance();
            $retorno = $animalDao->inserirAnimal($animal);
            if ($retorno) {
                echo '<script>window.location = "cadastroAnimal?msg=Inserido com sucesso."</script>';
            } else {
                echo 'Erro na inserção no banco de dados';
            }
        }break;
    case 'upload': {

            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], 'upload/' . $_FILES["arquivos"]['name']))
                echo 'upload feito';
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
