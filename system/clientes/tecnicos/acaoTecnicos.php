<?php
	require('manutencaoTecnicos.php');
		$oquefazer = new manutencaoTecnicos();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarTecnicos'){
		$oquefazer->listarTecnicos();
		require('listarTecnicos.php');
	}
	
	if($acao == 'formularioCadastrarTecnicos'){
		require('formularioCadastrarTecnicos.php');
	}

	if($acao == 'gravarTecnicos'){
		$oquefazer->gravarTecnicos();
		$oquefazer->listarTecnicos();
		require('listarTecnicos.php');
	}
	
	if($acao == 'formularioAlterarTecnicos'){
		$oquefazer->formularioAlterarTecnicos();
		require('formularioAlterarTecnicos.php');
	}
	
	if($acao == 'detalhesTecnicos'){
		$oquefazer->detalhesTecnicos();
		require('detalhesTecnicos.php');
	}
	
	if($acao == 'gravarAlteracaoTecnicos'){
		$oquefazer->gravarAlteracaoTecnicos();
		$oquefazer->listarTecnicos();
		require('listarTecnicos.php');
	}
	
	if($acao == 'excluirTecnicos'){
		$oquefazer->excluirTecnicos();
		$oquefazer->listarTecnicos();
		require('listarTecnicos.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>