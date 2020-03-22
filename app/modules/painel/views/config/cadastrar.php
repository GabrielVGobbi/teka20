<div class="modal fade bd-example-modal-lg" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="text-center">Cadastrar nova Cartela</h5>
            </div>
            <br>
            <form method="POST" action="<?php echo BASE_URL_PAINEL; ?>config/action" enctype="multipart/form-data"  >
                <div class="col-md-12">
                    <div class="card">
                        <input type="hidden" name="type" id="TipoCadastro" value="addCartela" />
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="dados">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nome Cartela</label>
                                                    <input type="text" class="form-control" name="car_nome" id="car_nome">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="fotos" onchange="previewImagem()" id="customFile">
                                                    <label class="custom-file-label" for="customFile"></label>
                                                </div>
                                                <span> * é bom colocar o nome da imagem como nome da cartela</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="col-sm-12">
                                                <img name="preview" style="    width: 100%;"> </img>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>