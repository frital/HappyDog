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
                
                <div class="form-group">
                    <table class="table table-bordered table-hover table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Chris</td>
                                <td>0123565888</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Manuel</td>
                                <td>69585458</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fritsche</td>
                                <td>887854554</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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

