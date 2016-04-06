<?php
include_once 'head.php';
?>
<body>
    <?php
    //  include_once 'menu.php';
    ?>
    <div class="container">
        <div class="col-md-3"></div>
        <form class="form-group col-md-6" id="formCadastroAnimal">
            <div class="form-group">
                <div class="alert alert-success">
                    <?php if(isset($_REQUEST['msg']))
                            echo $_REQUEST['msg'];
                            ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Nome:</span>
                    <input type="text" class="form-control" id="nome" name="nome" maxlength="255">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Descrição:</span>
                    <input type="text" class="form-control" id="descricao" name="descricao" maxlength="255">
                </div>
            </div>
            <div class="form-group">
                <input type="radio" name="sexo" value="1" checked="true"> Masculino &nbsp;&nbsp;
                <input type="radio" name="sexo" value="2" > Feminino
            </div>
            
            <div class="form-group col-md-2" >
                    <div class="input-group">
                        <span class="input-group-addon">Peso</span>
                        <input type="number" id="peso" class="form-control" name="peso" maxlength="3">
                    </div>
                </div>
                <div class="form-group col-md-2" >
                    <div class="input-group">
                        <span class="input-group-addon">Altura</span>
                        <input type="number"  id="altura" class="form-control" name="altura" maxlength="3">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <select id="raca" class="form-control">
                        <option value="0">Raça ...</option>
                        <option value="1">Pintcher</option>
                        <option value="2">Pastor Alemão</option>
                        <option value="3">Pastor Suíço</option>
                    </select>
                </div>
            <div class="form-group col-md-4" >
                    <select id="cor" class="form-control">
                        <option value="0">Cor ...</option>
                        <option value="1">Amarelo</option>
                        <option value="2">Preto</option>
                        <option value="3">Azul</option>
                    </select>
                </div>
            
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de chegada: </span>
                    <input type="date" class="form-control" id="dataChegada" name="dataChegada">
                </div>
            </div> 
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de óbito: </span>
                    <input type="date" class="form-control" id="dataObito" name="dataObito">
                </div>
            </div> 
            <div class="form-group">                    
                <textarea class="form-control" id="obs" name="obs" placeholder="Observações"></textarea>
            </div>
            <div class="processando" id="procCadAnimal">
                <img src="img/ajax-loader.gif">
            </div>
            <div class="form-group" id="retornoCadAnimal">
            </div>
            <button type="button" id="cadastrarAnimal" class="btn btn-success">Cadastrar</button>
        </form>
        <div class="col-md-3"></div>
    </div>
    <?php include 'rodape.php';
    ?>       
</body>
</html>

