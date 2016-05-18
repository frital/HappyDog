<?php
require_once './entidade/Admin.php';
session_start();
if (!isset($_SESSION['admin']))
    header("location: login");
$admin = $_SESSION['admin'];

print_r($admin);

include_once 'head.php';
?>
<body>
    <div class="container">
        <?php
        include_once 'menu.php';
        ?>
        <div class="container">
            <?php
            echo 'Seu id: '.$admin->getIdAdmin();
            ?>
            <br>
            Logado !!!
        </div>
        <?php include 'rodape.php';
        ?>       
    </div>
</body>
</html>

