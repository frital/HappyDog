<?php
include_once 'head.php';
?>
<body>
    <div class="container" A>
        <?php
        include_once 'menu.php';
        ?>
        <div class="container">
            <form class="col-md-6" id="form_contato">
                <div class="form-group">
                    <label>Nome completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" maxlength="255">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">E-mail:</span>
                        <input type="text" class="form-control" placeholder="exemplo: joao@iftm.edu.br" id="emailContato" name="emailContato" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" maxlength="20">
                </div>
                <div class="form-group">
                    <label>Sua mensagem:</label>
                    <textarea name="conteudo"  class="form-control" rows="3" id="msg" placeholder="Deixe aqui a sua mensagem."></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="contato();"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                </div>
                <div id="processando" class="form-group" style="display: none;">
                    <img src="img/ajax-loader.gif"/>
                </div>
                <div id="retorno" class="form-group alert alert-danger" style="display: none;">
                    
                </div>
            </form>
        </div>




        <?php include 'rodape.php';
        ?>         
    </div>
</body>
</html>

