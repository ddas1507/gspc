-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2.1
-- http://www.phpmyadmin.net
--
-- Máquina: 186.202.152.38
-- Data de Criação: 05-Jun-2013 às 21:33
-- Versão do servidor: 5.1.68
-- versão do PHP: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `spconsult`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
  `CLI_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_NOME` varchar(100) DEFAULT NULL,
  `CLI_RAZAOSOCIAL` varchar(100) DEFAULT NULL,
  `CLI_CPF` varchar(30) DEFAULT NULL,
  `CLI_CNPJ` varchar(30) DEFAULT NULL,
  `CLI_INSCRICAOESTADUAL` varchar(30) DEFAULT NULL,
  `CLI_CEP` char(9) DEFAULT NULL,
  `CLI_ENDERECO` varchar(50) DEFAULT NULL,
  `CLI_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `CLI_BAIRRO` varchar(50) DEFAULT NULL,
  `CLI_CIDADE` varchar(50) DEFAULT NULL,
  `CLI_NUMERO` char(10) DEFAULT NULL,
  `CLI_UF` char(2) DEFAULT NULL,
  `CLI_TELFIXO` varchar(15) DEFAULT NULL,
  `CLI_TELNOME` varchar(50) DEFAULT NULL,
  `CLI_TELCEL` varchar(15) DEFAULT NULL,
  `CLI_IMG` varchar(50) DEFAULT NULL,
  `CLI_OBS` varchar(50) DEFAULT NULL,
  `CLI_POST` varchar(30) DEFAULT NULL,
  `CLI_DTCAD` varchar(30) DEFAULT NULL,
  `CLI_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`CLI_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`CLI_CODIGO`, `CLI_NOME`, `CLI_RAZAOSOCIAL`, `CLI_CPF`, `CLI_CNPJ`, `CLI_INSCRICAOESTADUAL`, `CLI_CEP`, `CLI_ENDERECO`, `CLI_COMPLEMENTO`, `CLI_BAIRRO`, `CLI_CIDADE`, `CLI_NUMERO`, `CLI_UF`, `CLI_TELFIXO`, `CLI_TELNOME`, `CLI_TELCEL`, `CLI_IMG`, `CLI_OBS`, `CLI_POST`, `CLI_DTCAD`, `CLI_DTALT`) VALUES
(18, 'Carrefour ', 'Carrefour ComÃ©rcio e Industria Ltda', NULL, '45.543.915/0001-81', '', '05690-000', 'Rua: George Eastman', 'Km17', 'Vila Tramontano', 'SÃ£o Paulo', '213', 'SP', '', 'Rafaella Rangel Forgiarini', '', 'CARREFOUR.jpg', '', 'Victor Anselmo', '17/05/2013 - 11:36:48', '20/05/2013 - 16:48:53'),
(54, 'RaÃ­zen ', 'RaÃ­zen Combustiveis S/A', NULL, '33.453.598/0001-23', '', '22640-102', 'Av. das AmÃ©ricas', '', 'Barra da Tijuca', 'Rio de Janeiro', '4200', 'RJ', '', '', '', 'RAIZEN 2.jpg', '', 'Renata Siqueira de Oliveira', '03/06/2013 - 12:06:19', '03/06/2013 - 13:57:22'),
(55, 'ItaÃº', 'ItaÃº Unibanco S/A', NULL, '60.701.190/0001-04', '', '04344-902', 'PraÃ§a: Egydio de Souza Aranha, 100', '', 'Parque Jabaquara', 'SÃ£o Paulo', '100', 'SP', '', '', '', 'ITAU UNIBANCO.jpg', '', 'Renata Siqueira de Oliveira', '03/06/2013 - 17:13:41', '03/06/2013 - 17:14:47'),
(52, 'AtacadÃ£o ', 'AtacadÃ£o DistribuiÃ§Ã£o Comercio  e Industria Ltda', NULL, '75.315.333/0001-09', '', '02170-000', 'Avenida: Morvan Dias de Figueiredo', '', 'Vila Maria', 'SÃ£o Paulo', '6169', 'SP', '', 'Caio Sales', '', 'atacadao 2.png', '', 'Renata Siqueira de Oliveira', '20/05/2013 - 09:56:20', '03/06/2013 - 16:52:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imagens`
--

