<div class="row" style="z-index:-1">

  <div class="col-md-12" style="z-index:0">
    <div class="card">
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3"></h3>
        <ul class="nav nav-pills ml-auto p-2">
          <li class="nav-item"><a class="nav-link active" href="#inUsed" data-toggle="tab">Sou assim</a></li>
          <li class="nav-item"><a class="nav-link" href="#inLike" data-toggle="tab">Gostaria de ser assim</a></li>
          <li class="nav-item"><a class="nav-link" href="#notUsed" data-toggle="tab">Nunca seria assim</a></li>

        </ul>
      </div>
      <form id="form" enctype="multipart/form-data">
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="inUsed" style="        margin: 13px -94px 10px 70px;">
              <div class="" id="previewinUsed">

              </div>
            </div>
            <div class="tab-pane" id="inLike" style="        margin: 13px -94px 10px 70px;">
              <div class="row" id="previewinLike">

              </div>
            </div>
            <div class="tab-pane" id="notUsed" style="        margin: 13px -94px 10px 70px;">
              <div class="row" id="previewnotUsed">

              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  list_image('inUsed')
  $(function() {
    $('.nav-link ').on('click', function() {
      var href = this.href.split("#");
      list_image(href[1]);
    });
  })

  function previewImagem(v, type) {
    var imagem = document.querySelector('input[name=fotos' + type + '' + v + ']').files[0];
    var preview = document.querySelector('img[name=preview' + type + '' + v + ']');
    $(".fotoArray").attr("disabled", true);
    $("#imagem" + type + v).attr("disabled", false);

    var reader = new FileReader();

    reader.onloadend = function() {
      preview.src = reader.result;
    }

    if (imagem) {
      reader.readAsDataURL(imagem);

      var id_img = $("#imagem" + type + v).attr("data-img");

      var formdata = new FormData($("#form")[0]);

      var v = "'" + v + "'";

      $.ajax({
        url: BASE_URL_PAINEL + "ajax/addPhotoClient/" + type + "/<?php echo $tableInfo['id_client']; ?>" + "/" + v + "/" + id_img,
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function(data) {
          list_image(type)

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        },
      });
    } else {
      preview.src = "";
    }
  }

  function list_image(type) {
    $('.clearfix').hide();
    $.ajax({
      url: BASE_URL_PAINEL + "ajax/getImagesByCliente/" + type + "/<?php echo $tableInfo['id_client']; ?>/<?php echo $nomecliente; ?>",
      success: function(data) {
        $('#preview' + type).show();
        $('#preview' + type).html(data);
      }
    });
  };
</script>