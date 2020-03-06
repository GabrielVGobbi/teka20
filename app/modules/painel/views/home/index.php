<?php $nomecliente = str_replace(' ', '_', $tableInfo['cli_nome']); ?>

<div class="container">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_dados" data-toggle="tab">Dados</a></li>
                <?php $permissions = array();
                foreach ($tableInfo['permissions'] as $perm => $value) : ?>
                    <?php if ($value != 'Entrevista') : ?>
                        <li><a href="#<?php echo str_replace(' ', '', $value); ?>" data-toggle="tab"><?php echo $value; ?></a></li>
                    <?php endif; ?>
                    <?php $permissions[] = $value; ?>
                <?php endforeach; ?>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li> <a href="<?php echo BASE_URL_PAINEL; ?>clientes/entrevista/<?php echo $tableInfo['id_client']; ?>">Entrevista </a></li>
                    </ul>
                </div>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="tab_dados">
                    <form id="editClientByClient" action="<?php echo BASE_URL_PAINEL; ?>home/actionUsuarioByClient" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" value="<?php echo $tableInfo['id_client']; ?>" />
                        <br>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <?php $nomecliente = str_replace(' ', '_', $tableInfo['cli_nome']) . '_' . str_replace(' ', '_', $tableInfo['cli_sobrenome']);  ?>
                                <a class="btn btn-default btn-file" style="background: none; ">
                                    <img style="max-height: 110px;min-height: 110px;"  name="preview" class="profile-user-img img-responsive " src="<?php echo BASE_URL ?>app/assets/images/clientes/<?php echo mb_strtolower($tableInfo['id_client'], 'UTF-8') ?>/<?php echo mb_strtolower($tableInfo['cli_photo'], 'UTF-8') ?>" alt="User profile picture">
                                    <input type="file" name="fotos" onchange="previewImagem()" multiple="">
                                </a>
                                <h3 class="profile-username text-center"><?php echo ucfirst($tableInfo['cli_nome']) . ' ' . ucfirst($tableInfo['cli_sobrenome']); ?></h3>
                                <p class="text-muted text-center"><?php echo $tableInfo['cli_cartela']; ?></p>
                                <div class="text-center">
                                    <!--<img style="max-height: 110px;min-height: 110px;" src="<?php echo BASE_URL; ?>app/assets/imagens/paleta.PNG"> -->
                                    <div style="max-height: 110px;min-height: 110px;"> </div>

                                </div>

                            </div>
                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Nome</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-user"></i>
                                        </div>
                                        <input type="text" data-name="<?php echo $tableInfo['cli_nome']; ?>" class="form-control" name="cli_nome" id="cli_nome" value="<?php echo $tableInfo['cli_nome']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Sobrenome</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-user"></i>
                                        </div>
                                        <input type="text" data-name="<?php echo $tableInfo['cli_sobrenome']; ?>" class="form-control" name="cli_sobrenome" id="cli_sobrenome" value="<?php echo $tableInfo['cli_sobrenome']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input type="text" class="form-control" name="cli_email" id="cli_email" value="<?php echo $tableInfo['cli_email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Data de nascimento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input type="text" class="form-control" name="cli_aniversario" id="cli_aniversario" value="<?php echo $tableInfo['cli_aniversario']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Profissão</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-user-secret"></i>
                                        </div>
                                        <input type="text" class="form-control" name="cli_profissao" id="cli_profissao" value="<?php echo $tableInfo['cli_profissao']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div id="formnome" class="form-group">
                                    <label>Telefone</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="cli_telefone" id="cli_telefone" value="<?php echo $tableInfo['cli_telefone']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="box box-default box-solid">
                                    <input type="hidden" name="end" id="end" value="<?php echo $tableInfo['id_endereco']; ?>"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Endereço</h3>
                                            </div>
                                            <div class="box-body" style="">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CEP</label>
                                                        <input type="text" class="form-control" name="cep" id="cep" autocomplete="off" value="<?php echo $tableInfo['cep']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Rua</label>
                                                        <input type="text" readonly class="form-control" name="rua" id="rua" autocomplete="off" value="<?php echo $tableInfo['rua']; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Nº</label>
                                                        <input type="text" class="form-control" name="numero" id="numero" autocomplete="off" value="<?php echo $tableInfo['numero']; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Complemento</label>
                                                        <input type="text" class="form-control" name="complemento" id="complemento" autocomplete="off" value="<?php echo $tableInfo['complemento']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="box-footer clearfix no-border">
                        <div id="editByClient" class="btn btn-primary pull-right">Salvar</div>
                    </div>
                </div>




                <?php foreach ($tableInfo['permissions'] as $perm => $value) : ?>
                    <div class="tab-pane" id="<?php echo str_replace(' ', '', $value); ?>">
                        <?php include_once('clientes/includes/' . str_replace(' ', '', $value) . '.php'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo BASE_URL; ?>app/assets/js/parametros/<?php echo $viewData['pageController']; ?>.js"></script>