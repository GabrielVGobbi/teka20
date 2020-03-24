<div class="row">
  <div class="col-3 col-sm-2">
    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#permissoes" role="tab" aria-controls="vert-tabs-home" aria-selected="true"><i style="margin-right: 5px;" class="ml-8 fas fa-user-lock"> </i>Permissões</a>
      <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#pagamento" role="tab" aria-controls="vert-tabs-profile" aria-selected="false"><i style="margin-right: 5px;" class="ml-8 fas fa-credit-card"></i> Pagamento</a>
    </div>
  </div>
  <div class="col-7 col-sm-10">
    <div class="tab-content" id="vert-tabs-tabContent">

      <div class="tab-pane text-left fade active show" id="permissoes" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

        <div class="card">
          <div class="card-header ui-sortable-handle">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
              Permissões
            </h3>
          </div>
          <div class="card-body">
            <ul class="todo-list ui-sortable" data-widget="todo-list">
              <?php foreach ($permissons_all as $pma) : ?>
                <li>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" name="permissions[]" <?php echo ($this->user->hasPermissionByidSearch($pma['name'], '', $tableInfo['id_company'], $tableInfo['id_client']) ? "checked" : ""); ?> class="check" value="<?php echo $pma['id']; ?>">
                    <label for="todoCheck1"></label>
                  </div>
                  <span class="text"><?php echo $pma['name']; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pagamento" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
        <div class="col-12" id="pagamentoTable" style="display:">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pagamento</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                  <div class="row">
                    <div class="col-12 col-sm-12">
                      <div class="info-box no-border" style="min-height: 64px;">
                        <div class="info-box-content">
                          <span class="info-box-text  text-muted"> Total Recebido</span>
                          <span class="info-box-number  text-muted mb-0 " id="totalRecebido"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <h4>Atividades Recentes</h4>
                      <div id="listVenda">

                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>-->
                  <a class="btn btn-app" id="addPagamentoButton">
                    <i class="fas fa-credit-card"></i> Novo Pagamento
                  </a>

                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-12" id="addPagamento" style="display:none">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Novo Pagamento</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="card-body">
                  <div class="card card-widget widget-user-2">
                    <div class="widget-user-header">
                      <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="<?php echo BASE_URL; ?>app/assets/images/clientes/<?php echo $tableInfo['id_client']; ?>/<?php echo $tableInfo['cli_photo']; ?>" alt="User Avatar">
                      </div>
                      <h3 class="widget-user-username"><?php echo $tableInfo['cli_nome']; ?></h3>
                    </div>

                  </div>
                  <form id="formVenda" action="POST">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $tableInfo['id_client']; ?>" />
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label>Forma Pagamento</label>
                          <select class="form-control  " style="width: 100%;" tabindex="-1" name="ven_forma_pagamento" id="ven_forma_pagamento" aria-hidden="true">
                            <option selected="selected" value="cartão">Cartão</option>
                            <option value="dinheiro">Dinheiro</option>

                          </select>
                        </div>
                      </div>

                      <div class="col-2 col-sm-2">
                        <div class="form-group">
                          <label for="">Condição</label>
                          <input type="text" class="form-control" id="ven_condicao" name="ven_condicao" placeholder="3x">
                        </div>
                      </div>

                      <div class="col-2 col-sm-2">
                        <div class="form-group">
                          <label for="">Valor Bruto</label>
                          <input type="number" class="form-control" id="ven_valor_bruto" name="ven_valor_bruto" placeholder="">
                        </div>
                      </div>

                      <div class="col-2 col-sm-2">
                        <div class="form-group">
                          <label for="">Desconto</label>
                          <input type="number" class="form-control" id="ven_desconto" name="ven_desconto" placeholder="">
                        </div>
                      </div>

                      <div class="col-2 col-sm-2">
                        <div class="form-group">
                          <label for="">Liquido</label>
                          <input type="number" class="form-control" id="ven_liquido" name="ven_liquido" placeholder="">
                        </div>
                      </div>


                      <div class="col-2 col-sm-2">
                        <div class="form-group">
                          <label for="">Data do Pagamento</label>
                          <input type="text" class="form-control" id="ven_data" name="ven_data" placeholder="" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                        </div>
                      </div>
                    </div>
                    <a id="save" href="javascript:void(0);" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Salvar</a>
                    <a id="cancel" href="javascript:void(0);" class="link-black text-sm mr-2"><i class="fas fa-times mr-1"></i> Cancelar</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      getTabelaCupom();
    });

    $('#table_search').keyup(function() {
      getTabelaCupom();
    });

    function getTabelaCupom() {

      var table_search = $('#table_search').val();
      var nomeCliente = $('#cli_nome').val();
      $.getJSON(BASE_URL_PAINEL + 'vendas/getVendaByCliente/', {
        data: '<?php echo json_encode($_GET); ?>',
        id_cliente: '<?= $tableInfo['id_client']; ?>',
        filtro: {
          all: table_search,
        },
        ajax: 'true'
      }, function(j) {
        var options = '';
        var total = 0;

        if (j.tableDados != null && j.tableDados.length > 0) {

          for (var i = 0; i < j.tableDados.length; i++) {
            var pago = j.tableDados[i].ven_status == 0 ? 'danger">não pago' : 'success">pago';

            valor = j.tableDados[i].ven_liquido.replace('.', "");
            valor = valor.replace(',', ".");

            total += parseFloat(valor);

            options += '<div class="post">'
            options += '  <div class="row" style="margin-top:20px">'
            options += '    <div class="col-md-2 text-center">'
            options += '      <div class="col-12 col-sm-12">'
            options += '        <dl>'
            options += '        <dt style="font-size: 16px;"> ' + j.tableDados[i].dia + '</dt>'
            options += '        <dd>' + j.tableDados[i].mes + '</dd>'
            options += '        </dl>'
            options += '      </div>'
            options += '    </div>'
            options += '  <div class="col-md-8">'
            options += '    <div class="col-12 col-sm-12">'
            options += '      <dl>'
            options += '      <dt style="font-size: 16px;">' + nomeCliente + '</dt>'
            options += '      <dd>Pagamento feito em ' + j.tableDados[i].ven_forma_pagamento + ' <span style="    cursor: pointer;" onclick="pagToVenda(' + j.tableDados[i].id_venda + ',' + j.tableDados[i].ven_status + ')" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="badge bg-' + pago + '</span></dd>'
            options += '      </dl>'
            options += '    </div>'
            options += '  </div>'
            options += '  <div class="col-md-2">'
            options += '    <div class="col-12 col-sm-12">'
            options += '      <dl>'
            options += '      <dt style="font-size: 16px;">R$ </dt>'
            options += '      <dd>' + j.tableDados[i].ven_liquido + '</dd>'
            options += '      </dl>'
            options += '    </div>'
            options += '    <a href="#"><i class="fas fa-arrow-right " style="float:right"></i></a>'
            options += '  </div>'
            options += '  </div>'
            options += '</div>'

          }

          $('#totalRecebido').html('R$ ' + formata(total));
          $('#listVenda').html(options).show();

        } else {

          $('#listVenda').html(options).show();
        }


      });

    };

    function pagToVenda(id_venda, status) {

      status = status == 1 ? '0' : '1';

      $.ajax({
        url: BASE_URL_PAINEL + 'vendas/PagToVenda',
        type: 'POST',
        data: {
          id_venda: id_venda,
          status: status
        },

        dataType: 'json',
        success: function(json) {
          if (json) {
            status == 1 ? toastr.success('Pago com Sucesso') : toastr.error('não Pago');


            getTabelaCupom();

          }
        },
      });
    }

    $('#ven_valor_bruto, #ven_desconto').on("input", function() {

      var total = $('#ven_valor_bruto').val();
      var negociado = $('#ven_desconto').val();

      if (negociado == undefined) {
        negociado = '0'
      }

      total = total - negociado

      $('#ven_liquido').val(total);

    });

    function formata(v) {

      return parseFloat(v).toLocaleString("pt-BR", {
        minimumFractionDigits: 2
      });
    }

    $('#addPagamentoButton').on("click", function() {
      $("#addPagamento").css('display', '');
      $("#pagamentoTable").css('display', 'none');
      $(".submit_edit").css('display', 'none');
    });
    $('#cancel').on("click", function() {
      $("#addPagamento").css('display', 'none');
      $("#pagamentoTable").css('display', '');
      $(".submit_edit").css('display', '');
    });
    $('#save').on("click", function() {

      $("#ven_valor_bruto").val().length != '' ?
        $("#ven_valor_bruto").removeClass("is-invalid") :
        $("#ven_valor_bruto").addClass("is-invalid") + toastr.error('Valor Bruto é obrigatorio')

      $("#ven_data").val().length != '' ?
        $("#ven_data").removeClass("is-invalid") :
        $("#ven_data").addClass("is-invalid") + toastr.error('Data é obrigatori(a)')

      submit();

    });

    function submit() {

      event.preventDefault();
      var form = $('#formVenda')[0]; // You need to use standard javascript object here
      var formData = new FormData(form);

      if (!$(".form-control").hasClass("is-invalid") && !$(".form-control").hasClass("has-error")) {

        $.ajax({

          url: BASE_URL_PAINEL + 'vendas/addVenda',
          type: 'POST',
          data: formData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          success: function(json) {
            if (json) {
              toastr.success('Adicionado com Sucesso');
              $("#addPagamento").css('display', 'none');
              $(".submit_edit").css('display', '');
              $("#pagamentoTable").css('display', '');
              form.reset();
              getTabelaCupom();

            }
          },
        });
      }
    }
  </script>