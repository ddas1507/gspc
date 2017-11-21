<?php
	require('manutencaoTecnicos2.php');
		$oquefazer = new manutencaoTecnicos2();
			echo $acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarTecnicos2'){$oquefazer->listarTecnicos2();require('listarTecnicos2.php');}
	
	if($acao == 'formularioCadastrarTecnicos2Parte1'){$oquefazer->listarClientes();require('formularioCadastrarTecnicos2Parte1.php');}/*lista todos os clientes em ordem alfabetica*/
	if($acao == 'formularioCadastrarTecnicos2Parte2'){$oquefazer->listarImoveis();require('formularioCadastrarTecnicos2Parte2.php');}/*lista todos os imoveis do cliente em ordem alfabetica*/
	if($acao == 'formularioCadastrarTecnicos2Parte3'){require('formularioCadastrarTecnicos2Parte3.php');}/*lista todos os clientes em ordem alfabetica*/
	
	if($acao == 'formularioCadastrarTecnicosParte2'){require('formularioCadastrarTecnicosParte2.php');}
	if($acao == 'gravarTecnicos2'){$oquefazer->gravarTecnicos2();$oquefazer->listarTecnicos2();require('listarTecnicos2.php');}
	if($acao == 'formularioAlterarTecnicos2'){$oquefazer->formularioAlterarTecnicos2();require('formularioAlterarTecnicos2.php');}
	if($acao == 'detalhesTecnicos2'){$oquefazer->detalhesTecnicos2();require('detalhesTecnicos2.php');}
	if($acao == 'gravarAlteracaoTecnicos2'){$oquefazer->gravarAlteracaoTecnicos2();$oquefazer->listarTecnicos2();require('listarTecnicos2.php');}
	if($acao == 'excluirTecnicos2'){$oquefazer->excluirTecnicos2();$oquefazer->listarTecnicos2();require('listarTecnicos2.php');}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>