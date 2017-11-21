<?php
	require('manutencaoServicos.php');
		$oquefazer = new manutencaoServicos();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarServicos'){
		$oquefazer->listarServicos();
		require('listarServicos.php');
	}

	if($acao == 'formularioCadastrarServicos'){
		require('formularioCadastrarServicos.php');
	}

	if($acao == 'IniciarServico'){
		$oquefazer->IniciarServico();
		$oquefazer->listarServicos();
		require('listarServicos.php');
	}

	if($acao == 'gravarServicos'){
		$oquefazer->gravarServicos();
		$oquefazer->listarServicos();
		require('listarServicos.php');
	}

	if($acao == 'formularioAlterarServicos'){
		$oquefazer->formularioAlterarServicos();
		require('formularioAlterarServicos.php');
	}

	if($acao == 'detalhesServicos'){
		$oquefazer->detalhesServicos();
		require('detalhesServicos.php');
	}

	if($acao == 'gravarAlteracaoServicos'){
		$oquefazer->gravarAlteracaoServicos();
		$oquefazer->listarServicos();
		require('listarServicos.php');
	}

	if($acao == 'excluirServicos'){
		$oquefazer->excluirServicos();
		$oquefazer->listarServicos();
		require('listarServicos.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		

?>