<form id="client_form" method="POST" action="<?php echo BASE_URL_PAINEL; ?>clientes/action" enctype="multipart/form-data">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="tab-content">
                    <div class="tab-pane active" id="dados">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <div class="btn btn-file text-center">
                                            <img class="profile-user-img img-fluid img-circle" name="preview" src="https://www.bluempregos.com.br/wp-content/uploads/2018/10/sem-foto.gif" alt="User profile picture">
                                            <input type="file" onchange="previewImagem()" id="imagem" name="fotos" multiple="">

                                        </div>
                                    </div>
                                    <h3 class="profile-username text-center"></h3>

                                    <p class="text-muted text-center"></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Tipo</b>
                                            <a class="float-right">
                                                <select class="form-control select2" id="typeClient" name="typeClient" data-placeholder="Selecione">
                                                    <option value="Consultoria Completa">Consultoria Completa</option>
                                                    <option value="Consultoria Pocket ">Consultoria Pocket </option>
                                                    <option value="Coloração Pessoal">Coloração Pessoal</option>
                                                    <option value="Possível Cliente">Possível Cliente</option>
                                                </select>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Nome</label>
                                            <div class="input-group mb-3" id="formnome">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_nome" id="cli_nome" value="">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <label for="">Sobrenome</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_sobrenome" id="cli_sobrenome" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <label for="">E-mail</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend" id="foremail">
                                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_email" id="cli_email" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="">Profissão</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_profissao" id="cli_profissao" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Data Nascimento</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_aniversario" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="">Tel Fixo</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_telefone" id="cli_telefone" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="">Tel Celular</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="cli_telefone" id="cli_telefone" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="callout callout-info">
                                                <h5><i class="fas fa-building"></i> Endereço</h5><br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="">Cep</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" class="form-control" name="cep" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" data-inputmask="'mask': ['99999-999']" data-mask value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label for="">Rua</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="rua" id="rua" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="">Bairro</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="bairro" id="bairro" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                        <label for="">Cidade</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="cidade" id="cidade" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <label for="">Estado</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="estado" id="estado" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label for="">Nº</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="numero" id="numero" value="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <label for="">Complemento</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="complemento" id="complemento" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="callout callout-info">
                                                <h5><i class="fab fa-google-plus-g"></i> Rede Social</h5><br>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="">Facebook</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="cli_facebook" id="cli_facebook" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Pinterest</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="cli_pinterest" id="cli_pinterest" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Instagram</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="cli_instagram" id="cli_instagram">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label class="popver_urgencia" style="margin-right: 17px;">
                        <input type="checkbox" class="checkbox_desgn" name="notifyEmail" value="true">
                        <span>
                            <span class="icon unchecked">
                                <span class="mdi mdi-check"></span>
                            </span>
                            Enviar Aviso por Email
                        </span>
                    </label>
                    <div id="submit" style="float: right;" class="btn btn-primary left submit_edit">Salvar</div>
                </div>
            </div>
        </div>
    </div>
</form>