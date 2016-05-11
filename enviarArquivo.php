<?php
include_once 'head.php';
?>
<body>
    <?php
    //  include_once 'menu.php';
    ?>
    <div class="container">
        <div class="col-md-6">
            <form id="formEnviarArquivo" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="texto">
                </div>
                <div class="form-group">
                    <input type="file" name="arquivo" id="arquivo" multiple="true">
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-success" id="enviar">Enviar</button>
                </div>
                <div id="retorno"></div>
            </form>
        </div>
    </div>
    <?php
include_once 'rodape.php';
?>
</body>
</html>