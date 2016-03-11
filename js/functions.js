function troca(x){
    if(x.value == 'fisica'){
        document.getElementById('divFisica').style.display = 'block';
        document.getElementById('divJuridica').style.display = 'none';
    }else{
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
        beforeSend: function (){
            $('#processando').css({display: "block"});
        },
        error: function (){
            $('#retorno').html('Erro em carregar o Ajax');
        }        
    });
    
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





/* if (form.nome.value.length < 5) {
        alert('Nome obrigatório.');
        form.nome.focus();
        return false;
    } else if (form.emailContato.value.length < 10) {
        alert('Email obrigatório.');
        form.emailContato.focus();
        return false;
    }*/