<?php
	require('manutencaoProcessosSetup.php');
		$oquefazer = new manutencaoProcessosSetup();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'ProcessosSetup'){
		require('ProcessosSetup.php');
	}
	if($acao == 'listarProcessosSetup'){
		$oquefazer->listarProcessosSetup();
		require('listarProcessosSetup.php');
	}
	
	if($acao == 'formularioCadastrarProcessosSetup'){
		require('formularioCadastrarProcessosSetup.php');
	}

	if($acao == 'gravarProcessosSetup'){
		$oquefazer->gravarProcessosSetup();
		$oquefazer->listarProcessosSetup();
		require('listarProcessosSetup.php');
	}
	
	if($acao == 'formularioAlterarProcessosSetup'){
		$oquefazer->formularioAlterarProcessosSetup();
		require('formularioAlterarProcessosSetup.php');
	}
	
	if($acao == 'detalhesProcessosSetup'){
		$oquefazer->detalhesProcessosSetup();
		require('detalhesProcessosSetup.php');
	}
	
	if($acao == 'gravarAlteracaoProcessosSetup'){
		$oquefazer->gravarAlteracaoProcessosSetup();
		$oquefazer->listarProcessosSetup();
		require('listarProcessosSetup.php');
	}
	
	if($acao == 'excluirProcessosSetup'){
		$oquefazer->excluirProcessosSetup();
		$oquefazer->listarProcessosSetup();
		require('listarProcessosSetup.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>