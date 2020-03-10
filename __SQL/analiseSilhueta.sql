CREATE TABLE `client_silhueta` (
  `id_silhueta` INT NOT NULL AUTO_INCREMENT,
  `sil_estatura` VARCHAR(255) NULL COMMENT 'Pequena\nMedia\nGrande',
  `sil_altura` VARCHAR(255) NULL COMMENT 'baixinha \nmedia\nalta',
  `sil_ombro_quadril` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL COMMENT 'ombros mais estreitos que quadril \nproporcionais entre si\nombos mais largos',
  `sil_pescoco` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL COMMENT 'longo \ncurto\nfino\ngrosso',
  `sil_cintura_quadril_ombro` VARCHAR(255) NULL COMMENT '\nestreitinha/definida\nlateriais de torso mais retas',
  `sil_largura` VARCHAR(255) NULL COMMENT 'abaixo do peso \nproporcional\nacima do peso\nsobrepeso',
  `sil_pesovisual` VARCHAR(255) NULL COMMENT 'na parte de baixo da silhueta\nno meio do corpo \nna parte de cima',
  `sil_pernas_torso` VARCHAR(255) NULL COMMENT 'pernas curtas\nproporcionais \npernas longas',
  `sil_formas` VARCHAR(255) NULL COMMENT 'mais arredondadas \nmais angulares',
  `sil_cintura_gancho_ombro` VARCHAR(255) NULL COMMENT 'em relação ao ganco e ao ombro \n\n- alta\n- proporcional\n- baixa\n',
  `observacoes` MEDIUMTEXT NULL,
  PRIMARY KEY (`id_silhueta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `client_silhueta` 
ADD COLUMN `sil_seios` VARCHAR(555) NULL AFTER `sil_cintura_gancho_ombro`,
ADD COLUMN `sil_bumbum` VARCHAR(555) NULL AFTER `sil_seios`,
ADD COLUMN `sil_pernas` VARCHAR(555) NULL AFTER `sil_bumbum`,
ADD COLUMN `sil_quadril` VARCHAR(555) NULL AFTER `sil_pernas`,
ADD COLUMN `sil_bracos` VARCHAR(555) NULL AFTER `sil_quadril`,
ADD COLUMN `sil_tamanho_cima` VARCHAR(555) NULL AFTER `sil_bracos`,
ADD COLUMN `sil_tamanho_baixo` VARCHAR(555) NULL AFTER `sil_tamanho_cima`,
ADD COLUMN `sil_tamanho_sapatos` VARCHAR(45) NULL AFTER `sil_tamanho_baixo`,
ADD COLUMN `sil_biotipo` VARCHAR(105) NULL COMMENT 'ampulheta\nretangulas\ntriangular/triângulo invertido\noval\npêra/triângulo' AFTER `sil_tamanho_sapatos`;

ALTER TABLE `teka`.`client_silhueta` 
ADD COLUMN `id_company` INT NULL AFTER `id_client`,
ADD COLUMN `id_silhueta` INT NULL AFTER `id_silhueta`,
ADD COLUMN `id_client` INT NULL AFTER `id_silhueta`;

ALTER TABLE `teka`.`client` 

CHANGE COLUMN `id_entrevista` `id_entrevista` INT(11) NULL DEFAULT NULL AFTER `id_address`;