CREATE TABLE IF NOT EXISTS `tbl_imagens` (
  `IMG_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `IMG_DESCRICAO` varchar(50) NOT NULL,
  `IMO_CODIGO` int(11) NOT NULL,
  `IMG_DTCAD` varchar(30) DEFAULT NULL,
  `IMG_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IMG_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `tbl_imagens`
--

INSERT INTO `tbl_imagens` (`IMG_CODIGO`, `IMG_DESCRICAO`, `IMO_CODIGO`, `IMG_DTCAD`, `IMG_DTALT`) VALUES
(31, 'amarelo.jpg', 3, '08/05/2013 - 12:20:27', NULL),
(16, 'Down.png', 0, '08/05/2013 - 01:26:46', NULL),
(23, 'amarelo.jpg', 0, '08/05/2013 - 12:08:52', NULL),
(24, 'amarelo.jpg', 0, '08/05/2013 - 12:09:56', NULL),
(25, 'amarelo.jpg', 0, '08/05/2013 - 12:14:50', NULL),
(26, 'azul.jpg', 0, '08/05/2013 - 12:16:49', NULL),
(27, 'amarelo.jpg', 0, '08/05/2013 - 12:17:45', NULL),
(14, 'Down.png', 0, '08/05/2013 - 01:25:10', NULL),
(15, 'Down.png', 0, '08/05/2013 - 01:26:06', NULL),
(32, 'vermelho.jpg', 3, '08/05/2013 - 12:20:37', NULL),
(33, 'pink.jpg', 2, '08/05/2013 - 12:20:55', NULL),
(34, 'verde.jpg', 7, '08/05/2013 - 12:21:19', NULL),
(37, 'CARREFOUR.jpg', 0, '23/05/2013 - 03:27:37', NULL),
(38, 'CARREFOUR.jpg', 74, '23/05/2013 - 03:32:27', NULL),
(39, 'CARREFOUR.jpg', 74, '23/05/2013 - 03:32:39', NULL),
(40, 'CARREFOUR.jpg', 74, '23/05/2013 - 03:32:52', NULL),
(41, 'CARREFOUR.jpg', 74, '23/05/2013 - 03:33:00', NULL),
(42, 'BGU.png', 74, '29/05/2013 - 09:26:56', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imoveis`
--

CREATE TABLE IF NOT EXISTS `tbl_imoveis` (
  `IMO_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_CODIGO` int(11) NOT NULL,
  `CLI_NOME` varchar(50) NOT NULL,
  `IMO_REF` varchar(50) DEFAULT NULL,
  `IMO_INCRACCIR` varchar(50) DEFAULT NULL,
  `IMO_RFBITR` varchar(50) DEFAULT NULL,
  `IMO_NOME` varchar(50) DEFAULT NULL,
  `IMO_CEP` char(9) DEFAULT NULL,
  `IMO_ENDERECO` varchar(50) DEFAULT NULL,
  `IMO_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `IMO_BAIRRO` varchar(50) DEFAULT NULL,
  `IMO_CIDADE` varchar(50) DEFAULT NULL,
  `IMO_NUMERO` char(10) DEFAULT NULL,
  `IMO_TEL` varchar(15) DEFAULT NULL,
  `IMO_TELNOME` varchar(15) DEFAULT NULL,
  `IMO_UF` char(2) DEFAULT NULL,
  `IMO_OBS` varchar(255) DEFAULT NULL,
  `IMO_IMG` varchar(50) DEFAULT NULL,
  `IMO_IMG2` varchar(50) DEFAULT NULL,
  `IMO_DTCAD` varchar(30) DEFAULT NULL,
  `IMO_DTALT` varchar(30) DEFAULT NULL,
  `IMO_FAX` varchar(15) DEFAULT NULL,
  `IMO_EMAIL` varchar(50) DEFAULT NULL,
  `IMO_TERRENO_IPTU` varchar(30) DEFAULT NULL,
  `IMO_TERRENO_REGISTRO_IMOVEIS` varchar(30) DEFAULT NULL,
  `IMO_TERRENO_TOPOGRAFIA` varchar(30) DEFAULT NULL,
  `IMO_TERRENO_CONTIBUINTES` varchar(30) DEFAULT NULL,
  `IMO_AREA_CONSTRUIDA_PROJETO_APROVADO` varchar(30) DEFAULT NULL,
  `IMO_AREA_CONSTRUIDA_AVERBADA` varchar(30) DEFAULT NULL,
  `IMO_AREA_CONSTRUIDA_IPTU` varchar(30) DEFAULT NULL,
  `IMO_AREA_CONSTRUIDA_MATRICULA` varchar(30) DEFAULT NULL,
  `IMO_AREA_CONSTRUIDA_TOMB_HISTORICO` varchar(30) DEFAULT NULL,
  `IMO_TERRENO_USO` varchar(30) DEFAULT NULL,
  `IMO_CNPJFILIAL` varchar(50) DEFAULT NULL,
  `IMO_PROPIMOVEL` varchar(50) DEFAULT NULL,
  `IMO_LOCACAO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IMO_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Extraindo dados da tabela `tbl_imoveis`
--

INSERT INTO `tbl_imoveis` (`IMO_CODIGO`, `CLI_CODIGO`, `CLI_NOME`, `IMO_REF`, `IMO_INCRACCIR`, `IMO_RFBITR`, `IMO_NOME`, `IMO_CEP`, `IMO_ENDERECO`, `IMO_COMPLEMENTO`, `IMO_BAIRRO`, `IMO_CIDADE`, `IMO_NUMERO`, `IMO_TEL`, `IMO_TELNOME`, `IMO_UF`, `IMO_OBS`, `IMO_IMG`, `IMO_IMG2`, `IMO_DTCAD`, `IMO_DTALT`, `IMO_FAX`, `IMO_EMAIL`, `IMO_TERRENO_IPTU`, `IMO_TERRENO_REGISTRO_IMOVEIS`, `IMO_TERRENO_TOPOGRAFIA`, `IMO_TERRENO_CONTIBUINTES`, `IMO_AREA_CONSTRUIDA_PROJETO_APROVADO`, `IMO_AREA_CONSTRUIDA_AVERBADA`, `IMO_AREA_CONSTRUIDA_IPTU`, `IMO_AREA_CONSTRUIDA_MATRICULA`, `IMO_AREA_CONSTRUIDA_TOMB_HISTORICO`, `IMO_TERRENO_USO`, `IMO_CNPJFILIAL`, `IMO_PROPIMOVEL`, `IMO_LOCACAO`) VALUES
(59, 52, 'AtacadÃ£o', '0', '', '', 'Itaquera', '08260-000', 'Estrada do PÃªssego', '', 'Itaquera', 'SÃ£o Paulo', '100', '', 'Cassio Sales', 'SP', '', 'itaquera.jpg', NULL, '20/05/2013 - 17:35:43', '03/06/2013 - 14:01:17', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '75.315.333/0048-72', '', 'SIM'),
(60, 52, 'AtacadÃ£o', '0', '', '', 'GuarujÃ¡', '11435-000', 'Av. Tancredo Neves', '', 'Sitio da Gloria', 'GuarujÃ¡', '191', '', 'Caio Sales', 'SP', '', 'guaruja.jpg', NULL, '20/05/2013 - 17:47:36', '03/06/2013 - 16:48:58', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '75.315.333/0053-30', '', 'SIM'),
(53, 52, 'AtacadÃ£o', '0', '', '', 'Praia Grande', '11702-200', 'Avenida: Presidente Kennedy', '', 'Vila Guilhermina', 'Praia Grande', '1876', '', 'Cassio Sales', 'SP', '', 'praia grande.png', NULL, '20/05/2013 - 17:21:57', '27/05/2013 - 10:43:07', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '75.315.333/0017-76', '', 'SIM'),
(91, 52, 'AtacadÃ£o', '0', '', '', 'Santo Amaro', '02170-000', 'Avenida: Morvan Dias de Figueiredo', '', 'Vila Maria', 'SÃ£o Paulo', '380', '', '', 'SP', '', 'sto amaro.jpg', NULL, '21/05/2013 - 11:01:00', '21/05/2013 - 12:57:44', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '', '', 'Selecione...'),
(93, 18, 'Carrefour', 'BSA', '', '', 'Santo AndrÃ©', '09190-210', 'Av. Pereira Barreto', '', 'ParaÃ­so', 'Santo AndrÃ©', '290', '', '', 'SP', '', 'BSA.png', NULL, '22/05/2013 - 11:17:05', '22/05/2013 - 15:55:12', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0340-86', '', 'Selecione...'),
(62, 52, 'AtacadÃ£o', '0', '', '', 'Santos', '11085-202', 'Avenida: Nossa Senhora de FÃ¡tima', 'Esquina Boris Kauffman', 'Chico de Paula', 'Santos', '293', '', 'Cassio Sales', 'SP', '', 'santos.jpg', NULL, '20/05/2013 - 17:58:02', '21/05/2013 - 12:57:13', '', '', '', '', '', '', '', '', '', '', 'Sim', 'Rural', '75.315.333/0046-00', '', 'SIM'),
(65, 52, 'AtacadÃ£o', '0', '', '', 'SÃ£o Miguel', '08022-010', 'Avenida:SÃ£o Miguel Paulista', '', 'Chico de Paula', 'SÃ£o Paulo', '2501', '', 'Cassio Sales', 'SP', '', 'SAO MIGUEL.jpg', NULL, '21/05/2013 - 09:37:39', '21/05/2013 - 09:40:52', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '75.315.333/0035-58', '', 'Selecione...'),
(92, 18, 'Carrefour', 'BGU', '', '', 'Guarulhos', '07111-000', 'Avenida: Paulo Faccini', '', 'Macedo', 'Guarulhos', '214', '', '', 'SP', '', 'BGU.png', NULL, '22/05/2013 - 11:15:26', '22/05/2013 - 15:53:50', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0364-53', '', 'Selecione...'),
(66, 52, 'AtacadÃ£o', '0', '', '', 'Taipas', '02938-000', 'Avenida: Raimundo Pereira de MagalhÃ£es', '', 'Pirituba', 'SÃ£o Paulo', '11980', '', 'Cassio Sales', 'SP', '', 'taipas2.jpg', NULL, '21/05/2013 - 09:50:20', '21/05/2013 - 12:36:08', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '75.315.333/0006-13', '', 'Selecione...'),
(94, 18, 'Carrefour', 'CAP', '', '', 'Campinas-SÃ£o Geraldo', '13025-320', 'Av. JosÃ© de Souza Campos', '', 'CambuÃ­', 'Campinas', 'S/N', '', '', 'SP', '', 'CAP.png', NULL, '22/05/2013 - 11:19:19', '27/05/2013 - 10:57:33', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0129-45', '', 'Selecione...'),
(68, 18, 'Carrefour', 'SPH', '', '', 'Penha', '03653-000', 'Av. Amador Bueno da Veiga', '', 'Penha de FranÃ§a', 'SÃ£o Paulo', '2521', '', 'Rafaella Rangel', 'SP', '', 'penha.png', NULL, '21/05/2013 - 09:56:16', '27/05/2013 - 12:43:20', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0375-06', '', 'NAO'),
(69, 18, 'Carrefour', 'SPO', '', '', 'Raposo Tavares', '05576-000', 'Rodovia: Raposo Tavares', 'KM 17', 'Jardim Cambara', 'SÃ£o Paulo', 'S/N', '', 'Rafaella Rangel', 'SP', '', 'raposo.jpg', NULL, '21/05/2013 - 09:58:30', '22/05/2013 - 01:46:08', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0022-06', '', 'NAO'),
(70, 18, 'Carrefour', 'BTA', '', '', 'TatuapÃ©', '03076-000', 'Av. Salim Farah Maluf', '', 'TatuapÃ©', 'SÃ£o Paulo', 'S/N', '', 'Rafaella Rangel', 'SP', '', 'tatuape.jpg', NULL, '21/05/2013 - 09:59:49', '21/05/2013 - 17:24:58', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0357-24', '', 'NAO'),
(71, 18, 'Carrefour', 'ERE', '', '', 'RebouÃ§as', '05402-000', 'Av. RebouÃ§as', '', 'ButantÃ£', 'SÃ£o Paulo', '3970', '', 'Rafaella Rangel', 'SP', '', 'rebouÃ§as.jpg', NULL, '21/05/2013 - 10:01:08', '21/05/2013 - 17:21:36', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '62.545.579/0011-05', '', 'NAO'),
(72, 18, 'Carrefour', 'SPA', '', '', 'Anchieta', '04246-002', 'Via Anchieta', '', 'Ipiranga', 'SÃ£o Paulo', '3398', '', 'Rafaella Rangel', 'SP', '', 'anchieta 2.jpg', NULL, '21/05/2013 - 10:02:23', '22/05/2013 - 17:06:13', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0012-34', '', 'SIM'),
(73, 18, 'Carrefour', 'SPT', '', '', 'Tiete', '02063-902', 'Av. Dias de Figueiredo', '', 'Vila Guilherme', 'SÃ£o Paulo', '3177', '', 'Rafaella Rangel', 'SP', '', 'tiete.png', NULL, '21/05/2013 - 10:03:50', '22/05/2013 - 17:07:41', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0006-69', '', 'SIM'),
(74, 18, 'Carrefour', 'TTE', '', '', 'AnÃ¡lia Franco', '03342-000', 'Av. Regente FeijÃ³', '', 'Vila Regente FeijÃ³', 'SÃ£o Paulo', '1759', '', 'Rafaella Rangel', 'SP', '', 'analia franco.jpg', NULL, '21/05/2013 - 10:04:49', '22/05/2013 - 17:05:49', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0050-60', '', 'SIM'),
(75, 18, 'Carrefour', 'BTU', '', '', 'Tucuruvi', '02304-000', 'Av.Tucuruvi', '', 'Tucuruvi', 'SÃ£o Paulo', '248', '', 'Rafaella Rangel', 'SP', '', 'tucuruvi.jpg', NULL, '21/05/2013 - 10:05:59', '22/05/2013 - 17:07:21', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0343-29', '', 'SIM'),
(76, 18, 'Carrefour', 'SJA', '', '', 'Jabaquara', '04345-000', 'Av. Engenheiro George Corbisier', '', 'Jabaquara', 'SÃ£o Paulo', '273', '', 'Rafaella Rangel', 'SP', '', 'Jabaquara.jpg', NULL, '21/05/2013 - 10:07:25', '21/05/2013 - 17:03:58', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0376-97', '', 'NAO'),
(77, 18, 'Carrefour', 'CPR', '', '', 'Praia Grande', '11701-750', 'Av. Presidente Castelo Branco', '', 'Vila Guilhermina', 'Praia Grande', '1888', '', 'Rafaella Rangel', 'SP', '', 'praia grande.jpg', NULL, '21/05/2013 - 10:09:08', '21/05/2013 - 17:19:23', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0382-35', '', 'NAO'),
(78, 18, 'Carrefour', 'BSP', '', '', 'Santos-Praia mar', '11025-200', 'Rua Alexandre Martins', '', 'Aparecida', 'Santos', '80', '', 'Rafaella Rangel', 'SP', '', 'santos praia mar.jpg', NULL, '21/05/2013 - 10:12:36', '21/05/2013 - 17:23:40', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0372-63', '', 'NAO'),
(79, 18, 'Carrefour', 'EST', '', '', 'Santos-BoqueirÃ£o', '11045-906', 'Av.Conselheiro Nebias', '', 'BoqueirÃ£o', 'Santos', '802', '', 'Rafaella Rangel', '', '', 'boqueirao.png', NULL, '21/05/2013 - 10:16:04', '21/05/2013 - 17:23:07', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '62.545.579/0004-78', '', 'NAO'),
(80, 18, 'Carrefour', 'SAV', '', '', 'SÃ£o Vicente', '11380-001', 'Av. Prefeito JosÃ© Monteiro', '', 'Jardim IndependÃªncia', 'SÃ£o Vicente', '1045', '', 'Rafaella Rangel', 'SP', '', 's vicente sav.png', NULL, '21/05/2013 - 10:16:55', '27/05/2013 - 16:57:34', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0026-30', '', 'SIM'),
(81, 18, 'Carrefour', 'GUA', '', '', 'GuarujÃ¡', '11440-002', 'Av. Dom Pedro I', '', 'Jardim Belmar', 'GuarujÃ¡', '2131', '', 'Rafaella Rangel', 'SP', '', 'guaruja2.jpg', NULL, '21/05/2013 - 10:18:01', '21/05/2013 - 16:59:57', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0125-11', '', 'NAO'),
(82, 18, 'Carrefour', 'SPS', '', '', 'Imigrantes', '04150-900', 'Rua Ribeiro Lacerda', '', 'Jardim da Saude', 'SÃ£o Paulo', '940', '', 'Rafaella Rangel', 'SP', '', 'imigrantes.jpg', NULL, '21/05/2013 - 10:19:32', '21/05/2013 - 17:01:53', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0027-10', '', 'NAO'),
(83, 18, 'Carrefour', 'SPP', '', '', 'Pinheiros', '04794-000', 'Av. das NaÃ§Ãµes Unidas', '', 'Vila Gertrudes', 'SÃ£o Paulo', '5187', '', 'Rafaella Rangel', 'SP', '', 'pinheiros.jpg', NULL, '21/05/2013 - 10:20:44', '21/05/2013 - 17:18:42', '', '', '', '', '', '', '', '', '', '', 'Sim', 'Urbano', '45.543.915/0004-24', '', 'SIM'),
(84, 18, 'Carrefour', 'SPE', '', '', 'PessÃªgo', '08260-000', 'Estrada do PÃªssego', '', 'ColÃ´nia (Zona Leste)', 'SÃ£o Paulo', '1200', '', 'Rafaella Rangel', 'SP', '', 'pessego.jpg', NULL, '21/05/2013 - 10:21:45', '21/05/2013 - 17:17:52', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0067-08', '', 'NAO'),
(85, 18, 'Carrefour', 'SBK', '', '', 'Brooklin', '04701-000', 'Av. Santo Amaro', '', 'Santo Amaro', 'SÃ£o Paulo', '4815', '', 'Rafaella Rangel', 'SP', '', 'broklin.jpg', NULL, '21/05/2013 - 10:22:32', '21/05/2013 - 16:57:09', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0310-60', '', 'NAO'),
(86, 18, 'Carrefour', 'EPL', '', '', 'Pamplona', '01405-907', 'Rua Pamplona', '', 'Jardim Paulista', 'SÃ£o Paulo', '1704', '', 'Rafaella Rangel', 'SP', '', 'pamplona.JPG', NULL, '21/05/2013 - 10:24:09', '21/05/2013 - 17:14:28', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Rural', '62.545.579/0008-00', '', 'NAO'),
(87, 18, 'Carrefour', 'ECN', '', '', 'Center Norte', '02049-010', 'Avenida: MoysÃ©s Roysen', '', 'Vila Guilherme', 'SÃ£o Paulo', 'S/N', '', 'Rafaella Rangel', 'SP', '', 'center norte.jpg', NULL, '21/05/2013 - 10:25:02', '21/05/2013 - 16:58:11', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '62.545.579/0013-69', '', 'NAO'),
(88, 18, 'Carrefour', 'SPI', '', '', 'Interlagos', '04777-000', 'Av. Interlagos', '', 'Interlagos', 'SÃ£o Paulo', '5800', '', 'Rafaella Rangel', 'SP', '', 'interlagos.png', NULL, '21/05/2013 - 10:26:06', '27/05/2013 - 12:05:32', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0181-29', '', 'NAO'),
(89, 18, 'Carrefour', 'SPG', '', '', 'Giovanni Gronchi', '05724-030', 'Av. Alberto Augusto Alves', '', 'Vila Andrade', 'SÃ£o Paulo', '50', '', 'Rafaella Rangel', 'SP', '', 'giovanni.jpg', NULL, '21/05/2013 - 10:27:08', '21/05/2013 - 16:59:14', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0064-65', '', 'NAO'),
(90, 18, 'Carrefour', 'CMO', '', '', 'Morumbi', '05640-001', 'Av. Doutor Guilherme Dumont Villares', '', 'Jardim Londrina', 'SÃ£o Paulo', '1015', '', 'Rafaella Rangel', 'SP', '', 'morumbi.jpg', NULL, '21/05/2013 - 10:28:07', '21/05/2013 - 17:13:43', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '05.640.001/4554-39', '', 'NAO'),
(95, 18, 'Carrefour', 'CCM', '', '', 'CambuÃ­', '13024-100', 'Rua: Santa Cruz', '', 'CambuÃ­', 'Campinas', '281', '', '', 'SP', '', 'CCM.png', NULL, '22/05/2013 - 11:20:18', '22/05/2013 - 15:56:29', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0427-71', '', 'Selecione...'),
(96, 18, 'Carrefour', 'CDA', '', '', 'Osasco', '06278-010', 'Av. Doutor Mauro Lindemberg Monteiro', '', 'Parque Industrial Anhanguera', 'Osasco', '322', '', '', 'SP', '', 'cda.png', NULL, '22/05/2013 - 11:24:11', '27/05/2013 - 12:28:57', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0075-18', '', 'NAO'),
(97, 18, 'Carrefour', 'CIN', '', '', 'Indaiatuba', '13334-170', 'Rua: Presidente Kennedy', '', 'Cidade Nova I', 'Indaiatuba', '390', '', '', 'SP', '', 'indaiatuba.png', NULL, '22/05/2013 - 11:30:32', '27/05/2013 - 11:28:18', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0124-30', '', 'Selecione...'),
(105, 18, 'Carrefour', 'CBS', '', '', 'SÃ£o Bernado', '09770-140', 'Rua: JosÃ© Benedetti', '', 'Centro', 'SÃ£o Bernardo do Campo', '247', '', '', 'SP', '', 'sao bernardo cbs.png', NULL, '22/05/2013 - 11:59:28', '27/05/2013 - 15:02:15', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0017-49', '', 'Selecione...'),
(99, 18, 'Carrefour', 'CIT', '', '', 'Itu', '13301-000', 'Av. Doutor Otaviano Pereira Mendes', '', 'Liberdade', 'Itu', 'S/N', '', '', 'SP', '', 'CIT.png', NULL, '22/05/2013 - 11:33:09', '22/05/2013 - 15:57:34', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0204-50', '', 'Selecione...'),
(100, 18, 'Carrefour', 'CMM', '', '', 'Mogi-Mirim', '13800-290', 'Rua Coronel Venancio Ferreira Alves Adorno', '', 'Nova Mogi', 'SÃ£o Paulo', '210', '', '', 'SP', '', 'CMM.png', NULL, '22/05/2013 - 11:35:42', '27/05/2013 - 12:13:40', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0107-30', '', 'Selecione...'),
(101, 18, 'Carrefour', 'CPS', '', '', 'Campinas-Rod.Dom Pedro', '13086-900', 'Rodovia Dom Pedro I', '', 'Parque dos JacarandÃ¡s', 'Campinas', 'S/N', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 11:41:57', NULL, '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0005-05', '', 'Selecione...'),
(102, 18, 'Carrefour', 'CPV', '', '', 'Campinas-Jd.Von Zubem', '13044-502', 'Av. Engenheiro AntÃ´nio Francisco de Paula Souz', '', 'Jardim Anton Von Zuben', 'Campinas', '3900', '', '', 'SP', '', 'cpv.png', NULL, '22/05/2013 - 11:43:55', '27/05/2013 - 10:53:17', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0033-69', '', 'Selecione...'),
(103, 18, 'Carrefour', 'CRB', '', '', 'RibeirÃ£o Preto-Rui Barbosa', '14015-120', 'Rua Rui Barbosa', '', 'Centro', 'RibeirÃ£o Preto', '825', '', '', 'SP', '', 'CRB.png', NULL, '22/05/2013 - 11:48:53', '22/05/2013 - 17:44:27', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0377-8', '', 'SIM'),
(104, 18, 'Carrefour', 'CSA', '', '', 'SP-Alphaville', '06541-038', 'Av. Yojiro Takaoka', '', 'Centro de Apoio II ', 'Santana de ParnaÃ­ba', '3496', '', 'Rafaella Rangel', 'SP', '', 'CSA.png', NULL, '22/05/2013 - 11:54:07', '22/05/2013 - 17:09:09', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0281-91', '', 'SIM'),
(106, 18, 'Carrefour', 'CSS', '', '', 'SÃ£o JosÃ© do Rio Preto', '15090-900', 'Av. Faria Lima', '', 'Jardim Morumbi', 'SÃ£o JosÃ© do Rio Preto', '6363', '', '', 'SP', '', 'sjdo rio preto css.png', NULL, '22/05/2013 - 12:01:26', '27/05/2013 - 16:33:28', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0083-28', '', 'Selecione...'),
(107, 18, 'Carrefour', 'CST', '', '', 'Salto', '13322-060', 'Rua Campos Salles', '', 'Vila Nova', 'Salto', '725', '', '', 'SP', '', 'CST.png', NULL, '22/05/2013 - 12:02:36', '27/05/2013 - 14:50:14', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0223-12', '', 'Selecione...'),
(108, 18, 'Carrefour', 'CTB', '', '', 'TaubatÃ© II', '12080-000', 'Av. Marechal Deodoro', '', 'Jardim Santa Clara', 'TaubatÃ©', '214', '', 'Rafaella Rangel', 'SP', '', 'taubateII.png', NULL, '22/05/2013 - 12:03:35', '29/05/2013 - 09:50:23', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0128-64', '', 'SIM'),
(109, 18, 'Carrefour', 'CVA', '', '', 'CaÃ§apava', '12287-020', 'Av. Brasil', '', 'Vila AntÃ´nio Augusto Luiz', 'CaÃ§apava', '401', '', '', 'SP', '', 'CVA.png', NULL, '22/05/2013 - 12:04:26', '22/05/2013 - 16:57:51', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0222-31', '', 'Selecione...'),
(110, 18, 'Carrefour', 'CVN', '', '', 'Vinhedo', '13280-000', 'Estrada da Boiada', '', 'Casa Verde', 'Vinhedo', '97', '', 'Rafaella Rangel', 'SP', '', 'CVN.png', NULL, '22/05/2013 - 12:06:24', '22/05/2013 - 17:07:00', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0127-83', '', 'SIM'),
(111, 18, 'Carrefour', 'DMA', '', '', 'Diadema', '09910-550', 'Av. Intermunicipal', '', 'Jardim Rey', 'Diadema', '635', '', '', 'SP', '', 'DMA.png', NULL, '22/05/2013 - 12:10:44', '22/05/2013 - 16:59:44', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0105-78', '', 'Selecione...'),
(112, 18, 'Carrefour', 'ECP', '', '', 'Eld-Campinas', '13054-057', 'RuaProjetada', '', 'ChÃ¡cara Santa LetÃ­cia', 'Campinas', 'S/N', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 12:12:09', NULL, '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '62.545.579/0023-30', '', 'Selecione...'),
(113, 18, 'Carrefour', 'EPP', '', '', 'Eld-Presidente Prudente', '19060-000', 'Av. Manoel Goulart', '', 'Vila Santa Helena', 'Presidente Prudente', '2400', '', '', 'SP', '', 'EPP.png', NULL, '22/05/2013 - 12:13:35', '22/05/2013 - 17:00:53', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '62.545.579/0025-00', '', 'Selecione...'),
(114, 18, 'Carrefour', 'GRU', '', '', 'Guarulhos-PicaÃ§o', '07124-000', 'Av. Benjamin Harris Hunnicutt', '', 'Vila Rio de Janeiro', 'Guarulhos', 'S/N', '', '', 'SP', '', 'guarulhos picaÃ§o.png', NULL, '22/05/2013 - 12:15:13', '27/05/2013 - 11:15:37', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0049-26', '', 'Selecione...'),
(115, 18, 'Carrefour', 'GSC', '', '', 'Cidade Jardim', '13566-330', 'Av. SÃ£o Carlos', '', 'Vila Costa do Sol', 'SÃ£o Carlos', '3594', '', '', 'SP', '', 'cidade jardim.png', NULL, '22/05/2013 - 12:16:23', '27/05/2013 - 11:02:45', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0521-49', '', 'Selecione...'),
(116, 18, 'Carrefour', 'GSF', '', '', 'SÃ£o Carlos', '13562-420', 'Rua Bruno Ruggiero Filho', '', 'Pq. Santa FelÃ­cia Jardim', 'SÃ£o Carlos', '1751', '', '', 'SP', '', 'GSF SANTA FELICIA.png', NULL, '22/05/2013 - 12:17:31', '22/05/2013 - 17:04:35', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0523-00', '', 'Selecione...'),
(117, 18, 'Carrefour', 'JDI', '', '', 'JundiaÃ­', '13209-500', 'Av. Professora Maria do Carmo GuimarÃ£es Pellegrin', '', 'Vila Vioto', 'JundiaÃ­', 'S/N', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 12:18:32', NULL, '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0052-21', '', 'Selecione...'),
(118, 18, 'Carrefour', 'OSC', '', '', 'Osasco', '06020-015', 'Av. dos Autonomistas', '', 'Vila Yara', 'Osasco', '1542', '', '', 'SP', '', 'osasco osc.png', NULL, '22/05/2013 - 12:19:59', '27/05/2013 - 12:29:45', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0054-93', '', 'Selecione...'),
(119, 18, 'Carrefour', 'PIR', '', '', 'Piracicaba', '13405-190', 'Rua Professor Leonel Faggin', '', 'Jardim Monumento', 'Piracicaba', '300', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 12:22:24', NULL, '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0073-56', '', 'Selecione...'),
(120, 18, 'Carrefour', 'RJB', '', '', 'Rio de Janeiro', '22631-004', 'Av. das AmÃ©ricas', '', 'Barra da Tijuca', 'Rio de Janeiro', '5150', '', '', 'RJ', '', 'rio de janeiro.png', NULL, '22/05/2013 - 12:23:35', '27/05/2013 - 14:31:49', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0002-62', '', 'Selecione...'),
(121, 18, 'Carrefour', 'RPN', '', '', 'Hiper-RibeirÃ£o Preto', '14055-510', 'Rua Municipal', '', 'Ipiranga', 'RibeirÃ£o Preto', '252', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 12:25:31', '22/05/2013 - 12:28:15', '', '', '', '', '', '', '', '', '', '', 'Sim', 'Rural', '45.543.915/0280-00', '', 'SIM'),
(123, 18, 'Carrefour', 'RPS', '', '', 'RibeirÃ£o Preto', '14055-510', 'Rua Municipal', '', 'Ipiranga', 'RibeirÃ£o Preto', '1540', '', '', 'SP', '', NULL, NULL, '22/05/2013 - 12:49:45', NULL, '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0018-20', '', 'Selecione...'),
(124, 18, 'Carrefour', 'SBC', '', '', 'SÃ£o Bernardo do Campo', '09750-001', 'Av. Senador Vergueiro', '', 'Jardim TrÃªs Marias', 'SÃ£o Bernardo do Campo', '2000', '', '', 'SP', '', 'bernardo sbc.png', NULL, '22/05/2013 - 12:50:52', '27/05/2013 - 16:03:37', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0048-45', '', 'Selecione...'),
(125, 18, 'Carrefour', 'SBD', '', '', 'SÃ£o Bernardo Demarchi', '09820-000', 'Av. Maria Servidei Demarchi', '', 'Demarchi', 'SÃ£o Bernardo do Campo', '398', '', '', 'SP', '', 'sÃ£o bernardo demarchi.png', NULL, '22/05/2013 - 12:51:56', '27/05/2013 - 15:08:52', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0218-55', '', 'Selecione...'),
(126, 18, 'Carrefour', 'SBP', '', '', 'SÃ£o Bernardo PaulicÃ©ia', '09655-000', 'Av. do TaboÃ£o', '', 'TaboÃ£o', 'SÃ£o Bernardo do Campo', '2000', '', '', 'SP', '', 'bernardo pauliceia.png', NULL, '22/05/2013 - 12:54:00', '27/05/2013 - 16:09:26', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0328-90', '', 'Selecione...'),
(127, 18, 'Carrefour', 'SCS', '', '', 'SÃ£o Caetano do Sul', '09520-180', 'Rua Aquidaban', '', 'FundaÃ§Ã£o', 'SÃ£o Caetano do Sul', 'S/N', '', '', 'SP', '', 'sao caetano sul.png', NULL, '22/05/2013 - 14:03:04', '27/05/2013 - 16:18:03', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0042-50', '', 'Selecione...'),
(134, 52, 'AtacadÃ£o', '0', '', '', 'JacuÃ­', '08071-000', 'Av. Doutor CustÃ³dio de Lima', '', 'Parque Cruzeiro do Sul', 'SÃ£o Paulo', '297 A', '', 'Cassio Sales', 'SP', '', 'jacui.jpg', NULL, '22/05/2013 - 17:16:21', '03/06/2013 - 14:01:27', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '75.315.333/0120-34', '', 'SIM'),
(129, 18, 'Carrefour', 'SJC', '', '', 'SÃ£o JosÃ© dos Campos', '12242-010', 'Av. Deputado Benedito Matarazzo', '', 'Jardim das Colinas', 'SÃ£o JosÃ© dos Campos', '5701', '', 'Rafaella Rangel', 'SP', '', 'sj dos campos.png', NULL, '22/05/2013 - 14:04:33', '27/05/2013 - 16:48:38', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0036-01', '', 'SIM'),
(130, 18, 'Carrefour', 'SJP', '', '', 'SÃ£o JosÃ© do Rio Preto', '15076-630', 'Av. Tancredo Neves', '', 'Pq. Industrial Tancredo Neves', 'SÃ£o JosÃ© do Rio Preto', '900', '', '', 'SP', '', 'sj do rio preto sjp.png', NULL, '22/05/2013 - 14:07:22', '27/05/2013 - 16:38:12', '', '', '', '', '', '', '', '', '', '', 'Selecione...', 'Selecione...', '45.543.915/0045-00', '', 'Selecione...'),
(131, 18, 'Carrefour', 'SON', '', '', 'Sorocaba II', '18017-013', 'Viela Um', '', 'Jardim IpÃª', 'Sorocaba', '376', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '22/05/2013 - 14:08:52', '22/05/2013 - 17:09:51', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0214-21', '', 'SIM'),
(132, 18, 'Carrefour', 'SOR', '', '', 'Votoratim', '18110-650', 'Av. Giseli Costantino', '', 'Parque Bela Vista', 'Votorantim', '1870', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '22/05/2013 - 14:09:55', '22/05/2013 - 17:06:36', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0030-16', '', 'SIM'),
(133, 18, 'Carrefour', 'TBE', '', '', 'TamborÃ©', '06460-030', 'Av.Piracema', '', 'TamborÃ©', 'Barueri', '669', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '22/05/2013 - 14:11:43', '22/05/2013 - 17:08:51', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0032-88', '', 'SIM'),
(136, 18, 'Carrefour', 'STA', '', '', 'Santo AndrÃ©-Vila Guarany', '09110-560', 'Av. Pedro AmÃ©rico', '', 'Vila Guarany', 'Santo AndrÃ©', '23', '', 'Raffaela Rangel', 'SP', '', NULL, NULL, '23/05/2013 - 10:46:07', NULL, '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0029-82', '', 'Sim'),
(137, 18, 'Carrefour', 'STO', '', '', 'Santo AndrÃ©-Pq.das NaÃ§Ãµes', '09280-550', 'Rua OratÃ³rio', '', 'Jardim do Carmo', 'Santo AndrÃ©', '85', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '23/05/2013 - 10:49:26', NULL, '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0221-50', '', 'Sim'),
(138, 18, 'Carrefour', 'STS', '', '', 'TaboÃ£o da Serra', '06768-200', 'Rod. Regis Bittencourt', '', 'Cidade Intercap', 'TaboÃ£o da Serra', '1835', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '23/05/2013 - 10:57:11', NULL, '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0224-01', '', 'Sim'),
(139, 18, 'Carrefour', 'TAU', '', '', 'TaubatÃ©', '12040-000', 'Av. Charles Schnneider', '', 'Parque Senhor do Bonfim', 'TaubatÃ©', 'S/N', '', 'Rafaella Rangel', 'SP', '', NULL, NULL, '23/05/2013 - 11:00:22', NULL, '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0085-90', '', 'Sim'),
(143, 52, 'AtacadÃ£o', '', '', '', 'Matriz', '02170-000', 'Av.Morvan Dias de Figueiredo', '', 'Vila Maria', 'SÃ£o Paulo', '6169', '', '', 'SP', '', NULL, NULL, '29/05/2013 - 09:55:18', '03/06/2013 - 14:01:56', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '75.315.333/0001-09', '', 'SIM'),
(144, 55, 'ItaÃº', '0129', '', '', 'Salvador', '40010-020', 'Av. Estados Unidos', '', 'ComÃ©rcio', 'Salvador', '03', '', '', 'BA', '', 'itau 3.jpg', NULL, '03/06/2013 - 17:59:25', '04/06/2013 - 11:57:59', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0204-74', '', 'Sim'),
(142, 18, 'Carrefour', '', '', '', 'Matriz', '05690-000', 'Rua George Eastman', '', 'Vila Tramontano', 'SÃ£o Paulo', '213', '', 'Rafaella Rangel', 'SP', '', 'matriz.JPG', NULL, '24/05/2013 - 09:42:11', '27/05/2013 - 09:35:34', '', '', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '45.543.915/0001-81', '', 'Sim'),
(145, 55, 'ItaÃº', '0226', '', '', 'MercÃªs', '40060-001', 'Av. Sete de Setembro', '', 'Merces', 'Salvador', '1032', '', 'Marcos', 'BA', '', 'itau 3.jpg', NULL, '04/06/2013 - 11:48:02', '04/06/2013 - 11:58:11', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0393-02', '', 'SIM'),
(146, 55, 'ItaÃº', '0291', '', '', 'Ilheus', '45652-510', 'Rua Jorge Amado', '', 'Boa Vista', 'IlhÃ©us', '1', '', 'Marcos', 'BA', '', 'itau 3.jpg', NULL, '04/06/2013 - 11:52:17', '04/06/2013 - 11:58:35', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0368-00', '', 'Sim'),
(147, 55, 'ItaÃº', '0334', '', '', 'Pituba', '41830-001', 'Av.Manoel Dias da Silva', '', 'Pituba', 'Salvador', '1832', '', 'Marcos', 'BA', '', 'itau 3.jpg', NULL, '04/06/2013 - 11:54:35', '04/06/2013 - 11:58:48', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0758-80', '', 'Sim'),
(148, 55, 'ItaÃº', '0443', '', '', 'Feira de Santana', '44015-907', 'Rua Franco, 178', '', 'Centro', 'Feira de Santana', '178', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 12:01:55', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0421-09', '', 'Sim'),
(149, 55, 'ItaÃº', '0501', '', '', 'CamaÃ§ari', '42800-190', 'Trav. GetÃºlio Vargas', '', 'Centro', 'CamaÃ§ari', '201', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 12:03:46', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0420-10', '', 'Sim'),
(150, 55, 'ItaÃº', '0519', '', '', 'VitÃ³ria da Conquista', '45000-375', 'Rua Francisco Santos', '', 'Centro', 'Vitoria da Conquista', '3', '', 'Marcos', '', '', NULL, NULL, '04/06/2013 - 12:06:22', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0422-81', '', 'Sim'),
(151, 55, 'ItaÃº', '0556', '', '', 'GraÃ§a', '41100-655', 'Av. Euclides da Cunha', '', 'Centro', 'Salvador', '300', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 12:12:13', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0872-00', '', 'Sim'),
(152, 55, 'ItaÃº', '0663', '', '', 'Porto  Velho', '78918-260', 'Rua Jose de Alencar', '', 'Centro', 'Porto Velho', '2968', '', 'Marcos', 'RO', '', NULL, NULL, '04/06/2013 - 12:20:06', '04/06/2013 - 14:20:11', '', 'marco-aurelio.silva@itau-unibanco.com.br ', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0705-79', '', 'SIM'),
(153, 55, 'ItaÃº', '0664', '', '', 'Rio Branco', '69900-210', 'Rua Marechal Deodoro', '', 'Centro', 'Rio Branco', '81', '', 'Marcos', 'AC', '', NULL, NULL, '04/06/2013 - 14:22:38', '04/06/2013 - 14:23:55', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0767-71', '', 'SIM'),
(154, 55, 'ItaÃº', '0665', '', '', 'Piedade', '40060-001', 'Av. Sete de Setembro', '', 'SÃ£o Pedro', 'Salvador', '616', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 14:28:02', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0554-21', '', 'Sim'),
(155, 55, 'ItaÃº', '0697', '', '', 'CalÃ§ada', '40411-010', 'Rua Padre AntÃ´nio de SÃ¡', '', 'CalÃ§ada', 'Salvador', '169', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 14:29:56', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0553-40', '', 'Sim'),
(156, 55, 'ItaÃº', '0705', '', '', 'Farol da Barra', '40140-230', 'Av. Almirante Marques de LeÃ£o', '', 'Barra', 'Salvador', '478', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 14:32:25', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0712-06', '', 'Sim'),
(157, 55, 'ItaÃº', '0719', '', '', '', '45605-035', 'Rua GetÃºlio Vargas', '', 'ConceiÃ§Ã£o', 'Itabuna', '22', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 14:49:24', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0744-85', '', 'Sim'),
(158, 55, 'ItaÃº', '0935', '', '', 'Iguatemi', '41820-020', 'Av.Tancredo Neves', '', 'Pituba', 'Salvador', '400', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 14:52:15', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1696-05', '', 'Sim'),
(159, 55, 'ItaÃº', '1133', '', '', 'Vilhena', '78995-000', 'Av.Major Amarante', '', 'Centro', 'Vilhena', '2947', '', 'Marcos', 'RO', '', NULL, NULL, '04/06/2013 - 14:57:33', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1231-06', '', 'Sim'),
(160, 55, 'ItaÃº', '1133', '', '', 'Vilhena', '78995-000', 'Av.Major Amarante', '', 'Centro', 'Vilhena', '2947', '', 'Marcos', 'RO', '', NULL, NULL, '04/06/2013 - 14:57:38', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1231-06', '', 'Sim'),
(161, 55, 'ItaÃº', '1291', '', '', 'Liberdade', '40325-281', 'Trav. Lima e Silva', '', 'Liberdade', 'Salvador', '251', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 15:00:11', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1314-62', '', 'Sim'),
(162, 55, 'ItaÃº', '1350', '', '', 'Ji-ParanÃ¡', '78964-460', 'Av.Marechal Rondon', '', 'Nova BrasÃ­lia', 'Ji-ParanÃ¡', '', '', 'Marcos', 'RO', '', NULL, NULL, '04/06/2013 - 15:20:10', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1155-05', '', 'Sim'),
(163, 55, 'ItaÃº', '1352', '', '', 'Boa Vista', '69303-445', 'Av. Ville Roy', '', 'SÃ£o Francisco', 'Boa Vista', '851', '', 'Marcos', 'RR', '', NULL, NULL, '04/06/2013 - 15:22:39', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1157-77', '', 'Sim'),
(164, 55, 'ItaÃº', '1576', '', '', 'Mercado do Ouro', '40010-020', 'Av.Estados Unidos', '', 'ComÃ©rcio', 'Salvador', '476', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 15:28:14', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.700.119/0141-42', '', 'Sim'),
(165, 55, 'ItaÃº', '1592', '', '', 'NaÃ§Ãµes Unidas', '78915-040', 'Av. NaÃ§Ãµes Unidas', '', 'Nossa Senhora das GraÃ§as', 'Porto Velho', '716', '', 'Marcos', 'RO', '', NULL, NULL, '04/06/2013 - 15:31:21', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1416-97', '', 'Sim'),
(166, 55, 'ItaÃº', '1599', '', '', 'Itaigara', '40301-155', 'Av. AntÃ´nio MagalhÃ£es ', '', 'Pituba', 'Salvador', '846', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 15:49:05', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1571-86', '', 'Sim'),
(167, 55, 'ItaÃº', '1647', '', '', 'Alagoinhas', '48005-170', 'PraÃ§a da Bandeira', '', 'Centro', 'Alagoinhas', '61', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 15:53:16', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1480-04', '', 'Sim'),
(168, 55, 'ItaÃº', '1648', '', '', 'Porto Seguro', '45810-000', 'Av. Getulio Vargas', '', 'Centro', 'Porto Seguro', '204', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 16:13:53', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1479-70', '', 'Sim'),
(169, 55, 'ItaÃº', '1683', '', '', 'Teixeira de Freitas', '45995-046', 'Rua Lomanto JÃºnior', '', 'Centro', 'Teixeira de Freitas', '118', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 16:16:17', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1347-20', '', 'Sim'),
(170, 55, 'ItaÃº', '2796', '', '', 'Shopping Salvador', '41820-910', 'Avenida: Neves, 2915', '', 'Caminho das Ãrvores', 'Salvador', '3133', '', 'Marcos', 'BA', '', NULL, NULL, '04/06/2013 - 16:22:22', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4584-61', '', 'Sim'),
(171, 55, 'ItaÃº', '3214', '', '', 'Tancredo Neves', '41820-020', 'Av. Tancredo Neves', '', 'Caminho das Ãrvores', 'Salvador', '1186', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '04/06/2013 - 16:25:20', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/1445-21', '', 'Sim'),
(172, 55, 'ItaÃº', '7931', '', '', 'Paripe', '40800-570', 'Avenida: AfrÃ¢nio Peixoto', '', 'Paripe', 'Salvador', '12362', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:09:55', '05/06/2013 - 11:11:07', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3294-91', '', 'SIM'),
(173, 55, 'ItaÃº', '7945', '', '', 'Cacoal', '78976-030', 'Av. Porto Velho', '', 'Centro', 'Cacoal', '2445', '', 'Marcos AurÃ©lio', 'RO', '', NULL, NULL, '05/06/2013 - 11:13:16', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3273-67', '', 'Sim'),
(174, 55, 'ItaÃº', '7946', '', '', 'Ariquemes', '78931-010', 'Av. CanaÃ£', '', 'Setor 1', 'Ariquemes', '3410', '', 'Marcos AurÃ©lio', 'RO', '', NULL, NULL, '05/06/2013 - 11:15:28', '05/06/2013 - 11:19:20', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3272-86', '', 'SIM'),
(175, 55, 'ItaÃº', '7950', '', '', 'Guanambi', '46430-000', 'PraÃ§a Coronel Pedro F. De Morais ', '', 'Centro', 'Guanambi', '88', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:22:25', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3246-94', '', 'Sim'),
(176, 55, 'ItaÃº', '8129', '', '', 'ComÃ©rcio', '40010-906', 'Av.Estados Unidos, 397', '', 'ComÃ©rcio', 'Salvador', '397', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:24:27', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4325-86', '', 'Sim'),
(177, 55, 'ItaÃº', '8146', '', '', 'PatrocÃ­nio', '76801-068', 'Rua Jose do Patrocinio', '', 'Centro', 'Porto Velho', '703', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 11:28:03', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3602-24', '', 'Sim'),
(178, 55, 'ItaÃº', '8150', '', '', 'Iguatemi', '41820-908', 'Av. Tancredo Neves', '', 'Caminho das Ãrvores', 'Salvador', '148', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:30:19', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4301-09', '', 'Sim'),
(179, 55, 'ItaÃº', '8212', '', '', 'Lauro de Freitas', '42700-000', 'Av. Santos Dumont', '', 'Centro', 'Lauro de Freitas', '501', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:32:35', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.904/1980-6', '', 'Sim'),
(180, 55, 'ItaÃº', '8270', '', '', 'Salvador_Rua JosÃ© Peroba', '41820-907', 'Av.Tancredo Neves', '', 'Caminho das Ãrvores', 'Salvador', '274', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:38:52', '05/06/2013 - 11:39:28', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.904/3339-6', '', 'SIM'),
(181, 55, 'ItaÃº', '8528', '', '', 'ItapuÃ£', '41635-150', 'Av. Dorival Caymmi', '', 'ItapuÃ£', 'Salvador', '14154', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:45:30', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4323-14', '', 'Sim'),
(182, 55, 'ItaÃº', '8601', '', '', 'Salvador_Hipermercado', '41800-700', 'Av. AntÃ´nio Carlos MagalhÃ£es', '', 'Pituba', 'Salvador', 'S/N', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:48:04', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Selecione...', 'Urbano', '60.701.190/4294-45', '', 'Selecione...'),
(183, 55, 'ItaÃº', '8657', '', '', 'Alagoas', '41830-030', 'Rua Alagoas', '', 'Pituba', 'Salvador', 'S/N', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 11:59:53', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4308-85', '', 'Sim'),
(184, 55, 'ItaÃº', '8702', '', '', 'Vale do Canela', '40140-190', 'Rua: Miguel Burnier', '', 'Barra', 'Salvador', '190', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:06:46', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Sim', 'Urbano', '60.701.190/4334-77', '', 'Sim'),
(185, 55, 'ItaÃº', '8822', '', '', 'Rolim de Moura', '76940-000', 'Av. 25 de Agosto', '', 'Centro', 'Rolim de Moura', '4785', '', 'Marcos', 'RO', '', NULL, NULL, '05/06/2013 - 12:11:21', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4421-15', '', 'Sim'),
(186, 55, 'ItaÃº', '8828', '', '', 'IrecÃª', '44900-000', 'Rua AurÃ©lio Jose Marques', '', 'Centro', 'IrecÃª', '44', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:14:50', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4402-52', '', 'Sim'),
(187, 55, 'ItaÃº', '8872', '', '', 'Salvador_PraÃ§a 11 de Dezembro', '40411-366', 'Largo da CalÃ§ada', '', 'CalÃ§ada', 'Salvador', '3', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:19:01', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4335-58', '', 'Sim'),
(188, 55, 'ItaÃº', '8874', '', '', 'Itaberaba', '46880-000', 'Rua Ramiro Pimentel', '', 'Centro', 'Itaberaba', '55', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:28:03', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4403-33', '', 'Sim'),
(189, 55, 'ItaÃº', '8934', '', '', 'VitÃ³ria da Conquista_SÃ£o Geraldo', '45000-375', 'Rua Francisco Santos', '', 'Centro', 'Vitoria da Conquista', '3', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:31:02', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0422-81', '', 'Sim'),
(190, 55, 'ItaÃº', '8978', '', '', 'Senhor do Bonfim', '48970-000', 'Rua Ruy Barbosa', '', 'Centro', 'Senhor do Bonfim', '408', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:36:17', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4407-67', '', 'Sim'),
(191, 55, 'ItaÃº', '9317', '', '', 'Salvado_Princesa', '40150-080', 'Av. Princesa Leopoldina', '', 'GraÃ§a', 'Salvador', '398', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:38:07', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4302-90', '', 'Sim'),
(192, 55, 'ItaÃº', '9349', '', '', 'Salvador_Conselheiro', '40015-070', 'Rua Conselheiro Dantas', '', 'ComÃ©rcio', 'Salvador', '26', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 12:40:11', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4348-72', '', 'Sim'),
(193, 55, 'ItaÃº', '9679', '', '', 'Salvador_Shopping Paralela', '41730-101', 'Av. Luiz Viana Filho', '', 'Paralela', 'Salvador', '8544', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:19:41', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4452-11', '', 'Sim'),
(194, 55, 'ItaÃº', '3241', '', '', 'Salvador_Rio Vermelho', '41940-000', 'Rua Osvaldo Cruz', '', 'Rio Vermelho', 'Salvador', '339', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:21:49', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/0136-99', '', 'Sim'),
(195, 55, 'ItaÃº', '4078', '', '', 'Salvador_Campo Grande', '41830-001', 'Av. Manoel Dias da Silva', '', 'Pituba', 'Salvador', '1214', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:23:49', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2048-77', '', 'Sim'),
(196, 55, 'ItaÃº', '4893', '', '', 'Salvador_Caminho das Arvores', '41810-000', 'Av. Paulo VI', '', 'Pituba', 'Salvador', '1317', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:26:27', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2643-49', '', 'Sim'),
(197, 55, 'ItaÃº', '4960', '', '', 'Jacobina', '44700-000', 'Rua Senador Pedro Lago', '', 'Centro', 'Jacobina', '72', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:28:46', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4594-33', '', 'Sim'),
(198, 55, 'ItaÃº', '5190', '', '', 'Salvador_Ondina', '40170-110', 'Av. Adhemar de Barros', '', 'Ondina', 'Salvador', '1106', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:30:48', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2574-82', '', 'Sim'),
(199, 55, 'ItaÃº', '5576', '', '', 'Salvador_Baixa dos Sapateiros', '40025-001', 'Av. JosÃ© Joaquim Seabra', '', 'Baixa dos Sapateiros', 'Salvador', '220', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:32:26', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Sim', 'Urbano', '60.701.190/2797-02', '', 'Sim'),
(200, 55, 'ItaÃº', '6277', '', '', 'Serrinha', '42700-000', 'Av.Santo Dumont', 'Loja 29 a 33', 'Centro', 'Lauro de Freitas', '3475', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:35:09', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Sim', 'Urbano', '60.701.190/2505-50', '', 'Sim'),
(201, 55, 'ItaÃº', '6282', '', '', 'Salvador_Norte Shopping', '41510-000', 'Rodovia Ba 526', 'Loja 1064 piso L1', 'SÃ£o CristovÃ£o', 'Salvador', '305', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:38:56', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Sim', 'Urbano', '60.701.190/4583-80', '', 'Sim'),
(202, 55, 'ItaÃº', '6283', '', '', 'Catu_Bahia', '48110-000', 'R Des. Pedro Ribeiro Bittencourt', '', 'Centro', 'Catu', '226', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:41:47', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Selecione...', '60.701.190/4587-04', '', 'Sim'),
(203, 55, 'ItaÃº', 'Salvador_Campo da Polvora', '', '', '', '40050-000', 'Av. Joana AngÃ©lica', '', 'NazarÃ©', 'Salvador', '626', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 14:55:41', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2664-73', '', 'Sim'),
(204, 55, 'ItaÃº', '6355', '', '', 'Salvador_Manoel Dias', '41830-001', 'Av.Manoel Dias da Silva', '', 'Pituba', 'Salvador', '1022', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:06:28', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4306-13', '', 'Sim'),
(205, 55, 'ItaÃº', '6372', '', '', 'Cruz das Almas_Bahia', '44380-000', 'AV XV DE NOVEMBRO ', '', 'Centro', 'Cruz das Almas', '117', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:12:01', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4404-14', '', 'Sim'),
(206, 55, 'ItaÃº', 'Salvador_Cidadela', '', '', '6372', '40280-000', 'Av. AntÃ´nio Carlos MagalhÃ£es', 'Lojas 2 e 3', 'Parque Bela Vista', 'Salvador', '3359', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:17:47', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4113-05', '', 'Sim'),
(207, 55, 'ItaÃº', '6439', '', '', 'Salvador_Extra RÃ³tula', '41150-200', 'Av. Barros Reis', '', 'Cabula', 'Salvador', '1400', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:19:52', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4300-28', '', 'Sim'),
(208, 55, 'ItaÃº', '6543', '', '', 'JequiÃ©_Bahia', '45200-190', 'Rua da ItÃ¡lia', '', 'Centro', 'JequiÃ©', '24', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:21:40', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2739-25', '', 'Sim'),
(209, 55, 'ItaÃº', '6547', '', '', 'Salvador_MagalhÃ£es Neto', '41810-012', 'Av. Professor MagalhÃ£es Neto', '', 'Pituba', 'Salvador', '1752', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:46:00', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2783-07', '', 'Sim'),
(210, 55, 'ItaÃº', '6651', '', '', 'Salvador_Almirante Marques', '40140-230', 'Av. Almirante Marques de LeÃ£o', '', 'Barra', 'Salvador', '318', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:48:56', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4292-83', '', 'Sim'),
(211, 55, 'ItaÃº', '6783', '', '', 'Brumado_Bahia', '46100-000', 'PraÃ§a Armindo Azevedo ', '', 'Centro', 'Brumado', '66', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:53:50', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4614-11', '', 'Sim'),
(212, 55, 'ItaÃº', '6793', '', '', 'Salvador_Matatu', '40260-000', 'Rua Bandeirantes', '', 'Matatu', 'Salvador', '985', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 15:58:58', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4611-79', '', 'Sim'),
(213, 55, 'ItaÃº', '6794', '', '', 'Juazeiro_Bahia', '48904-001', 'Av. Adolfo Viana', '', 'Centro', 'Juazeiro', '402', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 16:00:56', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4613-30', '', 'Sim');
INSERT INTO `tbl_imoveis` (`IMO_CODIGO`, `CLI_CODIGO`, `CLI_NOME`, `IMO_REF`, `IMO_INCRACCIR`, `IMO_RFBITR`, `IMO_NOME`, `IMO_CEP`, `IMO_ENDERECO`, `IMO_COMPLEMENTO`, `IMO_BAIRRO`, `IMO_CIDADE`, `IMO_NUMERO`, `IMO_TEL`, `IMO_TELNOME`, `IMO_UF`, `IMO_OBS`, `IMO_IMG`, `IMO_IMG2`, `IMO_DTCAD`, `IMO_DTALT`, `IMO_FAX`, `IMO_EMAIL`, `IMO_TERRENO_IPTU`, `IMO_TERRENO_REGISTRO_IMOVEIS`, `IMO_TERRENO_TOPOGRAFIA`, `IMO_TERRENO_CONTIBUINTES`, `IMO_AREA_CONSTRUIDA_PROJETO_APROVADO`, `IMO_AREA_CONSTRUIDA_AVERBADA`, `IMO_AREA_CONSTRUIDA_IPTU`, `IMO_AREA_CONSTRUIDA_MATRICULA`, `IMO_AREA_CONSTRUIDA_TOMB_HISTORICO`, `IMO_TERRENO_USO`, `IMO_CNPJFILIAL`, `IMO_PROPIMOVEL`, `IMO_LOCACAO`) VALUES
(214, 55, 'ItaÃº', '6936', '', '', 'Salvador_Largo do Tanque', '40355-720', 'Av. San Martin', '', 'Fazenda Grande do Retiro', 'Salvador', '2263', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 16:35:42', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2851-84', '', 'Sim'),
(215, 55, 'ItaÃº', '6953', '', '', 'Asa Branca_Roraima', '69312-242', 'Av. General AtaÃ­de Teive', '', 'Asa Branca', 'Boa Vista', '5319', '', 'Marcos AurÃ©lio', 'RR', '', NULL, NULL, '05/06/2013 - 16:39:13', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/2882-80', '', 'Sim'),
(216, 55, 'ItaÃº', '6976', '', '', 'Ji-ParanÃ¡_Nova Brasilia', '76908-408', 'Avenida Brasil', '', 'Nova Brasilia', 'Ji-ParanÃ¡', '622', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 16:45:47', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4623-02', '', 'Sim'),
(217, 55, 'ItaÃº', '7188', '', '', 'Paulo Afonso_Bahia', '48602-490', 'Av. Landulfo Alves', '', 'Vila Poty', 'Paulo Afonso', '94', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 16:47:40', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4596-03', '', 'Sim'),
(218, 55, 'ItaÃº', '7368', '', '', 'Porto Velho_Jatuarana', '78910-250', 'Rua Jatuarana', '', 'Lagoa', 'Porto Velho', '4114', '', 'Marcos AurÃ©lio', 'RO', '', NULL, NULL, '05/06/2013 - 16:54:02', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3009-14', '', 'Sim'),
(219, 55, 'ItaÃº', '7389', '', '', 'Rio Branco_Bosque', '69909-720', 'Av NaÃ§Ãµes Unidas', '', 'Bosque', 'Rio Branco', '504', '', 'Marcos AurÃ©lio', 'AC', '', NULL, NULL, '05/06/2013 - 16:56:06', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3116-06', '', 'Sim'),
(220, 55, 'ItaÃº', '7421', '', '', 'Lauro de Freitas_Vilas do AtlÃ¢ntico', '42700-000', 'Av. Luiz Tarquinio ', '', 'Pitangueiras', 'Lauro de Freitas', '2102', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 16:59:26', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Selecione...', '60.701.190/3091-13', '', 'Sim'),
(221, 55, 'ItaÃº', '7437', '', '', 'Salvador_Caminho da Areia', '40440-360', 'Av. Caminho de Areia', '', 'Caminho de Areia', 'Salvador', '420', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 17:01:49', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3079-27', '', 'Sim'),
(222, 55, 'ItaÃº', '7485', '', '', 'Sto. AntÃ´nio de Jesus_Bahia', '44571-355', 'Rua GorgÃ´nio JosÃ© de AraÃºjo', '', 'Centro', 'Santo AntÃ´nio de Jesus', '146', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 17:03:57', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3103-91', '', 'Sim'),
(223, 55, 'ItaÃº', '7689', '', '', 'CamaÃ§ari_Bahia', '42807-000', 'Av. 28 De Setembro ', '', 'CamaÃ§ari de Dentro', 'CamaÃ§ari', '575', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 17:06:52', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/4304-51', '', 'Sim'),
(224, 55, 'ItaÃº', '7891', '', '', 'Eunapolis_Bahia', '45820-006', 'Av. Porto Seguro', '', 'Centro', 'EunÃ¡polis', '630', '', 'Marcos AurÃ©lio', 'BA', '', NULL, NULL, '05/06/2013 - 17:10:47', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '60.701.190/3200-01', '', 'Sim'),
(225, 55, 'ItaÃº', '0250', '', '', 'SÃ£o JosÃ© dos Campos', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:15:14', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'Sim'),
(226, 55, 'ItaÃº', '0712', '', '', 'Candeias', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:16:17', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'Sim'),
(227, 55, 'ItaÃº', '1010', '', '', 'Barreiras', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:17:09', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'Sim'),
(228, 55, 'ItaÃº', '1121', '', '', 'Feira de Santana', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:18:27', '05/06/2013 - 17:19:03', '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'SIM'),
(229, 55, 'ItaÃº', '1497', '', '', 'SimÃµes Filho_Bahia', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:24:25', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'Sim'),
(230, 55, 'ItaÃº', '1510', '', '', 'Salvador_Praia de Itapoa', '00000-000', ': ', '', '', '', '00', '', 'Marcos AurÃ©lio', '', '', NULL, NULL, '05/06/2013 - 17:25:45', NULL, '', 'marcos-aurelio.silva@itau-unibanco.com.br', '', '', '', '', '', '', '', '', 'Nao', 'Urbano', '', '', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_processos`
--

CREATE TABLE IF NOT EXISTS `tbl_processos` (
  `PRO_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_NOME` varchar(50) DEFAULT NULL,
  `PRO_ID` int(11) NOT NULL,
  `PRO_SUB` varchar(50) DEFAULT NULL,
  `PRO_STATUS` varchar(15) DEFAULT NULL,
  `PRO_DTCAD` varchar(30) DEFAULT NULL,
  `PRO_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PRO_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Extraindo dados da tabela `tbl_processos`
--

INSERT INTO `tbl_processos` (`PRO_CODIGO`, `PRO_NOME`, `PRO_ID`, `PRO_SUB`, `PRO_STATUS`, `PRO_DTCAD`, `PRO_DTALT`) VALUES
(1, 'Protocolo', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Pendente', '23/04/2013 - 23:05:34', '06/05/2013 - 00:26:27'),
(2, 'Acompanhamento', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Pendente', '23/04/2013 - 23:06:24', NULL),
(3, 'Atendimento de exigÃªncias', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Pendente', '23/04/2013 - 23:06:42', NULL),
(4, 'Pagamento taxas', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Pendente', '23/04/2013 - 23:07:00', NULL),
(5, 'Deferimento', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Pendente', '23/04/2013 - 23:07:12', NULL),
(6, 'Protocolo', 4, 'APROVAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:07:33', NULL),
(7, 'Acompanhamento', 4, 'APROVAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:07:54', NULL),
(8, 'Atendimento de exigÃªncias', 4, 'APROVAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:08:18', NULL),
(9, 'Pagamento taxas', 4, 'APROVAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:08:35', NULL),
(10, 'Deferimento', 4, 'APROVAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:08:52', NULL),
(11, 'Consulta Ã  LegislaÃ§Ã£o', 14, 'ELABORAÃ‡ÃƒO DE EVTL', 'Pendente', '23/04/2013 - 23:09:08', NULL),
(12, 'Montagem do relatÃ³rio', 14, 'ELABORAÃ‡ÃƒO DE EVTL', 'Pendente', '23/04/2013 - 23:09:22', NULL),
(13, 'RevisÃ£o', 14, 'ELABORAÃ‡ÃƒO DE EVTL', 'Pendente', '23/04/2013 - 23:09:36', NULL),
(14, 'Recebimento do lay-out', 16, 'ELABORAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:09:55', NULL),
(15, 'ElaboraÃ§Ã£o das plantas', 16, 'ELABORAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:10:18', NULL),
(16, 'EmissÃ£o de ART', 16, 'ELABORAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:12:09', NULL),
(17, 'RevisÃ£o', 16, 'ELABORAÃ‡ÃƒO DE PROJETO', 'Pendente', '23/04/2013 - 23:12:29', NULL),
(18, 'Protocolo', 2, 'ALVARÃ SANITÃRIO', 'Pendente', '23/04/2013 - 23:12:56', NULL),
(21, 'Atendimento de exigÃªncias', 2, 'ALVARÃ SANITÃRIO', 'Pendente', '23/04/2013 - 23:16:26', NULL),
(22, 'Pagamento taxas', 2, 'ALVARÃ SANITÃRIO', 'Pendente', '23/04/2013 - 23:17:04', NULL),
(23, 'Deferimento', 2, 'ALVARÃ SANITÃRIO', 'Pendente', '23/04/2013 - 23:17:17', NULL),
(24, 'Protocolo', 11, 'AVCB', 'Pendente', '23/04/2013 - 23:17:29', NULL),
(25, 'Acompanhamento', 11, 'AVCB', 'Pendente', '23/04/2013 - 23:17:45', NULL),
(26, 'Atendimento de exigÃªncias', 11, 'AVCB', 'Pendente', '23/04/2013 - 23:18:06', NULL),
(27, 'Deferimento', 11, 'AVCB', 'Pendente', '23/04/2013 - 23:18:25', NULL),
(28, 'Recebimento do lay-out', 15, 'ELABORAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:18:48', NULL),
(29, 'ElaboraÃ§Ã£o das plantas', 15, 'ELABORAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:19:08', NULL),
(30, 'EmissÃ£o de ART', 15, 'ELABORAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:19:48', NULL),
(31, 'RevisÃ£o', 15, 'ELABORAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:20:12', NULL),
(32, 'Protocolo', 3, 'APROVAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:20:32', NULL),
(33, 'Acompanhamento', 3, 'APROVAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:20:58', NULL),
(34, 'Atendimento de exigÃªncias', 3, 'APROVAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:23:30', NULL),
(35, 'Deferimento', 3, 'APROVAÃ‡ÃƒO DE PPCI', 'Pendente', '23/04/2013 - 23:23:42', NULL),
(36, 'Recebimento das plantas/lay-outs', 13, 'ELABORAÃ‡ÃƒO DE AS BUILT', 'Pendente', '23/04/2013 - 23:23:57', NULL),
(37, 'Levantamento in loco', 13, 'ELABORAÃ‡ÃƒO DE AS BUILT', 'Pendente', '23/04/2013 - 23:24:19', NULL),
(38, 'Desenho', 13, 'ELABORAÃ‡ÃƒO DE AS BUILT', 'Pendente', '23/04/2013 - 23:25:31', NULL),
(39, 'RevisÃ£o', 13, 'ELABORAÃ‡ÃƒO DE AS BUILT', 'Pendente', '23/04/2013 - 23:25:48', NULL),
(40, 'Pedido ao CartÃ³rio', 22, 'OBTENÃ‡ÃƒO DE MATRÃCULA', 'Pendente', '23/04/2013 - 23:26:15', NULL),
(41, 'DepÃ³sito de emolumentos', 22, 'OBTENÃ‡ÃƒO DE MATRÃCULA', 'Pendente', '23/04/2013 - 23:26:48', NULL),
(42, 'RecepÃ§Ã£o da certidÃ£o', 22, 'OBTENÃ‡ÃƒO DE MATRÃCULA', 'Pendente', '23/04/2013 - 23:27:07', NULL),
(43, 'ElaboraÃ§Ã£o requerimento', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:27:43', NULL),
(44, 'Acompanhamento', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:28:07', NULL),
(45, 'Atendimento de exigÃªncias', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:28:36', NULL),
(46, 'Protocolo do processo', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:29:39', NULL),
(47, 'DepÃ³sito de emolumentos', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:55:37', NULL),
(48, 'ConclusÃ£o', 12, 'AVERBAÃ‡ÃƒO/REGISTRO', 'Pendente', '23/04/2013 - 23:56:25', NULL),
(49, 'Protocolo', 19, 'LICENÃ‡A DE PUBLICIDADE', 'Pendente', '23/04/2013 - 23:57:03', NULL),
(50, 'Acompanhamento', 19, 'LICENÃ‡A DE PUBLICIDADE', 'Pendente', '23/04/2013 - 23:57:29', NULL),
(51, 'Pagamento taxas', 19, 'LICENÃ‡A DE PUBLICIDADE', 'Pendente', '23/04/2013 - 23:57:46', NULL),
(52, 'Deferimento', 19, 'LICENÃ‡A DE PUBLICIDADE', 'Pendente', '23/04/2013 - 23:58:04', NULL),
(53, 'SolicitaÃ§Ã£o ao Ã³rgÃ£o', 21, 'OBTENÃ‡ÃƒO DE GUIAS DIVERSAS', 'Pendente', '23/04/2013 - 23:58:27', NULL),
(54, 'ObtenÃ§Ã£o', 21, 'OBTENÃ‡ÃƒO DE GUIAS DIVERSAS', 'Pendente', '23/04/2013 - 23:58:42', NULL),
(55, 'Protocolo', 5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', 'Pendente', '23/04/2013 - 23:59:04', NULL),
(56, 'Acompanhamento', 5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', 'Pendente', '23/04/2013 - 23:59:21', NULL),
(57, 'Atendimento de exigÃªncias', 5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', 'Pendente', '23/04/2013 - 23:59:46', NULL),
(58, 'Pagamento taxas', 5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', 'Pendente', '24/04/2013 - 00:00:00', NULL),
(59, 'Deferimento', 5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', 'Pendente', '24/04/2013 - 00:00:13', NULL),
(60, 'Protocolo', 6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', 'Pendente', '24/04/2013 - 00:00:27', NULL),
(61, 'Acompanhamento', 6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', 'Pendente', '24/04/2013 - 00:00:40', NULL),
(62, 'Atendimento de exigÃªncias', 6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', 'Pendente', '24/04/2013 - 00:00:56', NULL),
(63, 'Pagamento taxas', 6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', 'Pendente', '24/04/2013 - 00:01:10', NULL),
(64, 'Deferimento', 6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', 'Pendente', '24/04/2013 - 00:01:26', NULL),
(65, 'Protocolo', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:01:46', NULL),
(66, 'Acompanhamento', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:02:12', NULL),
(67, 'Atendimento de exigÃªncias', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:02:29', NULL),
(68, 'Pagamento taxas', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:03:05', NULL),
(69, 'Deferimento', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:03:20', NULL),
(70, 'Pagamento taxas', 9, 'ARQUIVAMENTO DE ATAS JUNTA COMERCIAL', 'Pendente', '24/04/2013 - 00:03:51', NULL),
(71, 'Protocolo', 9, 'ARQUIVAMENTO DE ATAS JUNTA COMERCIAL', 'Pendente', '24/04/2013 - 00:04:45', NULL),
(72, 'Atendimento de exigÃªncias', 9, 'ARQUIVAMENTO DE ATAS JUNTA COMERCIAL', 'Pendente', '24/04/2013 - 00:05:03', NULL),
(73, 'Deferimento', 8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', 'Pendente', '24/04/2013 - 00:05:19', NULL),
(74, 'Protocolo', 7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', 'Pendente', '24/04/2013 - 00:05:47', NULL),
(75, 'Acompanhamento', 7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', 'Pendente', '24/04/2013 - 00:06:00', NULL),
(76, 'Atendimento de exigÃªncias', 7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', 'Pendente', '24/04/2013 - 00:06:14', NULL),
(77, 'Pagamento taxas', 7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', 'Pendente', '24/04/2013 - 00:06:30', NULL),
(78, 'Deferimento', 7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', 'Pendente', '24/04/2013 - 00:09:24', NULL),
(79, 'Protocolo', 20, 'OBTENÃ‡AO DO ITBI/NÃƒO-INCIDÃŠNCIA', 'Pendente', '24/04/2013 - 00:09:49', NULL),
(80, 'Acompanhamento', 20, 'OBTENÃ‡AO DO ITBI/NÃƒO-INCIDÃŠNCIA', 'Pendente', '24/04/2013 - 00:10:07', NULL),
(81, 'Atendimento de exigÃªncias', 20, 'OBTENÃ‡AO DO ITBI/NÃƒO-INCIDÃŠNCIA', 'Pendente', '24/04/2013 - 00:10:23', NULL),
(82, 'Deferimento', 20, 'OBTENÃ‡AO DO ITBI/NÃƒO-INCIDÃŠNCIA', 'Pendente', '24/04/2013 - 00:10:37', NULL),
(83, 'PreparaÃ§Ã£o croqui', 18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', 'Pendente', '24/04/2013 - 00:11:05', NULL),
(84, 'Levantamento in loco', 18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', 'Pendente', '24/04/2013 - 00:11:29', NULL),
(85, 'ElaboraÃ§Ã£o de plantas/relatÃ³rio', 18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', 'Pendente', '24/04/2013 - 00:11:52', NULL),
(86, 'RevisÃ£o', 18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', 'Pendente', '24/04/2013 - 00:12:07', NULL),
(87, 'Entrega', 18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', 'Pendente', '24/04/2013 - 00:12:22', NULL),
(88, 'Levantamento dados comerciais', 10, 'AVALIAÃ‡ÃƒO DE IMÃ“VEIS', 'Pendente', '24/04/2013 - 00:12:44', NULL),
(89, 'TabulaÃ§Ã£o de dados', 10, 'AVALIAÃ‡ÃƒO DE IMÃ“VEIS', 'Pendente', '24/04/2013 - 00:13:14', NULL),
(90, 'RevisÃ£o', 10, 'AVALIAÃ‡ÃƒO DE IMÃ“VEIS', 'Pendente', '24/04/2013 - 00:13:29', NULL),
(91, 'Entrega', 10, 'AVALIAÃ‡ÃƒO DE IMÃ“VEIS', 'Pendente', '24/04/2013 - 00:13:52', NULL),
(99, 'ObtenÃ§Ã£o', 1, 'ALVARÃ DE FUNCIONAMENTO', 'Concluido', '24/04/2013 - 16:45:19', '18/05/2013 - 01:15:04'),
(93, 'Encaminhamento complementares', 17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', 'Pendente', '24/04/2013 - 00:14:42', NULL),
(94, 'ExecuÃ§Ã£o arquitetura', 17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', 'Pendente', '24/04/2013 - 00:15:01', NULL),
(95, 'CompatibilizaÃ§Ã£o complementares', 17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', 'Pendente', '24/04/2013 - 00:15:19', NULL),
(96, 'RevisÃ£o', 17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', 'Pendente', '24/04/2013 - 00:15:34', NULL),
(97, 'Entrega', 17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', 'Pendente', '24/04/2013 - 00:15:48', NULL),
(98, 'Deferimento', 9, 'ARQUIVAMENTO DE ATAS JUNTA COMERCIAL', 'Pendente', '24/04/2013 - 00:30:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_proset`
--

CREATE TABLE IF NOT EXISTS `tbl_proset` (
  `PROSET_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PROSET_NOME` varchar(50) NOT NULL,
  `PROSET_DTCAD` varchar(30) DEFAULT NULL,
  `PROSET_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PROSET_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `tbl_proset`
--

INSERT INTO `tbl_proset` (`PROSET_CODIGO`, `PROSET_NOME`, `PROSET_DTCAD`, `PROSET_DTALT`) VALUES
(1, 'ALVARÃ DE FUNCIONAMENTO', '23/04/2013 - 22:51:20', NULL),
(2, 'ALVARÃ SANITÃRIO', '23/04/2013 - 22:51:35', NULL),
(3, 'APROVAÃ‡ÃƒO DE PPCI', '23/04/2013 - 22:51:43', NULL),
(4, 'APROVAÃ‡ÃƒO DE PROJETO', '23/04/2013 - 22:51:53', NULL),
(5, 'APROVAÃ‡ÃƒO MEIO AMBIENTE', '23/04/2013 - 22:52:03', NULL),
(6, 'APROVAÃ‡ÃƒO PATRIMÃ´NIO HISTÃ“RICO', '23/04/2013 - 22:52:15', NULL),
(7, 'APROVAÃ‡ÃƒO PROJETO DE SEGURANÃ‡A PREFEITURA', '23/04/2013 - 22:52:24', NULL),
(8, 'APROVAÃ‡ÃƒO PROJETO DESDOBRO', '23/04/2013 - 22:52:32', NULL),
(9, 'ARQUIVAMENTO DE ATAS JUNTA COMERCIAL', '23/04/2013 - 22:52:40', NULL),
(10, 'AVALIAÃ‡ÃƒO DE IMÃ“VEIS', '23/04/2013 - 22:52:48', NULL),
(11, 'AVCB', '23/04/2013 - 22:52:57', NULL),
(12, 'AVERBAÃ‡ÃƒO/REGISTRO', '23/04/2013 - 22:53:04', NULL),
(13, 'ELABORAÃ‡ÃƒO DE AS BUILT', '23/04/2013 - 22:53:15', NULL),
(14, 'ELABORAÃ‡ÃƒO DE EVTL', '23/04/2013 - 22:53:25', NULL),
(15, 'ELABORAÃ‡ÃƒO DE PPCI', '23/04/2013 - 22:53:38', NULL),
(16, 'ELABORAÃ‡ÃƒO DE PROJETO', '23/04/2013 - 22:53:48', NULL),
(17, 'ELABORAÃ‡ÃƒO PROJETOS EXECUTIVOS', '23/04/2013 - 22:53:56', NULL),
(18, 'LEVANTAMENTO TOPOGRÃFICO/PLANIMÃ‰TRICO', '23/04/2013 - 22:54:04', NULL),
(19, 'LICENÃ‡A DE PUBLICIDADE', '23/04/2013 - 22:54:12', NULL),
(20, 'OBTENÃ‡ÃƒO DE GUIAS DIVERSAS', '23/04/2013 - 22:54:21', NULL),
(21, 'OBTENÃ‡ÃƒO DE MATRÃCULA', '23/04/2013 - 22:54:30', NULL),
(22, 'OBTENÃ‡AO DO ITBI/NÃƒO-INCIDÃŠNCIA', '23/04/2013 - 22:54:38', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_prosub`
--

CREATE TABLE IF NOT EXISTS `tbl_prosub` (
  `PROSUB_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PROSUB_ID` int(50) NOT NULL,
  `PROSUB_NOME` varchar(50) NOT NULL,
  `PROSUB_DTCAD` varchar(30) DEFAULT NULL,
  `PROSUB_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PROSUB_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `tbl_prosub`
--

INSERT INTO `tbl_prosub` (`PROSUB_CODIGO`, `PROSUB_ID`, `PROSUB_NOME`, `PROSUB_DTCAD`, `PROSUB_DTALT`) VALUES
(1, 0, 'Acompanhamento', '23/04/2013 - 22:54:54', NULL),
(2, 0, 'Atendimento de exigÃªncias', '23/04/2013 - 22:55:04', NULL),
(4, 0, 'CompatibilizaÃ§Ã£o complementares', '23/04/2013 - 22:55:30', NULL),
(5, 0, 'ConclusÃ£o', '23/04/2013 - 22:55:39', NULL),
(6, 0, 'Consulta Ã  LegislaÃ§Ã£o', '23/04/2013 - 22:55:48', NULL),
(7, 0, 'Deferimento', '23/04/2013 - 22:56:24', NULL),
(8, 0, 'DepÃ³sito de emolumentos', '23/04/2013 - 22:56:34', NULL),
(9, 0, 'Desenho', '23/04/2013 - 22:56:42', NULL),
(10, 0, 'ElaboraÃ§Ã£o das plantas', '23/04/2013 - 22:56:51', NULL),
(11, 0, 'ElaboraÃ§Ã£o de plantas/relatÃ³rio', '23/04/2013 - 22:57:04', NULL),
(12, 0, 'ElaboraÃ§Ã£o requerimento', '23/04/2013 - 22:57:13', NULL),
(13, 0, 'EmissÃ£o de ART', '23/04/2013 - 22:57:23', NULL),
(14, 0, 'Encaminhamento complementares', '23/04/2013 - 22:57:32', NULL),
(15, 0, 'Entrega', '23/04/2013 - 22:57:42', NULL),
(16, 0, 'ExecuÃ§Ã£o arquitetura', '23/04/2013 - 22:57:50', NULL),
(17, 0, 'Levantamento dados comerciais', '23/04/2013 - 22:58:00', NULL),
(18, 0, 'Levantamento in loco', '23/04/2013 - 22:58:10', NULL),
(19, 0, 'Montagem do relatÃ³rio', '23/04/2013 - 22:58:21', NULL),
(20, 0, 'ObtenÃ§Ã£o', '23/04/2013 - 22:58:30', NULL),
(21, 0, 'Pagamento taxas', '23/04/2013 - 22:58:38', NULL),
(22, 0, 'Pedido ao cartÃ³rio', '23/04/2013 - 22:58:46', NULL),
(23, 0, 'PreparaÃ§Ã£o croqui', '23/04/2013 - 22:58:57', NULL),
(24, 0, 'Protocolo', '23/04/2013 - 22:59:06', NULL),
(25, 0, 'Protocolo do processo', '23/04/2013 - 22:59:17', NULL),
(26, 0, 'Recebimento das plantas/lay-outs', '23/04/2013 - 22:59:25', NULL),
(27, 0, 'Recebimento do lay-out', '23/04/2013 - 22:59:35', NULL),
(28, 0, 'RecepÃ§Ã£o da certidÃ£o', '23/04/2013 - 22:59:46', NULL),
(29, 0, 'RevisÃ£o', '23/04/2013 - 22:59:56', NULL),
(30, 0, 'SolicitaÃ§Ã£o ao Ã³rgÃ£o', '23/04/2013 - 23:00:08', NULL),
(31, 0, 'TabulaÃ§Ã£o de dados', '23/04/2013 - 23:00:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_servicos`
--

CREATE TABLE IF NOT EXISTS `tbl_servicos` (
  `SER_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `SER_ID` int(50) NOT NULL,
  `SER_NOME` varchar(50) DEFAULT NULL,
  `SER_STATUS` varchar(50) DEFAULT NULL,
  `SER_CLIENTE` varchar(50) DEFAULT NULL,
  `SER_IMOVEL` varchar(50) DEFAULT NULL,
  `SER_PROCESSO` varchar(50) DEFAULT NULL,
  `SER_TECNICO` varchar(50) DEFAULT NULL,
  `SER_DTEXPEDICAO` varchar(50) DEFAULT NULL,
  `SER_DTCONCLUSAO` varchar(50) DEFAULT NULL,
  `SER_DTCAD` varchar(30) DEFAULT NULL,
  `SER_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SER_CODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tarefas`
--

CREATE TABLE IF NOT EXISTS `tbl_tarefas` (
  `TAR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TAR_CLIENTE_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_CLIENTE_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_IMOVEL_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_IMOVEL_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_PROCESSO_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_PROCESSO_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_SERVICO_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_SERVICO_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_TECNICO_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_TECNICO_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_HONORARIOS_VALOR` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_EMOLUMENTOS_VALOR` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_EMOLUMENTOS_VALOR` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_SERVICO_VALOR` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_SERVICO_DATA` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_COMISSAO_VALOR` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_STATUS` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_POST` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_DTCAD` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_DTALT` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`TAR_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tbl_tarefas`
--

INSERT INTO `tbl_tarefas` (`TAR_CODIGO`, `TAR_CLIENTE_NOME`, `TAR_CLIENTE_CODIGO`, `TAR_IMOVEL_NOME`, `TAR_IMOVEL_CODIGO`, `TAR_PROCESSO_NOME`, `TAR_PROCESSO_CODIGO`, `TAR_SERVICO_NOME`, `TAR_SERVICO_CODIGO`, `TAR_TECNICO_NOME`, `TAR_TECNICO_CODIGO`, `TAR_HONORARIOS_VALOR`, `TAR_EMOLUMENTOS_VALOR`, `TAR_STATUS`, `TAR_POST`, `TAR_DTCAD`, `TAR_DTALT`) VALUES
(2, 'ItaÃº', '55', 'Alagoas', '183', 'ALVARÃ DE FUNCIONAMENTO', '1', 'Protocolo', '1', 'Diones Diego', '12', '1.000,00', '110,00', 'Pendente', 'Renata Siqueira de Oliveira', '05/06/2013 - 17:44:29', '05/06/2013 - 17:51:35'),
(4, 'AtacadÃ£o', '52', 'GuarujÃ¡', '60', 'ALVARÃ DE FUNCIONAMENTO', '1', 'Protocolo', '1', 'Victor Anselmo', '14', '0,00', '0,00', 'Pendente', 'Renata Siqueira de Oliveira', '05/06/2013 - 18:06:32', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tecnicos`
--

CREATE TABLE IF NOT EXISTS `tbl_tecnicos` (
  `TEC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TEC_NIVEL` char(1) NOT NULL,
  `TEC_NOME` varchar(50) NOT NULL,
  `TEC_LOGIN` char(6) NOT NULL,
  `TEC_EMAIL` varchar(50) NOT NULL,
  `TEC_SENHA` text NOT NULL,
  `TEC_CPF` char(14) DEFAULT NULL,
  `TEC_CNPJ` char(18) DEFAULT NULL,
  `TEC_CEP` varchar(9) DEFAULT NULL,
  `TEC_ENDERECO` varchar(50) DEFAULT NULL,
  `TEC_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `TEC_BAIRRO` varchar(50) DEFAULT NULL,
  `TEC_CIDADE` varchar(50) DEFAULT NULL,
  `TEC_NUMERO` char(10) DEFAULT NULL,
  `TEC_UF` char(2) DEFAULT NULL,
  `TEC_TELFIXO` varchar(20) DEFAULT NULL,
  `TEC_TELNOME` varchar(50) DEFAULT NULL,
  `TEC_TELCEL` varchar(20) DEFAULT NULL,
  `TEC_OBS` varchar(255) DEFAULT NULL,
  `TEC_BCO` char(3) DEFAULT NULL,
  `TEC_AG` char(6) DEFAULT NULL,
  `TEC_CC` char(10) DEFAULT NULL,
  `TEC_DV` char(2) DEFAULT NULL,
  `TEC_DTCAD` varchar(30) DEFAULT NULL,
  `TEC_DTALT` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`TEC_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tbl_tecnicos`
--

INSERT INTO `tbl_tecnicos` (`TEC_CODIGO`, `TEC_NIVEL`, `TEC_NOME`, `TEC_LOGIN`, `TEC_EMAIL`, `TEC_SENHA`, `TEC_CPF`, `TEC_CNPJ`, `TEC_CEP`, `TEC_ENDERECO`, `TEC_COMPLEMENTO`, `TEC_BAIRRO`, `TEC_CIDADE`, `TEC_NUMERO`, `TEC_UF`, `TEC_TELFIXO`, `TEC_TELNOME`, `TEC_TELCEL`, `TEC_OBS`, `TEC_BCO`, `TEC_AG`, `TEC_CC`, `TEC_DV`, `TEC_DTCAD`, `TEC_DTALT`) VALUES
(13, '1', 'Renata Siqueira de Oliveira', 'renata', 'renata@grupospconsult.com.br', 'NDY2OQ==', '395.308.738-08', '', '01307-000', 'Rua: Frei Caneca', '1903', 'ConsolaÃ§Ã£o', 'SÃ£o Paulo', '558', 'SP', '11Â 4669-1150', 'Renata', '11Â 9Â 8730-3329', '', '', '', '', '', '16/05/2013 - 18:11:56', '20/05/2013 - 12:24:32'),
(14, '1', 'Victor Anselmo', 'victor', 'victor@grupospconsult.com.br', 'MTIzNDU2', '220.403.268-98', '', '01307-000', 'Rua: Frei Caneca', '1903', 'ConsolaÃ§Ã£o', 'SÃ£o Paulo', '558', 'SP', '', 'Victor', '', '', '', '', '', '', '14/05/2013 - 12:45:13', '14/05/2013 - 18:10:05'),
(15, '1', 'Rogerio Luis Polita', 'roger', 'rogerio@grupospconsult.com.br', 'c3AxMjM0', '495.207.330-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20/05/2013 - 16:51:42', '20/05/2013 - 16:53:06'),
(12, '1', 'Diones Diego', 'diones', 'ddas1507@gmail.com', 'NjU0MzIx', '333.827.088-76', '', '03934-070', 'Rua: Guilherme Wundt', 'Casa', 'Jardim Imperador (Zona Leste)', 'SÃ£o Paulo', '10', 'SP', '11Â 2725-3384', 'Diones', '11Â 9Â 9547-8869', '', '341', '1063', '', '6', '27/05/2013 - 00:30:22', '27/05/2013 - 00:45:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
