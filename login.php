<?php
session_start();
session_destroy();
include_once 'head.php';
?>
<body>
    <div class="container">
        <?php
        include_once 'menu.php';
        ?>
        <div class="container">
            <form id="form_login" class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">E-mail:</span>
                        <input type="date" class="form-control" name="login" id="login">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Senha:</span>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                </div>

                <div class="form-group" id="retorno">                   
                </div>
                <div class=" form-group " id="processando" style="display: none;" >
                    <img src="img/ajax-loader.gif" />
                </div>
                <div class=" form-group  text-right">
                    <button type="button" class="btn btn-success" id="btn_login">Enviar</button>
                </div>
            </form>
        </div>
        <?php include 'rodape.php';
        ?>       
    </div>
</body>
</html>

