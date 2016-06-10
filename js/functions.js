
function troca(x) {
    if (x.value == 'fisica') {
        document.getElementById('divFisica').style.display = 'block';
        document.getElementById('divJuridica').style.display = 'none';
    } else {
        document.getElementById('divJuridica').style.display = 'block';
        document.getElementById('divFisica').style.display = 'none';
    }
}

function contato() {

    var form = document.getElementById('form_contato');
    $('#retorno').html('');
    $('#retorno').css({display: "none"});
    $.ajax({
        type: 'POST',
        url: './controle/controleUsuario.php',
        data: {acao: 'contato', nome: form.nome.value, emailContato: form.emailContato.value,
            telefone: form.telefone.value, msg: form.msg.value},
        success: function(data) {
            $('#retorno').html(data);
        },
        complete: function() {
            $('#retorno').css({display: "block"});
            $('#processando').css({display: "none"});
        },
        beforeSend: function() {
            $('#processando').css({display: "block"});
        },
        error: function() {
            $('#retorno').html('Erro em carregar o Ajax');
        }
    });

}

function cadastro(){
    var form = document.getElementById('formCadastroAnimal');
    var tam = form.elements.length;
    for(var i=7; i<tam; i++){
        alert(form.elements[i].type);
    }
    
}

function ajax() {
    var nome = document.getElementById("nome").value;
    $.ajax({
        type: 'POST',
        url: './controle/controleUsuario.php',
        data: {entrada: nome},
        success: function(data) {
            $('#demo').html(data);
        }
    });
}

$(document).ready(function() {
    $('#cadastrar').on('click touchstart', function() {
        var form = document.getElementById('formCadastrar');
        if (form.campo1.value.length < 5) {
            form.campo1.focus();
            return false;
        } else if (form.campo2.value.length < 5) {
            form.campo2.focus();
            return false;
        }
        $.ajax({
            type: 'POST',
            url: 'controle/controleUsuario.php',
            data: {acao: 'cadastrar',
                campo1: form.campo1.value,
                campo2: form.campo2.value
            },
            success: function(data) {
                $('#retorno').html(data);
                $('#retorno2').html(data);
            },
            beforeSend: function() {
                $('#processando').css({display: 'inline'});
            },
            complete: function() {
                $('#processando').css({display: 'none'});
            },
            error: function(evento, request, settings) {
                alert(settings);
            }

        });
    })

});

$(document).ready(function() {
    $('#btn_login').on('click touchstart', function() {
        var form = document.getElementById('form_login');

        $.ajax({
            type: 'POST',
            url: 'controle/controleUsuario.php',
            data: {acao: 'login',
                login: form.login.value,
                senha: form.senha.value
            },
            success: function(data) {
                $('#retorno').html(data);
            },
            beforeSend: function() {
                $('#processando').css({display: 'inline'});
            },
            complete: function() {
                $('#processando').css({display: 'none'});
            },
            error: function(evento, request, settings) {
                alert(settings);
            }

        });
    })

});

$(function() {
    $('#formEnviarArquivo').submit(function(e) {
        e.preventDefault();
        var formData = new FormData();
        var f = document.getElementById('formEnviarArquivo');

        formData.append('acao', 'upload');
        formData.append('texto', f.texto.value);
        formData.append('arquivo1', $('#arquivo').prop('files')[0]);
        formData.append('arquivo2', $('#arquivo').prop('files')[1]);


        $.ajax({
            url: 'controle/controleAnimal.php',
            data: formData,
            type: 'post',
            success: function(data) {
                $('#retorno').html(data);
            },
            beforeSend: function() {
                $('#procP').css({display: "block"});
            },
            complete: function() {
                $('#procP').css({display: "none"});
            },
            processData: false,
            cache: false,
            contentType: false
        });
    });
});