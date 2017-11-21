ALTER TABLE tbl_tarefas
ADD DATATAREFADIA INT(2) DEFAULT NULL, 
ADD DATATAREFAMES INT(2) DEFAULT NULL, 
ADD DATATAREFAANO INT(2) DEFAULT NULL;

CREATE TABLE IF NOT EXISTS `tbl_tarefasProcessos` (
  `TAR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TAR_CLIENTE_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_CLIENTE_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_IMOVEL_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_IMOVEL_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_PROCESSO_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_PROCESSO_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_TECNICO_NOME` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_TECNICO_CODIGO` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `TAR_HONORARIOS_VALOR` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `DATATAREFADIA` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `DATATAREFAMES` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `DATATAREFAANO` varchar(4) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_STATUS` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `TAR_STATUS2` int(11) DEFAULT NULL,
  `TAR_POST` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_DTCAD` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `TAR_DTALT` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`TAR_CODIGO`)
);