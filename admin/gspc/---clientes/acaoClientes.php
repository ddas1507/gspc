<?php
	require('manutencaoClientes.php');
		$oquefazer = new manutencaoClientes();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarClientes'){
		$oquefazer->listarClientes();
		require('listarClientes.php');
	}
	
	if($acao == 'formularioCadastrarClientes'){
		require('formularioCadastrarClientes.php');
	}

	if($acao == 'gravarClientes'){
		$oquefazer->gravarClientes();
		$oquefazer->listarClientes();
		require('listarClientes.php');
	}
	
	if($acao == 'formularioAlterarClientes'){
		$oquefazer->formularioAlterarClientes();
		require('formularioAlterarClientes.php');
	}
	
	if($acao == 'detalhesClientes'){
		$oquefazer->detalhesClientes();
		//$oquefazer->listarOutrosImoveisdoMesmoCliente();
		require('detalhesClientes.php');
	}
	
	if($acao == 'gravarAlteracaoClientes'){
		$oquefazer->gravarAlteracaoClientes();
		$oquefazer->listarClientes();
		require('listarClientes.php');
	}
	
	if($acao == 'excluirClientes'){
		$oquefazer->excluirClientes();
		$oquefazer->listarClientes();
		require('listarClientes.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>