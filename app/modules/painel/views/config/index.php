<?php include_once('cadastrar.php'); ?>
<div class="row">
	<div class="col-md-4">
		<div class="clearfix">
			<aside class="skeleton-aside" style="height: 613.01px;">
				<div class="asidenav">
					<div class="asidenav-group">
						<div class="asidenav-title"><b> Geral </b></div>
						<ul>
							<li class="navConfig" data-id=""><a href="#">Logotipo</a></li>
							<li class="navConfig" data-id="cartelas"><a href="#">Cartelas</a></li>
							<li class="navConfig" data-id=""><a href="#">Configurações do site</a></li>


						</ul>
					</div>

					<div class="asidenav-group">
						<div class="asidenav-title"><b> Email </b></div>
						<ul>
							<li class=""><a href="">SMTP</a></li>
							<li class=""><a href="">Notificações do Email</a></li>
						</ul>
					</div>

					<!--<div class="asidenav-group">
						<div class="asidenav-title"><b>Integrações</b></div>
						<ul>
							<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/google-analytics">Google Analytics</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/google-drive">Selecione Google Drive</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/dropbox">Escolha Dropbox</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/onedrive">Selecione o arquivo One Drive</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/paypal">Integração do PayPal</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/stripe">Galeria de Integração</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/facebook">Login no Facebook</a></li>
					<li class=""><a href="http://localhost/Projeto-em-desenvolvimento/SocialMafia/settings/recaptcha">ReCaptcha</a></li>
						</ul>
					</div>-->
				</div>
			</aside>


		</div>
	</div>

	<div class="col-md-8 tela" id="cartelas" style="display:none">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Cartela</h3>


				<div class="card-tools">
					<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCadastrar">  <i class="fas fa-plus"></i> Novo</button>
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table table-striped projects">
					<thead>
						<tr>
							<th style="width: 1%">
								#
							</th>
							<th style="width: 20%">
								Imagem
							</th>
							<th style="width: 30%">
								Nome
							</th>

							<th>
								URL
							</th>
							<th style="width: 8%" class="text-center">
								Status
							</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach ($paleta as $car) : ?>
							<tr>
								<td>
									<?php echo $car['id_cartela']; ?>
								</td>
								<td>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="<?php echo BASE_URL;?><?php echo $car['car_img']; ?>" target="_blank"><img alt="cartela" class="table-avatar" src="<?php echo BASE_URL; ?><?php echo $car['car_img']; ?>"></a>
										</li>
									</ul>
								</td>
								<td>
									<a>
										<?php echo $car['car_nome']; ?>
									</a>
									<br>
								</td>

								<td class="project-state">
									<span class=""><?php echo $car['car_img']; ?></span>
								</td>
								<td class="project-state">
									<span class="badge badge-success">Ativo</span>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(window).on('load', function() {
		$('.navConfig').click(function() {
			$('.navConfig').removeClass('active');
			$('.tela').hide();
			$(this).addClass('active');
			var id = $(this).attr('data-id');
			$('#' + id).show('slow');
		});
	});
</script>