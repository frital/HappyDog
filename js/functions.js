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

$(document).ready(function() {
    $("#cadastrarAnimal").on('click touchstart', function() {
        var form = document.getElementById('formCadastroAnimal');
        var sexo = form.sexo;
        var sexoFinal = null;
        /*  for(var i=0; i<sexo.length; i++){
         if(sexo[i].checked == true){
         sexoFinal = sexo[i].value;
         }
         }*/
        if (sexo[0].checked == true) {
            sexoFinal = 1;
        } else {
            sexoFinal = 2;
        }
        
        $.ajax({
            type: 'POST',
            url: './controle/controleAnimal.php',
            data: {acao: 'inserirAnimal',
                nome: form.nome.value,
                descricao: form.descricao.value,
                sexo: sexoFinal,
                peso: form.peso.value,
                altura: form.altura.value,
                raca: form.raca.value,
                cor: form.cor.value,
                dataChegada: form.dataChegada.value,
                dataObito: form.dataObito.value,
                obs: form.obs.value
            },
            success: function(data) {
                $('#retornoCadAnimal').html(data);
            },
            complete: function() {
                $('#retornoCadAnimal').css({display: "block"});
                $('#procCadAnimal').css({display: "none"});
            },
            beforeSend: function() {
                $('#procCadAnimal').css({display: "block"});
            },
            error: function() {
                $('#retornoCadAnimal').html('Erro em carregar o Ajax');
            }
        });

    });
});

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





/* if (form.nome.value.length < 5) {
 alert('Nome obrigatório.');
 form.nome.focus();
 return false;
 } else if (form.emailContato.value.length < 10) {
 alert('Email obrigatório.');
 form.emailContato.focus();
 return false;
 }*/