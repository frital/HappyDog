<?php
require_once './dao/AnimalDAO.php';
require_once './entidade/Animal.php';
$animalDao = AnimalDAO::getInstance();
$animais = $animalDao->listarAnimais();

include_once 'head.php';
?>
<body>
    <style>
        table, th, td {
    border: 1px solid black;
}
        </style>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($animais)) {
                    foreach ($animais as $value) {
                        ?>
                        <tr>
            <td><?php echo $value->getIdAnimal();?></td>
            <td><?php echo $value->getNome();?></td>
            <td><?php echo $value->getDescricao();?></td>
          
                    <?php }
                } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>

