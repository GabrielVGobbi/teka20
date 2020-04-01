
<div class="card-body pb-0">
	<div class="mb-10 " style="    margin-bottom: 12px;margin-bottom: 41px;">
		<a class="btn btn-sm btn-primary left" style="float:right" href="<?= BASE_URL_PAINEL; ?>clientes/add"> <i class="fas fa-plus"></i> Novo</a>

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
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
		</ul>
	</nav>
</div>
</div>