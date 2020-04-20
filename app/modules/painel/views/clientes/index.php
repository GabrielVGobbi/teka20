<div class="card-body pb-0">
	<div class="col-md-12 pb-1">
		<div class="card <?= isset($_GET['filtros']) ? '' : 'collapsed-card' ?>">
			<div class="card-header">
				<h3 class="card-title " style="    padding: 6px;">Filtro</h3>


				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=a">A</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=B">B</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=C">C</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=D">D</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=E">E</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=F">F</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=G">G</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=H">H</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=I">I</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=J">J</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=K">K</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=L">L</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=M">M</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=N">N</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=O">O</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=P">P</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=Q">Q</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=R">R</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=S">S</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=T">T</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=U">U</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=V">V</a>
				<a class="ml-1 card-title" style="    padding: 3px;" href="<?= BASE_URL_PAINEL; ?>clientes?filtros%5Babc%5D=W">W</a>



				<div class="card-tools">
					<a class="btn btn-sm btn-primary ml-1" style="float:right" href="<?= BASE_URL_PAINEL; ?>clientes/add"> <i class="fas fa-plus"></i> Novo</a>
					<button class="btn btn-sm btn-info pop" data-card-widget="collapse">
						<i class="fas fa-search-plus"></i>
					</button>

					<a class="btn btn-sm btn-primary ml-1" style="float:right" href="<?= BASE_URL_PAINEL; ?>clientes"> <i class="fas fa-sync"></i></a>

				</div>
			</div>
			<div class="card-body p-0">
				<form method="GET">
					<div class="d-md-flex">
						<div class="card-body">
							<div class="row">
								<div class="form-group col-md-4">
									<label for="nome_cliente">Nome Cliente</label>
									<input type="text" class="form-control" id="nome_cliente" name="filtros[cli_nome]" placeholder="">
								</div>
								<div class="form-group col-md-4">
									<label for="">Cartela</label>
									<input type="text" class="form-control" id="cartela" name="filtros[cartela]" placeholder="">
								</div>

								<div class="form-group col-md-2">
									<label for="">Aniversario</label>
									<input type="text" class="form-control" id="niver" name="filtros[cli_aniversario]" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="">
								</div>

								<div class="form-group col-md-2">
									<label for="">Serviço</label>
									<select class="form-control select2 select2-hidden-accessible" id="typeClient" style=" width: 100%;" name="filtros[cli_tipo]" data-placeholder="Selecione">
										<option value="">Definir</option>
										<option value="Consultoria Completa">Consultoria Completa</option>
										<option value="Consultoria Pocket">Consultoria Pocket</option>
										<option value="Coloração Pessoal">Coloração Pessoal</option>
										<option value="Possível Cliente">Possível Cliente</option>
									</select>
								</div>

								<div class="form-group col-md-2">
									<label for="">Pendência</label>
									<select class="form-control select2 select2-hidden-accessible" id="pendencia" style=" width: 100%;" name="filtros[pendencia]" data-placeholder="Selecione">
										<option value="">selecione</option>
										<option value="Atendimento">Atendimento</option>
										<option value="Dossie">Dossie</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" style="float:right">Buscar</button>
					</div>
				</form>
			</div>
		</div>


		<div class="row d-flex align-items-stretch">

			<?php if ($tableDados && count($tableDados) > 0) : ?>
				<?php foreach ($tableDados as $dd) : ?>
					<?php $nomecliente = str_replace(' ', '_', strtolower($dd['cli_nome'])) . '_' . str_replace(' ', '_', strtolower($dd['cli_sobrenome']));  ?>
					<?php $cartela = $this->painel->getCartelaByIdCliente($dd['id_client']); ?>


					<a href="<?= BASE_URL_PAINEL ?>clientes/info/<?= $dd['id_client']; ?>">
						<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
							<div class="card bg-light">
								<div class="card-header text-muted border-bottom-0"></div>
								<div class="card-body pt-0">
									<div class="row">
										<div class="col-7">
											<h2 class="lead"><b><?= ucfirst($dd['cli_nome']) . ' ' . ucfirst($dd['cli_sobrenome']); ?></b></h2>
											<p class="text-muted text-sm"><b></b> <?= $dd['cli_tipo']; ?> </p>
											<ul class="ml-4 mb-0 fa-ul text-muted">
												<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?= $dd['cli_nome'] ?></li>
												<li class="small pt-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <?= isset($dd['cli_telefone']) && !empty($dd['cli_telefone']) ? $dd['cli_telefone'] : '()' ?></li>
												<li class="small pt-2"><span class="fa-li"><i class="fas fa-lg fa-palette"></i></span>Cartela: <?= $cartela ?></li>

											</ul>
										</div>
										<div class="col-5 text-center">
											<img style="max-height: 110px;min-height: 110px;" class="profile-user-img img-responsive img-circle" src="<?= BASE_URL; ?>app/assets/images/clientes/<?= $dd['id_client']; ?>/<?= $dd['cli_photo']; ?>" alt="User profile picture">
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="text-left">

										<a href="#" class="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php endforeach; ?>

			<?php else : ?>
				<h3> nenhum resultado encontrado </h3>
			<?php endif; ?>

		</div>
	</div>
	<div class="card-footer">
		<nav aria-label="Contacts Page Navigation">
			<ul class="pagination justify-content-center m-0">
				<?php for ($q = 1; $q <= $p_count; $q++) : ?>
					<li class="page-item <?php echo ($q == $p) ? 'active' : '' ?> ">
						<a class="page-link" href="<?php echo BASE_URL; ?>clientes?p=<?php $w = $_GET;
																						$w['p'] = $q;
																						echo http_build_query($w); ?>"><?php echo $q; ?></a>
					</li>
				<?php endfor; ?>
			</ul>
		</nav>
	</div>
</div>