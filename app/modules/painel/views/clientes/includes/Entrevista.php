<?php $perguntas = $this->cliente->getEntrevista($tableInfo['id_company'], $tableInfo['id_client']); ?>

<?php if(!$perguntas){
    $this->cliente->setEntrevistaCliente('', $tableInfo['id_client'], $tableInfo['id_company'], false);
} ?>



<div class="row">
    <div class="col-sm-12">
        <div class="card-header left" style="float:right;padding:10px;display:">
            <button type="button" onclick="modoEdit(this)" data-id="modoEdit" class="btn btn-box-tool left"><i class="fa fa-plus-circle"></i> Modo Edição</button>
            <button type="button" onclick="addPergunta()" class="btn btn-info float-right"><i class="fas fa-plus"></i> add</button>

        </div>
    </div>
    <div id="perguntas" style="display:">
        <?php foreach ($perguntas as $per) : ?>
            <div class="col-md-12 mb-3">
                <label style="font-weight: 700;" for="<?php echo $per['clip_pergunta']; ?>"><?php echo $per['clip_pergunta']; ?></label>
                <textarea style="margin-top: 0px; margin-bottom: 0px; height: 106px;" type="text" class="form-control" name="entrevista[<?php echo $per['id_entrevista']; ?>]" id="<?php echo $per['id_entrevista']; ?>" placeholder="Resposta: "><?php echo $per['resposta']; ?></textarea>
                <div class="invalid-feedback">
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-12" id="modoEditPage" style="display:none">
        <div class="card">
            <div class="card-header ui-sortable-handle">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Modo edição
                </h3>
                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <ul class="todo-list ui-sortable" id="listPergunta" data-widget="todo-list">
                </ul>
            </div>
            <div class="card-footer clearfix">
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title fc-center" align="center"></h2>

            </div>
            <form id="form_update_pergunta" method="POST" class="form-horizontal">
                <div class="modal-body form">

                    <input type="hidden" value="" name="id_entrevista" />

                    <div class="box box-default box-solid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Dados</h3>
                                </div>
                                <div class="box-body" style="">

                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <label for="">Pergunta</label>
                                            <input class="form-control" name="clip_pergunta" value="" placeholder="">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <a type="button" data-toggle="tooltip" title="" data-original-title="Duplicar" class="btn btn-warning pull-right" id="duplicar">Duplicar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<form id="form_update_pergunta" method="POST" class="form-horizontal">
    <div class="modal fade" id="modal_form" aria-modal="true" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <input type="hidden" class="form-control" name="id_cli_pe" id="id_cli_pe" value="">

                <div class="modal-body">
                    <div class="col-md-12">
                        <label for="">Pergunta</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="clip_pergunta" id="clip_pergunta" value="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div id="buttonSavePergunta" class="btn btn-primary">Salvar</div>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $(document).ready(function() {

        $("#buttonSavePergunta").on('click', function() {
            var clip_pergunta = $("#clip_pergunta").val();
            var id_cli_pe = $("#id_cli_pe").val();

            if ($('#clip_pergunta').val() != '') {

                $.ajax({
                    url: BASE_URL_PAINEL + 'ajax/actionPergunta/',
                    data: {
                        id_cli_pe: id_cli_pe,
                        clip_pergunta: clip_pergunta,
                        id_client: '<?php echo $tableInfo['id_client']; ?>',
                    },
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        data ? toastr.success('salvo com successo') : toastr.error('Erro contate o administrador');
                        $('#modal_form').modal('hide');

                        getPerguntas();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Erro contate o administrador CODADDETAPACONX1');
                    },
                });
            } else {
                $("#clip_pergunta").addClass('is-invalid');
                toastr.error('campo não pode ser vazio')
            }
        })
        $(function() {
            $(".ui-sortable").sortable({
                update: function() {
                    var ordem_atual = $(this).sortable("toArray");
                    $.post(BASE_URL + "ajax/attOrdemEtapaSerCon", {
                        itens: ordem_atual
                    }, function(retorno) {
                        retorno ? toastr.success('ordenado com sucesso!') : toastr.error('deu erro, me chama');

                    });
                }
            });
        });
    });


    function modoEdit(v) {
        var tipo = $(v).attr('data-id');

        if (tipo == 'modoEdit') {
            $(v).attr('data-id', 'exitModoEdit');
            $(v).html('<i class="fa fa-plus-circle"></i> Sair modo edição');
            $('#perguntas').hide();
            $('#modoEditPage').show();
            toastr.success('modo edição ativado, clique em salvar para salvar as informações')
            getPerguntas();
        } else {
            $(v).attr('data-id', 'modoEdit');
            $(v).html('<i class="fa fa-plus-circle"></i> Modo Edição');

            $('#perguntas').show();
            $('#modoEditPage').hide();
        }
    }

    function getPerguntas() {

        $.getJSON(BASE_URL_PAINEL + 'ajax/getPerguntas?true?search=', {
            id_client: '<?php echo $tableInfo['id_client']; ?>',
            id_company: '<?php echo $tableInfo['id_company']; ?>',
            ajax: 'true'
        }, function(j) {
            var options = '';

            if (j.length != 0) {
                for (var i = 0; i < j.length; i++) {

                    options += '<li>'
                    options += '    <span class="handle ui-sortable-handle">'
                    options += '        <i class="fas fa-ellipsis-v"></i>'
                    options += '        <i class="fas fa-ellipsis-v"></i>'
                    options += '    </span>'

                    options += '    <span class="text">' + j[i].clip_pergunta + '</span>'
                    options += '    <div class="tools">'
                    options += '        <i onclick="editPergunta(' + j[i].id_cli_pe + ')" class="fas fa-edit"></i>'
                    options += '        <i onclick="deletePergunta(' + j[i].id_entrevista + ')"class="fas fa-trash"></i>'

                    options += '    </div>'
                    options += '</li>'

                }
            }
            $('#listPergunta').html(options).show();
        });
    };

    function addPergunta() {
        save_method = 'save';
        $('#form_update_pergunta')[0].reset();
        $('.modal-title').text('Adicionar Pergunta');
        $('[name="id_cli_pe"]').val('');
        $('[name="clip_pergunta"]').val('');

        $('#modal_form').modal('show')
    }

    function deletePergunta(id) {
        save_method = 'delete';

        $.ajax({
            url: BASE_URL_PAINEL + 'ajax/deletePerguntaByEntrevista/',
            data: {
                id_entrevista: id
            },
            type: "POST",
            dataType: "JSON",
            success: function(data) {

                data ? toastr.success('deletado') : toastr.error('Erro contate o administrador');
                getPerguntas();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            },
        });
    }

    function editPergunta(id) {
        save_method = 'update';
        $('#form_update_pergunta')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();

        //Ajax Load data from ajax
        $.ajax({
            url: BASE_URL_PAINEL + 'ajax/getPerguntaById/' + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_cli_pe"]').val(id);
                $('[name="clip_pergunta"]').val(data.clip_pergunta);

                $('.modal-title').text('Editar Pergunta "' + data.clip_pergunta + '"');
                $('#modal_form').modal('show');


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            },
        });
    }
</script>