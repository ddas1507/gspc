<?php
	require('manutencaoProcessosSub.php');
		$oquefazer = new manutencaoProcessosSub();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarProcessosSub'){
		$oquefazer->listarProcessosSub();
		require('listarProcessosSub.php');
	}
	
	if($acao == 'formularioCadastrarProcessosSub'){
		require('formularioCadastrarProcessosSub.php');
	}

	if($acao == 'gravarProcessosSub'){
		$oquefazer->gravarProcessosSub();
		$oquefazer->listarProcessosSub();
		require('listarProcessosSub.php');
	}
	
	if($acao == 'formularioAlterarProcessosSub'){
		$oquefazer->formularioAlterarProcessosSub();
		require('formularioAlterarProcessosSub.php');
	}
	
	if($acao == 'detalhesProcessosSub'){
		$oquefazer->detalhesProcessosSub();
		require('detalhesProcessosSub.php');
	}
	
	if($acao == 'gravarAlteracaoProcessosSub'){
		$oquefazer->gravarAlteracaoProcessosSub();
		$oquefazer->listarProcessosSub();
		require('listarProcessosSub.php');
	}
	
	if($acao == 'excluirProcessosSub'){
		$oquefazer->excluirProcessosSub();
		$oquefazer->listarProcessosSub();
		require('listarProcessosSub.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>