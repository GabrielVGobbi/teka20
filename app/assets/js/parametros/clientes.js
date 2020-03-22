

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
   
}



function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('estado').value = (conteudo.uf);


    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        toastr.error('cep não encontrado');
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "consultando";



            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

            $("#cepform").removeClass("is-invalid");

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            $("#cepform").addClass("is-invalid");
            toastr.error('tem um numero a mais no cep');
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
        $("#cepform").addClass("is-invalid");
    }
};

$(function () {
   
    $("#submit").click(function () {
        var nome = $('#cli_nome').val();
        var email = $('#cli_email').val();
        var cep = $('#cep').val();


        nome.length != ''
            ? $("#cli_nome").removeClass("is-invalid") 
            : $("#cli_nome").addClass("is-invalid") + toastr.error('Nome é Obrigatorio')
        
        email.length != ''
            ? $("#cli_email").removeClass("is-invalid") 
            : $("#cli_email").addClass("is-invalid") + toastr.error('Email é Obrigatorio')

        cep.length != ''
            ? $("#cep").removeClass("is-invalid") 
            : $("#cep").addClass("is-invalid") + toastr.error('Cep é Obrigatorio')

        $(document).ready(submit);
        
    });


    function submit() {
        if (!$(".form-control").hasClass("has-warning") && !$(".form-control").hasClass("is-invalid"))
            $("#client_form").submit();
    }

    $("#copyEmail").on('click', function (e) {
      
        var text = document.querySelector("#dep_email");
        text.select();

        try {
            var text = document.execCommand('copy');
            if (text) { toastr.success('email copiado'); }
        } catch (e) {
            toastr.success(e);
        }

    });

    $('.popver_urgencia').webuiPopover({
        content: 'Enviar aviso para o email do cliente<br>que ele foi cadastrado em seu sistema',
        trigger: 'hover',
        placement: 'bottom'
    });


});


