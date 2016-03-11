<?php
include_once 'head.php';
?>
<body>
    <div class="container">
        <?php
        include_once 'menu.php';

        /*
          private $idUsuario;
          private $nome; // razao social
          private $nomeFantasia;
          private $cpf; // cnpj;
          private $email;
          private $tel1;
          private $tel2;
          private $endereco; // rua // num // bairro
          private $cidade;
          private $uf;
          private $cep;
          private $referencia;
          private $site;
          private $contato;
          private $dataCadastro;
          private $ipCadastro;
          private $status;

         */
        ?>
        <div class="container">
            <form class="col-md-6" id="form_contato">
                <div class="form-group">
                    <input type="radio" name="tipoUsuario" value="fisica" checked="true" onchange="troca(this);"> Pessoa Físcia
                    <input type="radio" name="tipoUsuario" value="juridica" onchange="troca(this);"> Pessoa Jurídica
                </div>
                <div id="divFisica">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nome completo:</div>
                            <input type="text" class="form-control" name="nome" id="nome" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">CPF:</div>
                            <input type="number" class="form-control" name="cpf" id="cpf" />
                        </div>
                    </div>
                </div>
                <div id="divJuridica" style="display: none;">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Razão Social:</div>
                            <input type="text" class="form-control" name="razao" id="razao" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nome Fantasia:</div>
                            <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasia" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">CNPJ:</div>
                            <input type="number" class="form-control" name="cnpj" id="cnpj" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">CNPJ:</div>
                            <input type="email" class="form-control" name="emailC" id="emailC" />
                        </div>
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

