<?php
require_once $_SERVER['DOCUMENT_ROOT']."/HappyDog/entidade/Animal.php";
require_once $_SERVER['DOCUMENT_ROOT']."/HappyDog/dao/AnimalDAO.php";

switch ($_REQUEST['acao']) {
    case 'inserirAnimal': {
            $nome = entrada($_REQUEST['nome']);
            $descricao = entrada($_REQUEST['descricao']);
            $sexo = intval(entrada($_REQUEST['sexo']));
            $altura = floatval(entrada($_REQUEST['altura']));
            $idRaca = intval(entrada($_REQUEST['raca']));
            $idCor = intval(entrada($_REQUEST['cor']));
            $dataChegada = entrada($_REQUEST['dataChegada']);
            $dataObito = entrada($_REQUEST['dataObito']);
            $obs = entrada($_REQUEST['obs']);
            // passamos pela validação
            
            $animal = new Animal();
            $animal->setNome($nome);
            $animal->setDescricao($descricao);
            $animal->setSexo($sexo);
            $animal->setAltura($altura);
            $animal->setIdRaca($idRaca);
            $animal->setIdCor($idCor);
            $animal->setDataChegada($dataChegada);
            $animal->setDataObito($dataObito);
            $animal->setObs($obs);
            $animal->setStatus(1);
            echo 'Próxima aula continuamos daqui. =)';
            break;
            $animalDao = AnimalDAO::getInstance();
            $retorno = $animalDao->inserirAnimal($animal);
            if($retorno){
                // sucesso;
            }else{
                // erro;
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
