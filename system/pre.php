<?php 
	  require('util/conecta.php');
		echo '<b>Tabela: </b>'. $tabela = $_REQUEST['tabela'];

/*INICIO - TECNICOS E ADMINISTRADORES DO SISTEMA ##############################################################################*/
		if($tabela == "PageLoginCliente") require('PageLoginCliente.php');
		if($tabela == "PageLoginAdminTec") require('PageLoginAdminTec.php');
/*FINAL - TECNICOS E ADMINISTRADORES DO SISTEMA ##############################################################################*/
?>	