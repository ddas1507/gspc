<?php
	require('manutencaoProcessos.php');
		$oquefazer = new manutencaoProcessos();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarProcessos'){
		$oquefazer->listarProcessos();
		require('listarProcessos.php');
	}
	
	if($acao == 'formularioCadastrarProcessos'){
		require('formularioCadastrarProcessos.php');
	}

	if($acao == 'gravarProcessos'){
		$oquefazer->gravarProcessos();
		$oquefazer->listarProcessos();
		require('listarProcessos.php');
	}
	
	if($acao == 'formularioAlterarProcessos'){
		$oquefazer->formularioAlterarProcessos();
		require('formularioAlterarProcessos.php');
	}
	
	if($acao == 'detalhesProcessos'){
		$oquefazer->detalhesProcessos();
		require('detalhesProcessos.php');
	}
	
	if($acao == 'gravarAlteracaoProcessos'){
		$oquefazer->gravarAlteracaoProcessos();
		$oquefazer->listarProcessos();
		require('listarProcessos.php');
	}
	
	if($acao == 'excluirProcessos'){
		$oquefazer->excluirProcessos();
		$oquefazer->listarProcessos();
		require('listarProcessos.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>