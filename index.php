<?php 
include_once 'head.php';
?>
    <body>
        <div class="container">
            <?php
            include_once 'menu.php';
            ?>
            <div class="container">
                <form class="col-md-6">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" name="nome" maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" maxlength="255">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" name="telefone" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label>Sua mensagem:</label>
                        <textarea name="conteudo"  class="form-control" rows="3" placeholder="Deixe aqui a sua mensagem."></textarea>
                    </div>
                  
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" onclick="alert('alo');">Enviar</button>
                    </div>


                </form>
                
                
                
            </div>
            <?php include 'rodape.php';
            ?>       
        </div>
    </body>
</html>

