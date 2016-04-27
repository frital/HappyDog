<?php
include_once 'head.php';
?>
<body>
    <div class="container">
        <?php
        include_once 'menu.php';
        ?>
        <div class="container">
            <form id="formCadastrar" class="col-md-6">
                 <div class="form-group" id="retorno2">                   
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Campo 1:</span>
                        <input class="form-control" name="campo1" id="campo1">
                    </div>
                </div>
                <div class=" form-group ">
                    <div class="input-group">
                        <span class="input-group-addon">Campo 2:</span>
                        <input class="form-control" name="campo2" id="campo2">
                    </div>
                </div>
                <div class="form-group" id="retorno">                   
                </div>
                <div class=" form-group " id="processando" style="display: none;" >
                    <img src="img/ajax-loader.gif" />
                </div>
                <div class=" form-group  text-right">
                    <button type="button" class="btn btn-success" id="cadastrar">Enviar</button>
                </div>
            </form>
        </div>
        <?php include 'rodape.php';
        ?>       
    </div>
</body>
</html>

