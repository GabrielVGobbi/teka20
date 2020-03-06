-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Mar-2020 às 16:24
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soare416_style`
--
CREATE DATABASE IF NOT EXISTS `soare416_style` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `soare416_style`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartela`
--

CREATE TABLE `cartela` (
  `id_cartela` int(11) NOT NULL,
  `id_company` int(11) DEFAULT NULL,
  `car_nome` varchar(120) DEFAULT NULL,
  `car_tipo` varchar(45) DEFAULT '0',
  `car_img` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cartela`
--

INSERT INTO `cartela` (`id_cartela`, `id_company`, `car_nome`, `car_tipo`, `car_img`) VALUES
(1, 1, 'Inverno', '0', NULL),
(2, 1, 'Inverno Puro / Frio', '0', NULL),
(3, 1, 'Inverno Intenso / Brilhante', '0', NULL),
(4, 1, 'Inverno Profundo / Escuro', '0', NULL),
(5, 1, 'Verão', '0', NULL),
(6, 1, 'Verão Puro / Frio', '0', NULL),
(7, 1, 'Verão Claro', '0', NULL),
(8, 1, 'Verão Suave', '0', NULL),
(9, 1, 'Primavera', '0', NULL),
(10, 1, 'Primavera Pura / Quente', '0', NULL),
(11, 1, 'Primavera Clara', '0', NULL),
(12, 1, 'Primavera Intensa / Brilhante', '0', NULL),
(13, 1, 'Outono', '0', 'https://assets.xtechcommerce.com/uploads/images/medium/3526355421f515d3c75d3b2e4b379efb.jpg'),
(14, 1, 'Outono Puro / Quente', '0', NULL),
(15, 1, 'Outono Suave', '0', NULL),
(16, 1, 'Outono Escuro / Profundo', '0', 'https://i.pinimg.com/originals/4b/b3/fc/4bb3fc61ac2bfce114f48ee3b0d4f757.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `id_company` int(11) DEFAULT NULL,
  `id_address` int(11) DEFAULT NULL,
  `cli_nome` varchar(255) DEFAULT NULL,
  `cli_sobrenome` varchar(255) DEFAULT NULL,
  `cli_email` varchar(45) DEFAULT NULL,
  `cli_aniversario` varchar(11) DEFAULT NULL,
  `cli_telefone` varchar(24) DEFAULT NULL,
  `cli_profissao` varchar(255) DEFAULT NULL,
  `cli_obs` mediumtext,
  `cli_photo` varchar(255) DEFAULT NULL,
  `cli_cartela` varchar(45) DEFAULT NULL,
  `cli_etapas` varchar(255) DEFAULT '1',
  `id_entrevista` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `edited_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id_client`, `id_company`, `id_address`, `cli_nome`, `cli_sobrenome`, `cli_email`, `cli_aniversario`, `cli_telefone`, `cli_profissao`, `cli_obs`, `cli_photo`, `cli_cartela`, `cli_etapas`, `id_entrevista`, `created_at`, `edited_at`, `created_by`, `edited_by`) VALUES
(18, 1, 32, 'Luciana', 'Sales Zanluchi', 'lulysales@hotmail.com', '18/07/1984', '(11) 99653-1839', 'Empresária', NULL, 'luciana_sales_zanluchi_user.jpg', NULL, '', 29, '2020-02-20 10:00:29', '2020-03-06 11:45:54', NULL, 1),
(20, 1, 34, 'Juliana', 'Fabbri Gaeta Pisciotti', 'ju_gaeta@hotmail.com', '15/02/1984', '(11) 97440-0619', 'Médica', NULL, 'juliana_fabbri_gaeta_pisciotti_user.jpg', NULL, '', 31, '2020-03-06 10:38:48', '2020-03-06 13:30:04', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_endereco`
--

CREATE TABLE `cliente_endereco` (
  `id_endereco` int(11) NOT NULL,
  `clc_id` int(11) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `complemento` varchar(120) DEFAULT NULL,
  `inscEstado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente_endereco`
--

INSERT INTO `cliente_endereco` (`id_endereco`, `clc_id`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `complemento`, `inscEstado`) VALUES
(31, NULL, 'Alameda das Margaridas', '322', NULL, NULL, NULL, '06539-270', '(Residencial Cinco)', NULL),
(32, NULL, 'Avenida Presidente Kennedy', '3700', 'Santa Paula', 'São Caetano do Sul', 'SP', '09572-200', 'apto 161 - torre 2', NULL),
(33, NULL, 'consultando', '', NULL, NULL, NULL, '12312-331', '', NULL),
(34, NULL, 'Rua Frederico Guarinon', '400', 'Jardim Ampliação', 'São Paulo', 'SP', '05713-460', 'apto 104', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `client_image`
--

CREATE TABLE `client_image` (
  `id_cli_image` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL,
  `img_type` varchar(45) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client_image`
--

INSERT INTO `client_image` (`id_cli_image`, `id_client`, `id_image`, `img_type`, `id_company`) VALUES
(1, 2, 1, 'inLike', 1),
(2, 2, 2, 'inLike', 1),
(3, 3, 3, 'inLike', 1),
(4, 6, 4, 'inUsed', 1),
(5, 6, 5, 'inUsed', 1),
(6, 6, 6, 'inUsed', 1),
(7, 6, 7, 'inUsed', 1),
(8, 6, 8, 'inUsed', 1),
(9, 6, 9, 'inUsed', 1),
(10, 6, 10, 'inUsed', 1),
(11, 6, 11, 'inUsed', 1),
(12, 6, 12, 'inUsed', 1),
(13, 6, 13, 'inUsed', 1),
(14, 6, 14, 'inUsed', 1),
(15, 6, 15, 'inLike', 1),
(16, 6, 16, 'inLike', 1),
(17, 6, 17, 'inUsed', 1),
(18, 6, 18, 'inUsed', 1),
(19, 6, 19, 'inUsed', 1),
(20, 6, 20, 'inUsed', 1),
(21, 6, 21, 'inUsed', 1),
(22, 6, 22, 'inUsed', 1),
(23, 6, 23, 'inUsed', 1),
(24, 6, 24, 'inUsed', 1),
(25, 6, 25, 'inUsed', 1),
(26, 6, 26, 'inUsed', 1),
(27, 6, 27, 'inUsed', 1),
(28, 6, 28, 'inUsed', 1),
(29, 6, 29, 'inUsed', 1),
(30, 6, 30, 'inUsed', 1),
(31, 20, 31, 'inLike', 1),
(32, 20, 32, 'notUsed', 1),
(33, 20, 33, 'inUsed', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `client_perguntas`
--

CREATE TABLE `client_perguntas` (
  `id_cli_pe` int(11) NOT NULL,
  `clip_pergunta` varchar(500) DEFAULT NULL,
  `clip_tipo` varchar(45) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `cli_ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client_perguntas`
--

INSERT INTO `client_perguntas` (`id_cli_pe`, `clip_pergunta`, `clip_tipo`, `id_company`, `cli_ordem`) VALUES
(2, 'Com o que você trabalha?', '1', 1, 1),
(3, 'Como é o seu ambiente de trabalho?', '1', 1, 2),
(4, 'Para o que você costuma a pensar em como se vestir?', '1', 1, 3),
(5, 'Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\numa situação/ocasião, liste e explique elas.)', '1', 1, 4),
(6, 'O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e/ou\nparecer nessas ocasiões?', '1', 1, 5),
(7, 'Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\n(capricha na resposta em, quero saber todos os detalhes!).', '1', 1, 6),
(8, 'Quanto você calça (tamanho BR)?', '1', 1, 7),
(9, 'Quantos pares de sapatos você possui atualmente?', '1', 1, 8),
(10, 'Quais marcas de Sapato você costuma comprar?', '1', 1, 9),
(11, 'Quais marcas de Sapato estão no seu sonho de consumo?', '1', 1, 10),
(12, 'De que tipo de sapato você mais gosta? E de que tipo você menos gosta?', '1', 1, 11),
(13, 'Qual é a sua numeração para roupa?', '1', 1, 12),
(14, 'Costuma comprar em quais lojas/marcas? E por que você compra nelas?', '1', 1, 13),
(15, 'Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?', '1', 1, 14),
(16, 'Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\nque em cada uma delas te chama mais atenção?', '1', 1, 15),
(17, 'Quais são suas cores favoritas e que mais usa?', '1', 1, 16),
(18, 'Que tipo de tecido você prefere?', '1', 1, 17),
(19, 'Gosta de estampa? Cite um exemplo de estampa que você usa/usaria.', '1', 1, 18),
(20, 'Como você gosta do caimento das suas roupas?', '1', 1, 19),
(21, 'Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\ngosta!', '1', 1, 20),
(22, 'Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas/pois/ floral OU não\ngosta de nenhum..)', '1', 1, 21),
(23, 'Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\n6 meses, 1 vez ao ano)', '1', 1, 22),
(24, 'Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\nlonga ou não)', '1', 1, 23),
(25, 'Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?', '1', 1, 24),
(26, 'Me fala quais marcas você não gosta?', '1', 1, 25),
(27, 'Costuma maquiar-se?', '1', 1, 26),
(28, 'Gosta de fazer penteados diferentes no dia a dia?', '1', 1, 27),
(29, 'Quais características físicas você mais gosta em você? E quais você menos gosta?', '1', 1, 28),
(30, 'Você acredita que suas roupas estão em harmonia com seu tipo físico?', '1', 1, 29),
(31, 'E com a sua personalidade?', '1', 1, 30),
(32, 'Como é o seu dia a dia?', '1', 1, 31),
(33, 'Quais traços da sua personalidade você mais gosta? E os que menos gosta?', '1', 1, 32),
(34, 'Você se incomoda quando está vestindo algo muito diferente do que os outros estão\nvestindo em um mesmo ambiente?', '1', 1, 33),
(35, 'Você se incomoda quando está vestindo algo muito diferente do que os outros estão\nvestindo em um mesmo ambiente?', '1', 1, 34),
(36, 'Como você acha que as pessoas te percebem pela maneira como se veste?', '1', 1, 35),
(37, 'Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?', '1', 1, 36),
(38, 'A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\nvestida ou qual sensação não poderá faltar de jeito nenhum?', '1', 1, 37),
(39, 'Qual imagem gostaria de comunicar / Como você quer ser vista?', '1', 1, 38),
(40, 'O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\nespera aprender com esse trabalho?', '1', 1, 39),
(41, 'Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\nrespostas mantendo a identidade delas em sigilo.', '1', 1, 40),
(42, 'COMPLETE: Nessa consultoria de estilo eu me comprometo a...', '1', 1, 41),
(43, 'Faltou falar alguma coisa?', '1', 1, 42),
(44, 'O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e/ou parecer nessas ocasiões?', '1', 1, 5),
(45, 'Quais marcas de bolsa você mais identifica? e por que?', '1', 1, 23),
(46, 'Como é a sua personalidade?', '1', 1, 31),
(47, 'O que você acha bonito', '1', 1, 32),
(48, 'Gosta de seguir tendências de moda? isso é importante pra você?', '1', 1, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `coloracao`
--

CREATE TABLE `coloracao` (
  `id_coloracao` int(11) NOT NULL,
  `col_contraste` varchar(45) DEFAULT NULL,
  `col_dimensao` varchar(45) DEFAULT NULL,
  `id_cartela` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `col_temperatura` varchar(45) DEFAULT NULL,
  `col_intensidade` varchar(45) DEFAULT NULL,
  `col_profundidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `coloracao`
--

INSERT INTO `coloracao` (`id_coloracao`, `col_contraste`, `col_dimensao`, `id_cartela`, `id_user`, `col_temperatura`, `col_intensidade`, `col_profundidade`) VALUES
(1, 'Baixo Claro/Escuro', NULL, 16, 1, 'Quente', 'Brilhante/Vivo', 'Claro'),
(2, 'Médio', NULL, 16, 2, 'Quente', 'Suave/Opaca', 'Escuro'),
(3, 'Baixo Claro/Escuro', NULL, 1, 15, 'Frio', 'Suave/Opaca', 'Escuro'),
(4, 'Médio/Alto', NULL, 16, 20, 'Quente', 'Suave/Opaca', 'Escuro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios_etapa`
--

CREATE TABLE `comentarios_etapa` (
  `cme_id` int(11) NOT NULL,
  `comentario` longtext,
  `id_etapa` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios_etapa`
--

INSERT INTO `comentarios_etapa` (`cme_id`, `comentario`, `id_etapa`, `id_user`, `id_company`, `created_at`, `created_by`) VALUES
(5, 'sdacasdcsadcs\nadc\nsadc\nsad', 2, 2, 1, NULL, NULL),
(6, 'csdcasdcc\nascd\nacscsadc\nasdc\nsad\ncs\nadc\nsd\nc\nsd\nc\nsadc\nas', 2, 5, 1, NULL, NULL),
(7, 'cwedcsdcsdacsda\ncsd\nc\nsd\ncds', 2, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(1, 'Stephani Varella');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrevista`
--

CREATE TABLE `entrevista` (
  `id_entrevista` int(11) NOT NULL,
  `perguntas` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entrevista`
--

INSERT INTO `entrevista` (`id_entrevista`, `perguntas`) VALUES
(15, '{\"Com o que você trabalha?\":\"\",\"Como é o seu ambiente de trabalho?\":\"\",\"Para o que você costuma a pensar em como se vestir?\":\"\",\"Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\\r\\numa situação\\/ocasião, liste e explique elas.)\":\"\",\"O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e\\/ou\\r\\nparecer nessas ocasiões?\":\"\",\"O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e\\/ou\\r\\nparecer nessas ocasiões?\":\"\",\"Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\\r\\n(capricha na resposta em, quero saber todos os detalhes!).\":\"\",\"Quanto você calça (tamanho BR)?\":\"\",\"Quantos pares de sapatos você possui atualmente?\":\"\",\"Quais marcas de Sapato você costuma comprar?\":\"\",\"Quais marcas de Sapato estão no seu sonho de consumo?\":\"\",\"De que tipo de sapato você mais gosta? E de que tipo você menos gosta?\":\"\",\"Qual é a sua numeração para roupa?\":\"\",\"Costuma comprar em quais lojas\\/marcas? E por que você compra nelas?\":\"\",\"Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?\":\"\",\"Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\\r\\nque em cada uma delas te chama mais atenção?\":\"\",\"Quais são suas cores favoritas e que mais usa?\":\"\",\"Que tipo de tecido você prefere?\":\"\",\"Gosta de estampa? Cite um exemplo de estampa que você usa\\/usaria.\":\"\",\"Como você gosta do caimento das suas roupas?\":\"\",\"Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\\r\\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\\r\\ngosta!\":\"\",\"Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas\\/pois\\/ floral OU não\\r\\ngosta de nenhum..)\":\"\",\"Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\\r\\n6 meses, 1 vez ao ano)\":\"\",\"Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\\r\\nlonga ou não)\":\"\",\"Quais marcas de bolsa você mais identifica? e por que?\":\"\",\"Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?\":\"\",\"Me fala quais marcas você não gosta?\":\"\",\"Costuma maquiar-se?\":\"\",\"Gosta de fazer penteados diferentes no dia a dia?\":\"\",\"Quais características físicas você mais gosta em você? E quais você menos gosta?\":\"\",\"Você acredita que suas roupas estão em harmonia com seu tipo físico?\":\"\",\"E com a sua personalidade?\":\"\",\"Como é o seu dia a dia?\":\"\",\"Como é a sua personalidade?\":\"\",\"O que você acha bonito?\":\"\",\"Quais traços da sua personalidade você mais gosta? E os que menos gosta?\":\"\",\"Você se incomoda quando está vestindo algo muito diferente do que os outros estão\\r\\nvestindo em um mesmo ambiente?\":\"\",\"Gosta de seguir tendências de moda? isso é importante pra você?\":\"\",\"Como você acha que as pessoas te percebem pela maneira como se veste?\":\"\",\"Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?\":\"\",\"A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\\r\\nvestida ou qual sensação não poderá faltar de jeito nenhum?\":\"\",\"Qual imagem gostaria de comunicar \\/ Como você quer ser vista?\":\"\",\"O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\\r\\nespera aprender com esse trabalho?\":\"\",\"Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\\r\\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\\r\\nrespostas mantendo a identidade delas em sigilo.\":\"\",\"COMPLETE: Nessa consultoria de estilo eu me comprometo a...\":\"\",\"Faltou falar alguma coisa?\":\"\"}'),
(28, '{\"Com o que você trabalha?\":\"Médica centro cirúrgico \",\"Como é o seu ambiente de trabalho?\":\"Uniforme privativo\",\"Para o que você costuma a pensar em como se vestir?\":\"Chegar e sair do meu ambiente de trabalho\\r\\nPrincipalmente sair com meus amigos ou sair pra jantar com meu marido, e qualquer festa que eu tenha\\r\\n\",\"Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\\r\\numa situação\\/ocasião, liste e explique elas.)\":\"Muita dificuldade em escolher roupa social pra ir trabalhar em um dos hospitais que trabalho\\r\\nSair com meus amigos pra ir em bar, festa de aniversário ou casamento\\r\\nSair pra jantar com meu marido\\r\\n\",\"O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e\\/ou\\r\\nparecer nessas ocasiões?\":\"Costumo vestir calça social e blusinha. Gostaria de estar de saia, com camisa. Gostaria de parecer elegante e de me sentir confortável,  bem com a roupa\",\"O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e\\/ou\\r\\nparecer nessas ocasiões?\":\"Sempre estou de calça jeans e uma blusinha . Gostaria de estar de vestido, calças diferentes. Gostaria de me sentir descolada e arrumada\",\"Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\\r\\n(capricha na resposta em, quero saber todos os detalhes!).\":\"Formal: gostaria de saber usar uma saia, com camisa ou uma blusa arrumada, colocar um blaiser. Estar de salto e acessórios como brinco, colar , pulseira e relógio.  Só sei usar brinco\\r\\n\\r\\nInformal: gostaria de usar saia midi ou calças coloridas, uma blusinha mail legal, colorida, sandália,  colar. Ou vestido mais despojado\\r\\n\",\"Quanto você calça (tamanho BR)?\":\"36\",\"Quantos pares de sapatos você possui atualmente?\":\"Muitos, acho que mais de 100\\r\\nAgora acho que 30\\r\\n\",\"Quais marcas de Sapato você costuma comprar?\":\"Não tenho marca específica de nada. Compro o que gosto. Mas vou muito na capodarte\",\"Quais marcas de Sapato estão no seu sonho de consumo?\":\"Nenhuma. Gosto do que acho bonito no pé \",\"De que tipo de sapato você mais gosta? E de que tipo você menos gosta?\":\"Uso muita sapatilha. Não gosto porque não sei usar meia pata\",\"Qual é a sua numeração para roupa?\":\"Blusas P ou M\\r\\nCalça 38\\r\\n\",\"Costuma comprar em quais lojas\\/marcas? E por que você compra nelas?\":\"Não ligo muito pra marcas. \\r\\nFaz 6 meses  que não compro roupas\\r\\n\",\"Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?\":\"Acho que nas mesmas. Não sei comprar roupas, olhar opções diferentes. Gostaria de aprender isso\",\"Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\\r\\nque em cada uma delas te chama mais atenção?\":\"Marina Ruy Barbosa. Acho ela classica e tem bom gosto\\r\\nMarcela tranchessi combina cores de um jeito que gosto e não usa roupas decotadas ou muito curtas e esta sempre elegante\\r\\n\",\"Quais são suas cores favoritas e que mais usa?\":\"Uso muito cinza e azul marinho. Além do preto\\r\\nRoupas da minha cartela outono escuro\\r\\n\",\"Que tipo de tecido você prefere?\":\"Algodão...Mas também não tenho muito conhecimento\",\"Gosta de estampa? Cite um exemplo de estampa que você usa\\/usaria.\":\"Gosto. Nenhuma específica, só uso com fundo mais discreto , cores escuras\\r\\n\\r\\n\",\"Como você gosta do caimento das suas roupas?\":\"Não gosto de nada muito marcado no corpo. Uso roupas mais soltinhas\",\"Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\\r\\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\\r\\ngosta!\":\"Não gosto muito de alcinha, decotes profundos, que marcam muito o corpo ou muito curtos\",\"Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas\\/pois\\/ floral OU não\\r\\ngosta de nenhum..)\":\"Uso bem pouco disso. Prefiro cores únicas.  Mas é uma das coisas que e quero mudar\",\"Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\\r\\n6 meses, 1 vez ao ano)\":\"Compro quando vejo algum que me chame atenção , as vezes acabo nem usando. Fica parado no armario\",\"Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\\r\\nlonga ou não)\":\"Gosto de bolsa pra usar de lado, média, quadrada. É pra sair pequenas e transpassadas. Bolsa seria uma coisa que se tivesse muito dinheiro gastaria. \",\"Quais marcas de bolsa você mais identifica? e por que?\":\"Michael kors, fendi, balenciaga \",\"Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?\":\"Gosto de brinco curto. Tenho alguns longos mas nunca consigo usar.\",\"Me fala quais marcas você não gosta?\":\"Não sei te responder\",\"Costuma maquiar-se?\":\"Sim. Nada profissional , mas não saio de casa sem base e rimel\",\"Gosta de fazer penteados diferentes no dia a dia?\":\"Não. Tô sempre de cabelo solto ou rabinho de cavalo. Gostaria de mudar\",\"Quais características físicas você mais gosta em você? E quais você menos gosta?\":\"Gosto do meu nariz e cor do cabelo. Odeio minha barriga e meus peitos que acho grandes\",\"Você acredita que suas roupas estão em harmonia com seu tipo físico?\":\"não acho. Por isso estou te procurando. Gostaria de me sentir arrumada, elegante e bem com minhas roupas\",\"E com a sua personalidade?\":\"Acho que sim. Bem discreta, passar desapercebida\",\"Como é o seu dia a dia?\":\"Super corrido. Passo o dia todo no trabalho, hospital, ambiente super pesado e chego em casa tarde pq pego muito trânsito. Quase sem tempo pra mim\",\"Como é a sua personalidade?\":\"Acho que sou tímida pra aparecer, mas gosto de fazer amigos, sair e amo mais que tudo viajar\",\"O que você acha bonito?\":\"Em roupas gosto de calças leves, saia midi e vestido. Era como gostaria de me vestir\",\"Quais traços da sua personalidade você mais gosta? E os que menos gosta?\":\"Gosto do meu espírito aventureira. Da minha certa vergonha de ousar\",\"Você se incomoda quando está vestindo algo muito diferente do que os outros estão\\r\\nvestindo em um mesmo ambiente?\":\"Totalmente. Morro de vergonha, odeio aparecer\",\"Gosta de seguir tendências de moda? isso é importante pra você?\":\"Olho bastante blogueira no Instagram.  As vezes compro pra tentar copiar, sempre acabam ficando no armário e nunca uso.\\r\\nNão é importante não. Gostaria de me sentir elegante e bem com as roupas\",\"Como você acha que as pessoas te percebem pela maneira como se veste?\":\"Que sou super básica e não ligo nada pra me arrumar\",\"Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?\":\"Levo em consideração o que vejo na mídia e tento copiar. Mas muito com me vejo no espelho e opinião do meu marido\",\"A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\\r\\nvestida ou qual sensação não poderá faltar de jeito nenhum?\":\"De ser uma pessoa arrumada, elegante , que gosta de se vestir\",\"Qual imagem gostaria de comunicar \\/ Como você quer ser vista?\":\"Quero ser elegante\",\"O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\\r\\nespera aprender com esse trabalho?\":\"Espero usar peças e combinações que acho bonito nos outros e não consigo usar e saber onde comprar essas peças \",\"Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\\r\\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\\r\\nrespostas mantendo a identidade delas em sigilo.\":\"Gostaria sim. Só não sei se 8 pessoas \",\"COMPLETE: Nessa consultoria de estilo eu me comprometo a...\":\"Me dedicar pra conseguir meu objetivo\",\"Faltou falar alguma coisa?\":\"Acho que não \"}'),
(29, '{\"Com o que você trabalha?\":\"\",\"Como é o seu ambiente de trabalho?\":\"\",\"Para o que você costuma a pensar em como se vestir?\":\"\",\"Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\\numa situação\\/ocasião, liste e explique elas.)\":\"\",\"O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e\\/ou\\nparecer nessas ocasiões?\":\"\",\"Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\\n(capricha na resposta em, quero saber todos os detalhes!).\":\"\",\"Quanto você calça (tamanho BR)?\":\"\",\"Quantos pares de sapatos você possui atualmente?\":\"\",\"Quais marcas de Sapato você costuma comprar?\":\"\",\"Quais marcas de Sapato estão no seu sonho de consumo?\":\"\",\"De que tipo de sapato você mais gosta? E de que tipo você menos gosta?\":\"\",\"Qual é a sua numeração para roupa?\":\"\",\"Costuma comprar em quais lojas\\/marcas? E por que você compra nelas?\":\"\",\"Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?\":\"\",\"Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\\nque em cada uma delas te chama mais atenção?\":\"\",\"Quais são suas cores favoritas e que mais usa?\":\"\",\"Que tipo de tecido você prefere?\":\"\",\"Gosta de estampa? Cite um exemplo de estampa que você usa\\/usaria.\":\"\",\"Como você gosta do caimento das suas roupas?\":\"\",\"Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\\ngosta!\":\"\",\"Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas\\/pois\\/ floral OU não\\ngosta de nenhum..)\":\"\",\"Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\\n6 meses, 1 vez ao ano)\":\"\",\"Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\\nlonga ou não)\":\"\",\"Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?\":\"\",\"Me fala quais marcas você não gosta?\":\"\",\"Costuma maquiar-se?\":\"\",\"Gosta de fazer penteados diferentes no dia a dia?\":\"\",\"Quais características físicas você mais gosta em você? E quais você menos gosta?\":\"\",\"Você acredita que suas roupas estão em harmonia com seu tipo físico?\":\"\",\"E com a sua personalidade?\":\"\",\"Como é o seu dia a dia?\":\"\",\"Quais traços da sua personalidade você mais gosta? E os que menos gosta?\":\"\",\"Você se incomoda quando está vestindo algo muito diferente do que os outros estão\\nvestindo em um mesmo ambiente?\":\"\",\"Como você acha que as pessoas te percebem pela maneira como se veste?\":\"\",\"Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?\":\"\",\"A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\\nvestida ou qual sensação não poderá faltar de jeito nenhum?\":\"\",\"Qual imagem gostaria de comunicar \\/ Como você quer ser vista?\":\"\",\"O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\\nespera aprender com esse trabalho?\":\"\",\"Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\\nrespostas mantendo a identidade delas em sigilo.\":\"\",\"COMPLETE: Nessa consultoria de estilo eu me comprometo a...\":\"\",\"Faltou falar alguma coisa?\":\"\",\"O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e\\/ou parecer nessas ocasiões?\":\"\",\"Quais marcas de bolsa você mais identifica? e por que?\":\"\",\"Como é a sua personalidade?\":\"\",\"O que você acha bonito\":\"\",\"Gosta de seguir tendências de moda? isso é importante pra você?\":\"\"}'),
(30, '{\"Com o que você trabalha?\":\"\",\"Como é o seu ambiente de trabalho?\":\"\",\"Para o que você costuma a pensar em como se vestir?\":\"\",\"Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\\numa situação\\/ocasião, liste e explique elas.)\":\"\",\"O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e\\/ou\\nparecer nessas ocasiões?\":\"\",\"Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\\n(capricha na resposta em, quero saber todos os detalhes!).\":\"\",\"Quanto você calça (tamanho BR)?\":\"\",\"Quantos pares de sapatos você possui atualmente?\":\"\",\"Quais marcas de Sapato você costuma comprar?\":\"\",\"Quais marcas de Sapato estão no seu sonho de consumo?\":\"\",\"De que tipo de sapato você mais gosta? E de que tipo você menos gosta?\":\"\",\"Qual é a sua numeração para roupa?\":\"\",\"Costuma comprar em quais lojas\\/marcas? E por que você compra nelas?\":\"\",\"Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?\":\"\",\"Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\\nque em cada uma delas te chama mais atenção?\":\"\",\"Quais são suas cores favoritas e que mais usa?\":\"\",\"Que tipo de tecido você prefere?\":\"\",\"Gosta de estampa? Cite um exemplo de estampa que você usa\\/usaria.\":\"\",\"Como você gosta do caimento das suas roupas?\":\"\",\"Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\\ngosta!\":\"\",\"Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas\\/pois\\/ floral OU não\\ngosta de nenhum..)\":\"\",\"Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\\n6 meses, 1 vez ao ano)\":\"\",\"Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\\nlonga ou não)\":\"\",\"Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?\":\"\",\"Me fala quais marcas você não gosta?\":\"\",\"Costuma maquiar-se?\":\"\",\"Gosta de fazer penteados diferentes no dia a dia?\":\"\",\"Quais características físicas você mais gosta em você? E quais você menos gosta?\":\"\",\"Você acredita que suas roupas estão em harmonia com seu tipo físico?\":\"\",\"E com a sua personalidade?\":\"\",\"Como é o seu dia a dia?\":\"\",\"Quais traços da sua personalidade você mais gosta? E os que menos gosta?\":\"\",\"Você se incomoda quando está vestindo algo muito diferente do que os outros estão\\nvestindo em um mesmo ambiente?\":\"\",\"Como você acha que as pessoas te percebem pela maneira como se veste?\":\"\",\"Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?\":\"\",\"A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\\nvestida ou qual sensação não poderá faltar de jeito nenhum?\":\"\",\"Qual imagem gostaria de comunicar \\/ Como você quer ser vista?\":\"\",\"O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\\nespera aprender com esse trabalho?\":\"\",\"Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\\nrespostas mantendo a identidade delas em sigilo.\":\"\",\"COMPLETE: Nessa consultoria de estilo eu me comprometo a...\":\"\",\"Faltou falar alguma coisa?\":\"\",\"O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e\\/ou parecer nessas ocasiões?\":\"\",\"Quais marcas de bolsa você mais identifica? e por que?\":\"\",\"Como é a sua personalidade?\":\"\",\"O que você acha bonito\":\"\",\"Gosta de seguir tendências de moda? isso é importante pra você?\":\"\"}'),
(31, '{\"Com o que você trabalha?\":\"\",\"Como é o seu ambiente de trabalho?\":\"\",\"Para o que você costuma a pensar em como se vestir?\":\"\",\"Em qual situação, você tem mais dificuldade de escolher suas roupas? (se tiver mais de\\numa situação\\/ocasião, liste e explique elas.)\":\"\",\"O que você costuma vestir em ambientes formais? Como você gostaria de se sentir e\\/ou\\nparecer nessas ocasiões?\":\"\",\"Descreva um look ideal para o ambiente informal e outro look para o ambiente formal\\n(capricha na resposta em, quero saber todos os detalhes!).\":\"\",\"Quanto você calça (tamanho BR)?\":\"\",\"Quantos pares de sapatos você possui atualmente?\":\"\",\"Quais marcas de Sapato você costuma comprar?\":\"\",\"Quais marcas de Sapato estão no seu sonho de consumo?\":\"\",\"De que tipo de sapato você mais gosta? E de que tipo você menos gosta?\":\"\",\"Qual é a sua numeração para roupa?\":\"\",\"Costuma comprar em quais lojas\\/marcas? E por que você compra nelas?\":\"\",\"Se você tivesse todo o dinheiro do mundo, em quais lojas você faria compras?\":\"\",\"Quais personalidades famosas você admira pelo estilo e pela maneira de se vestir? O\\nque em cada uma delas te chama mais atenção?\":\"\",\"Quais são suas cores favoritas e que mais usa?\":\"\",\"Que tipo de tecido você prefere?\":\"\",\"Gosta de estampa? Cite um exemplo de estampa que você usa\\/usaria.\":\"\",\"Como você gosta do caimento das suas roupas?\":\"\",\"Você tem alguma restrição a quaisquer peças de roupas ou a algum detalhe? (tipo de\\nblusa, calça, modelo de manga, estampa ou textura) Fale aqui sobre o que você não\\ngosta!\":\"\",\"Qual é o seu padrão favorito para vestir? (xadrez, listras, bolinhas\\/pois\\/ floral OU não\\ngosta de nenhum..)\":\"\",\"Com que frequência você compra sapatos? (várias vezes ao mês, 1 vez por mês, a cada\\n6 meses, 1 vez ao ano)\":\"\",\"Qual é o tipo de bolsa que você mais gosta? (descreva o modelo, tamanho, cor, se é\\nlonga ou não)\":\"\",\"Que estilo de acessórios você usa? Que estilo ou tipo você nunca usaria?\":\"\",\"Me fala quais marcas você não gosta?\":\"\",\"Costuma maquiar-se?\":\"\",\"Gosta de fazer penteados diferentes no dia a dia?\":\"\",\"Quais características físicas você mais gosta em você? E quais você menos gosta?\":\"\",\"Você acredita que suas roupas estão em harmonia com seu tipo físico?\":\"\",\"E com a sua personalidade?\":\"\",\"Como é o seu dia a dia?\":\"\",\"Quais traços da sua personalidade você mais gosta? E os que menos gosta?\":\"\",\"Você se incomoda quando está vestindo algo muito diferente do que os outros estão\\nvestindo em um mesmo ambiente?\":\"\",\"Como você acha que as pessoas te percebem pela maneira como se veste?\":\"\",\"Atualmente, quando você se veste, que fatores ou pessoas você leva em consideração?\":\"\",\"A partir deste trabalho, como você gostaria de se sentir em relação ao modo que está\\nvestida ou qual sensação não poderá faltar de jeito nenhum?\":\"\",\"Qual imagem gostaria de comunicar \\/ Como você quer ser vista?\":\"\",\"O que te motivou na hora de procurar a SV Consultoria? O que de mais importante você\\nespera aprender com esse trabalho?\":\"\",\"Você gostaria de saber como as pessoas ao seu redor te percebem? Se sim, enviaremos\\num questionário para 8 pessoas (que você escolher) e compartilharei com você as\\nrespostas mantendo a identidade delas em sigilo.\":\"\",\"COMPLETE: Nessa consultoria de estilo eu me comprometo a...\":\"\",\"Faltou falar alguma coisa?\":\"\",\"O que você costuma vestir em ambientes informais? Como você gostaria de se sentir e\\/ou parecer nessas ocasiões?\":\"\",\"Quais marcas de bolsa você mais identifica? e por que?\":\"\",\"Como é a sua personalidade?\":\"\",\"O que você acha bonito\":\"\",\"Gosta de seguir tendências de moda? isso é importante pra você?\":\"\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapas`
--

CREATE TABLE `etapas` (
  `id_etapa` int(11) NOT NULL,
  `etp_nome` varchar(255) DEFAULT NULL,
  `etp_price` varchar(45) DEFAULT NULL,
  `etp_type` varchar(45) DEFAULT NULL,
  `etp_hours` varchar(45) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `etapas`
--

INSERT INTO `etapas` (`id_etapa`, `etp_nome`, `etp_price`, `etp_type`, `etp_hours`, `id_company`) VALUES
(1, 'Entrevista', NULL, '1', NULL, 1),
(2, 'Exercício de Imagens', NULL, '1', NULL, 1),
(3, 'Questionário ', NULL, '1', NULL, 1),
(4, 'Análise de Silhueta', NULL, '1', NULL, 1),
(5, 'Teste de Coloração Pessoal', '1500', '1', '3', 1),
(6, 'Visita ao Guarda-Roupa ', '1500', '1', NULL, 1),
(7, 'Revitalização do Guarda-roupa ', NULL, '1', NULL, 1),
(8, 'Experiência em Lojas', NULL, '1', NULL, 1),
(9, 'Montagem de Looks', NULL, '1', NULL, 1),
(10, 'Mala Planejada', NULL, '1', NULL, 1),
(11, 'Coloração + Closet', '1500', '2', '3', 1),
(12, 'Revitalização + Looks', '2700', '2', '6', 1),
(13, 'Closet ou Looks', '1500', '2', '3', 1),
(14, 'Análise + Questionário + Dossiê', '2700', '2', '6', 1),
(15, 'Coloração + Revitalização + Closet', '3300', '2', '7', 1),
(16, 'Mala Inteligente', '1500', '2', '3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `img_url` varchar(555) DEFAULT NULL,
  `img_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id_image`, `img_url`, `img_type`) VALUES
(31, '3cf240e82b3ddcb47a1aa1d4fccb4358.png', 'inLike'),
(32, '4b0d274205df90be0b66ed957637d869.png', 'notUsed'),
(33, '2add0d3f329dc62215d180cd3f4eb019.png', 'inUsed');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `params` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `id_usuario`, `params`, `id_company`, `id_cliente`) VALUES
(1, 1, '2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 1, 0),
(18, 0, '1,2,3', 1, 73),
(19, 0, '2', 1, 74),
(20, 0, '2', 1, 75),
(21, 0, '1', 1, 76),
(22, 0, '1', 1, 77),
(23, 0, '1', 1, 78),
(24, 0, '1', 1, 79),
(25, 0, '1', 1, 80),
(26, 0, '1', 1, 81),
(27, 0, '1', 1, 82),
(28, 0, '1', 1, 83),
(29, 0, '1', 1, 84),
(30, 0, '1,2,3', 1, 1),
(31, 0, '1,2,3', 1, 3),
(32, 0, '1,2,3', 1, 5),
(33, 0, '1', 1, 6),
(34, 0, '0', 1, 7),
(35, 0, '1', 1, 8),
(36, 0, '1', 1, 9),
(37, 0, '1', 1, 10),
(38, 0, '1', 1, 11),
(39, 0, '1', 1, 12),
(40, 0, '1', 1, 13),
(41, 0, '1', 1, 14),
(42, 0, '1,2,3', 1, 15),
(43, 0, '1', 1, 16),
(44, 0, '1', 1, 17),
(45, 0, '1', 1, 18),
(46, 0, '1', 1, 19),
(47, 0, '1,2,3,4', 1, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_params`
--

CREATE TABLE `permission_params` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_company` int(11) DEFAULT NULL,
  `type` varchar(1) COLLATE utf8_bin DEFAULT '0',
  `order` varchar(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `permission_params`
--

INSERT INTO `permission_params` (`id`, `name`, `id_company`, `type`, `order`) VALUES
(1, 'Geral', 1, '1', '1'),
(2, 'Exercicio De Imagem', 1, '1', '9'),
(3, 'Teste de Coloração Pessoal', 1, '1', '8'),
(4, 'Analise de Silhueta', 1, '1', '7'),
(5, 'Revitalização do Guarda-Roupa', 1, '1', '6'),
(6, 'Experiência em Lojas', 1, '1', '5'),
(7, 'Montagem de Looks', 1, '1', '4'),
(8, 'Mala Planejada', 1, '1', '3'),
(9, 'clientes_edit', 1, '0', ''),
(10, 'clientes_view', 1, '0', NULL),
(11, 'clientes_delete', 1, '0', NULL),
(12, 'clientes_add', 1, '0', NULL),
(13, 'dashboard_itens', 1, '0', NULL),
(14, 'config_view', 1, '0', NULL),
(15, 'calendario_view', 1, '0', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `login` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `usr_info` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `user_photo_url` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `id_group` int(11) NOT NULL,
  `id_company` int(11) DEFAULT NULL,
  `usu_ativo` varchar(45) COLLATE utf8_bin DEFAULT '1',
  `id_cliente` int(11) DEFAULT NULL,
  `coockie` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `usr_info`, `user_photo_url`, `id_group`, `id_company`, `usu_ativo`, `id_cliente`, `coockie`, `name`) VALUES
(1, 'oi@stephanivarella.com', 'gabriel', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'https://instagram.fcgh9-1.fna.fbcdn.net/vp/8c4c8fe67887fea6766aab41774ae2c1/5E741D44/t51.2885-19/s150x150/35576029_419296248572460_6925040865312243712_n.jpg?_nc_ht=instagram.fcgh9-1.fna.fbcdn.net', 0, 1, '1', 0, NULL, 'Stephani Varella'),
(16, 'teste@teste', NULL, '202cb962ac59075b964b07152d234b70', 'cliente', NULL, 0, 1, '1', 17, NULL, 'teste1 teste'),
(17, 'lulysales@hotmail.com', NULL, 'ba02f61caefb10469bbe142783be7337', 'cliente', NULL, 0, 1, '1', 18, NULL, 'Luciana Sales Zanluchi'),
(18, 'teste', NULL, 'd41d8cd98f00b204e9800998ecf8427e', 'cliente', NULL, 0, 1, '1', 19, NULL, 'teste teste'),
(19, 'Ju_gaeta@hotmail.com', NULL, '53f174740c9ce95497adf466a5d5839d', 'cliente', NULL, 0, 1, '1', 20, NULL, 'Juliana Fabbri Gaeta Pisciotti '),
(20, 'gabriel@gabriel', '', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, 0, 2, '1', NULL, NULL, 'gabriel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartela`
--
ALTER TABLE `cartela`
  ADD PRIMARY KEY (`id_cartela`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `cliente_endereco`
--
ALTER TABLE `cliente_endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Indexes for table `client_image`
--
ALTER TABLE `client_image`
  ADD PRIMARY KEY (`id_cli_image`);

--
-- Indexes for table `client_perguntas`
--
ALTER TABLE `client_perguntas`
  ADD PRIMARY KEY (`id_cli_pe`);

--
-- Indexes for table `coloracao`
--
ALTER TABLE `coloracao`
  ADD PRIMARY KEY (`id_coloracao`);

--
-- Indexes for table `comentarios_etapa`
--
ALTER TABLE `comentarios_etapa`
  ADD PRIMARY KEY (`cme_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id_entrevista`);

--
-- Indexes for table `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id_etapa`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `params_idx` (`params`);

--
-- Indexes for table `permission_params`
--
ALTER TABLE `permission_params`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_idx` (`id_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartela`
--
ALTER TABLE `cartela`
  MODIFY `id_cartela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cliente_endereco`
--
ALTER TABLE `cliente_endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `client_image`
--
ALTER TABLE `client_image`
  MODIFY `id_cli_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `client_perguntas`
--
ALTER TABLE `client_perguntas`
  MODIFY `id_cli_pe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `coloracao`
--
ALTER TABLE `coloracao`
  MODIFY `id_coloracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comentarios_etapa`
--
ALTER TABLE `comentarios_etapa`
  MODIFY `cme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id_entrevista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id_etapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `permission_params`
--
ALTER TABLE `permission_params`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
