<!--<div class="col-md-12 ">
	<div class="text-center" style="display: flex;align-items: center;justify-content: center;">
		
			<form action="#" method="get" class="" style="border-radius: 3px;border: 1px solid #d2d6de;text-overflow: clip;    width: 50%;">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Buscar">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
	
	</div>
	<div class="container-fluid">
		<br>
		<div class="row">
			<?php if ($tableDados && count($tableDados) > 0) : ?>
				<?php foreach ($tableDados as $dd) : ?>
					<?php $nomecliente = str_replace(' ', '_', $dd['cli_nome']) . '_' . str_replace(' ', '_', $dd['cli_sobrenome']);  ?>

					<a href="<?php echo BASE_URL_PAINEL ?>clientes/info/<?php echo $dd['id_client']; ?>">
						<div class="col-sm-12 col-md-3 col-lg-2 col-xl-2">
							<div class="box box-primary" style="min-height: 340px; max-height: 340px;">
								<div class="box-body box-profile">
									<img style="max-height: 110px;min-height: 110px;" class="profile-user-img img-responsive img-circle" src="<?php echo BASE_URL ?>app/assets/images/clientes/<?php echo mb_strtolower($dd['id_client'], 'UTF-8') ?>/<?php echo mb_strtolower($dd['cli_photo'], 'UTF-8') ?>" alt="User profile picture">
									<h3 class="profile-username text-center"><?php echo ucfirst($dd['cli_nome']) . ' ' . ucfirst($dd['cli_sobrenome']); ?></h3>
									<p class="text-muted text-center"><?php echo $dd['cli_cartela']; ?></p>
									<ul class="list-group list-group-unbordered text-center">
										<li class="list-group-item ">
											<i class="fa fa-envelope"></i><b> <?php echo $dd['cli_email']; ?></b>
										</li>
										<li class="list-group-item">
											<b>Estilo</b>
										</li>
										<li class="list-group-item">
											<b>Encontro</b>
										</li>
									</ul>
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
</div>-->



<div class="card card-solid">

	<div class="card-body pb-0">
		<div class="mb-10 " style="    margin-bottom: 12px;margin-bottom: 41px;">
			<a class="btn btn-sm btn-primary left" style="float:right" href="<?php echo BASE_URL_PAINEL; ?>clientes/add"> <i class="fas fa-plus"></i> Novo</a>

		</div>

		<div class="row d-flex align-items-stretch">

			<?php if ($tableDados && count($tableDados) > 0) : ?>
				<?php foreach ($tableDados as $dd) : ?>
					<?php $nomecliente = str_replace(' ', '_', strtolower($dd['cli_nome'])) . '_' . str_replace(' ', '_', strtolower($dd['cli_sobrenome']));  ?>
					<a href="<?php echo BASE_URL_PAINEL ?>clientes/info/<?php echo $dd['id_client']; ?>">
						<div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
							<div class="card bg-light">
								<div class="card-header text-muted border-bottom-0"></div>
								<div class="card-body pt-0">
									<div class="row">
										<div class="col-7">
											<h2 class="lead"><b><?php echo ucfirst($dd['cli_nome']) . ' ' . ucfirst($dd['cli_sobrenome']); ?></b></h2>
											<p class="text-muted text-sm"><b></b> <?php echo $dd['cli_tipo']; ?> </p>
											<ul class="ml-4 mb-0 fa-ul text-muted">
												<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?php echo $dd['cli_nome'] ?></li>
												<li class="small pt-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <?php echo $dd['cli_telefone'] ?></li>
											</ul>
										</div>
										<div class="col-5 text-center">
											<img style="max-height: 110px;min-height: 110px;" class="profile-user-img img-responsive img-circle" src="<?php echo BASE_URL; ?>app/assets/images/clientes/<?php echo $dd['id_client']; ?>/<?php echo $dd['cli_photo']; ?>" alt="User profile picture">
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