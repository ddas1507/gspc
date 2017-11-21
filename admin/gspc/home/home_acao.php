<?php
	
	require('home_manutencao.php');
	
	$oque_fazer = new home_manutencao();
	
	$acao = $_REQUEST['acao'];
	
	 if($acao == 'listar'){$oque_fazer->relatorio_cadastros();require('home_relatorio.php');}

?>