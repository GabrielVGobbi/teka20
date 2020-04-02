<?php
$array = array(
  'Contraste' => [
    'Baixo Claro/Escuro',
    'Baixo Claro/Escuro para Médio',
    'Médio',
    'Médio/Alto',
    'Alto',
  ],
  'Dimensoes_da_Cor' => [
    'Temperatura' => [
      'Quente',
      'Frio'
    ],
    'Intensidade' => [
      'Suave/Opaca',
      'Brilhante/Vivo'
    ],
    'Profundidade' => [
      'Claro',
      'Escuro'
    ]
  ]
);
$coloracao = $this->cliente->getcoloracaoByClient($tableInfo['id_client']);
if ($coloracao) {

  $id_coloracao = $coloracao['id_coloracao'];
  $contraste    = $coloracao['col_contraste'];
  $temperatura  = $coloracao['col_temperatura'];
  $intensidade  = $coloracao['col_intensidade'];
  $profundidade  = $coloracao['col_profundidade'];
  $id_cartela  = $coloracao['id_cartela'];
  $cartela_imagem = $coloracao['car_img'];
  $dossieStatus = $coloracao['dossie_status'];

}
$comentario = $this->getComentarioByEtapaById(TESTEDECOLORACAOPESSOAL, $tableInfo['id_client']);
?>
<input type="hidden" name="id_coloracao" name="id_coloracao" value="<?php echo (!empty($id_coloracao) ? $id_coloracao : ''); ?>" />

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Contraste
        </h3>
      </div>
      <div class="card-body">

        <div class="col-sm-12">
          <div class="form-group">
            <?php foreach ($array['Contraste'] as $con => $value) :  ?>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="Contraste" <?php echo (isset($contraste) && $contraste == $value  ? 'checked' : ''); ?> id="Contraste<?php echo $con; ?>" value="<?php echo $value; ?>">
                <label for="Contraste<?php echo $con; ?>" class="custom-control-label"><?php echo $value; ?></label>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Dimensão da cor
        </h3>
      </div>
      <div class="card-body">
        <?php foreach ($array['Dimensoes_da_Cor'] as $con => $value) :  ?>
          <?php
          if ($coloracao)
            switch ($con) {
              case 'Temperatura':
                $tipo = $temperatura;
                break;
              case 'Intensidade':
                $tipo = $intensidade;
                break;
              case 'Profundidade':
                $tipo = $profundidade;
                break;
            }
          ?>
          <div class="col-sm-12">
            <div class="form-group">
              <label for="" class=""><?php echo $con; ?></label>
              <div class="row">
                <?php foreach ($value as $val => $valor) : ?>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" <?php echo (isset($tipo) && $tipo == $valor  ? 'checked' : ''); ?> name="<?php echo $con; ?>" id="<?php echo $con; ?><?php echo $val; ?>" value="<?php echo $valor; ?>" />
                      <label for="<?php echo $con; ?><?php echo $val; ?>" class="custom-control-label"><?php echo $valor; ?></label>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          Cartela
        </h3>
      </div>
      <div class="card-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Cartela</label>
            <select class="form-control select2" style="width: 100%;" name="cartela" id="id_cartela" aria-hidden="true" required>
              <option value="">Selecione</option>
              <?php foreach ($paleta as $pl) : ?>
                <option <?php echo (isset($id_cartela) && $id_cartela == $pl['id_cartela']  ? 'selected' : ''); ?> value="<?php echo $pl['id_cartela']; ?>"><?php echo $pl['car_nome'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="text-center">
          <img style="width: 51%" src="<?php echo (isset($cartela_imagem) && !empty($cartela_imagem)  ? BASE_URL . $cartela_imagem : 'https://www.joinvillevagas.com.br/wp-content/uploads/2018/10/sem-foto.gif'); ?>">
        </div>
      </div>
    </div>
  </div>
</div>

<label class="popver" data-content="se checkado, está entregue" style="margin-right: 17px;" data-target="webuiPopover0">
  <input type="checkbox" class="checkbox_desgn" name="dossie_status" <?= isset($dossieStatus) && $dossieStatus == 1 ? 'checked' : ''; ?>  id="dossie" value="1">
  <span>
    <span class="icon unchecked">
      <span class="mdi mdi-check"></span>
    </span>
    Dossiê
  </span>
</label>
<?php if ($coloracao) : ?>
  <div>
    <div class="card-body">
      <blockquote>
        <p>Seu Contraste é <?php echo $contraste; ?>, Dimensão da cor <?php echo $temperatura; ?></p>
        <small>Sua Cartela é: <cite title="Source Title"><?php echo $coloracao['car_nome']; ?></cite></small>
      </blockquote>
    </div>
  </div>
<?php endif; ?>