<?php
$nomecliente = str_replace(' ', '_', $tableInfo['cli_nome']);
$idade = 0;
if ($tableInfo['cli_aniversario'] != '') {
	$data = $tableInfo['cli_aniversario'];

	// Separa em dia, mês e ano
	list($dia, $mes, $ano) = explode('/', $data);

	// Descobre que dia é hoje e retorna a unix timestamp
	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
	// Descobre a unix timestamp da data de nascimento do fulano
	$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

	// Depois apenas fazemos o cálculo já citado :)
	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
}
?>

<form method="POST" id="edit_client" action="<?php echo BASE_URL_PAINEL; ?>clientes/action" enctype="multipart/form-data">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header p-2">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link active" href="#dados" data-toggle="tab">Dados</a></li>
					<li class="nav-item"><a class="nav-link" href="#entrevista" data-toggle="tab">Entrevista</a></li>
					<?php $permissions = array();
					foreach ($tableInfo['permissions'] as $perm => $value) : ?>
						<li class="nav-item"><a class="nav-link" href="#<?php echo str_replace(' ', '', $value); ?>" data-toggle="tab"><?php echo $value; ?></a></li>
					<?php endforeach; ?>
				</ul>

			</div>
			<div class="card-body">
				<div class="tab-content">


					<div class="tab-pane active" id="dados">

						<div class="row">
							<div class="col-md-3">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="https://adminlte.io/themes/dev/AdminLTE/dist/img/user4-128x128.jpg" alt="User profile picture">
									</div>

									<h3 class="profile-username text-center"><?php echo $tableInfo['cli_nome']; ?></h3>

									<p class="text-muted text-center"><?php echo $tableInfo['cli_profissao']; ?></p>

									<ul class="list-group list-group-unbordered mb-3">
										<li class="list-group-item">
											<b>Status</b>
											<a class="float-right">
												<div class="custom-control custom-switch custom-switch-off-success custom-switch-on-danger">
													<input type="checkbox" class="custom-control-input" id="customStatus">
													<label class="custom-control-label" for="customStatus"></label>
												</div>
											</a>
										</li>

										<li class="list-group-item">
											<b>Consultoria</b>
											<a class="float-right">
												<div class="custom-control custom-switch custom-switch-off-success custom-switch-on-danger">
													<input type="checkbox" class="custom-control-input" id="customConsultoria">
													<label class="custom-control-label" for="customConsultoria"></label>
												</div>
											</a>
										</li>

										<li class="list-group-item">
											<b>Tipo</b>
											<a class="float-right">
												<span> Possivel cliente </span>
											</a>
										</li>

									</ul>

								</div>

								<div class="card card">
									<div class="card-header">
										<h3 class="card-title">Próximos Encontros</h3>
									</div>
									<div class="card-body">

									</div>
								</div>
							</div>
							<div class="col-md-9">
								<input type="hidden" id="id_client" name="id_client" value="<?php echo $tableInfo['id_client']; ?>" />
								<input type="hidden" id="end" name="end" value="<?php echo $tableInfo['id_endereco']; ?>" />
								<input type="hidden" id="id_silhueta" name="id_silhueta" value="<?php echo $tableInfo['id_silhueta']; ?>" />
								<input type="hidden" id="id_entrevista" name="id_entrevista" value="<?php echo $tableInfo['id_entrevista']; ?>" />

								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<label for="">Nome</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="far fa-user"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_nome" id="cli_nome" value="<?php echo $tableInfo['cli_nome']; ?>">
											</div>
										</div>


										<div class="col-md-6">
											<label for="">Sobrenome</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-user-edit"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_sobrenome" id="cli_sobrenome" value="<?php echo $tableInfo['cli_sobrenome']; ?>">
											</div>
										</div>

										<div class="col-md-9">
											<label for="">E-mail</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="far fa-envelope"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_email" id="cli_email" value="<?php echo $tableInfo['cli_email']; ?>">
											</div>
										</div>

										<div class="col-md-3">
											<label for="">Profissão</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_profissao" id="cli_profissao" value="<?php echo $tableInfo['cli_profissao']; ?>">
											</div>
										</div>
										<div class="col-md-3">
											<label for="">Data Nascimento</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_aniversario" id="cli_aniversario" value="<?php echo $tableInfo['cli_aniversario']; ?>">
											</div>
										</div>

										<div class="col-md-2">
											<label for="">Idade</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
												</div>
												<input type="text" class="form-control" name="" id="" value="<?php echo $idade; ?>">
											</div>
										</div>

										<div class="col-md-3">
											<label for="">Tel Fixo</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_telefone" id="cli_telefone" value="<?php echo $tableInfo['cli_telefone']; ?>">
											</div>
										</div>

										<div class="col-md-3">
											<label for="">Tel Celular</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
												</div>
												<input type="text" class="form-control" name="cli_telefone" id="cli_telefone" value="<?php echo $tableInfo['cli_telefone']; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="callout callout-info">
												<h5><i class="fas fa-building"></i> Endereço</h5><br>

												<div class="row">
													<div class="col-md-2">
														<label for="">Cep</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="cep" id="cep" value="<?php echo $tableInfo['cep']; ?>">
														</div>
													</div>
													<div class="col-md-10">
														<label for="">Rua</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="rua" id="rua" value="<?php echo $tableInfo['rua']; ?>">
														</div>
													</div>

													<div class="col-md-4">
														<label for="">Bairro</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $tableInfo['bairro']; ?>">
														</div>
													</div>

													<div class="col-md-8">
														<label for="">Cidade</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $tableInfo['cidade']; ?>">
														</div>
													</div>

													<div class="col-md-1">
														<label for="">Estado</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="estado" id="estado" value="<?php echo $tableInfo['estado']; ?>">
														</div>
													</div>

													<div class="col-md-2">
														<label for="">Nº</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="numero" id="numero" value="<?php echo $tableInfo['numero']; ?>">
														</div>
													</div>

													<div class="col-md-9">
														<label for="">Complemento</label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">

															</div>
															<input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $tableInfo['complemento']; ?>">
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



					<div class="tab-pane" id="entrevista">
						<div class="row">
							<?php
							$array = json_decode($tableInfo['perguntas']);
							foreach ($array as $pergunta => $reposta) :
							?>
								<div class="col-md-12 mb-3">
									<label style="font-weight: 700;" for="<?php echo $pergunta; ?>"><?php echo $pergunta; ?></label>
									<textarea style="margin-top: 0px; margin-bottom: 0px; height: 106px;" type="text" class="form-control" name="entrevista[<?php echo $pergunta; ?>]" id="<?php echo $pergunta; ?>" placeholder="Resposta: "><?php echo $reposta; ?></textarea>
									<div class="invalid-feedback">

									</div>
								</div>
							<?php endforeach; ?>
						</div>
</form>
</div>

<?php foreach ($tableInfo['permissions'] as $perm => $value) : ?>
	<div class="tab-pane <?php #echo $value == 'Teste de Coloração Pessoal' ? 'active' : '' 
							?>" id="<?php echo str_replace(' ', '', $value); ?>">
		<?php include_once('includes/' . str_replace(' ', '', $value) . '.php'); ?>
	</div>
<?php endforeach; ?>

</div>
</div>
<div class="">
	<div id="" style="float: right;" class="btn btn-primary left submit_edit">Salvar</div>
</div>
</div>
</div>
</form>
<script>
	$(function() {
		$("#submit_permission").click(function() {
			$("#permissions_client").submit();
		});

		$(".submit_edit").click(function() {
			$("#edit_client").submit();
		});
	});
</script>