<?php
	require('manutencaoImoveis.php');
		$oquefazer = new manutencaoImoveis();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarImoveis'){
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}
	
	if($acao == 'formularioCadastrarImoveis'){
		$oquefazer->listarClientes();	
		require('formularioCadastrarImoveis.php');
	}
	
	if($acao == 'formularioCadastrarDadosImoveis'){
		require('formularioCadastrarDadosImoveis.php');
	}

	if($acao == 'gravarDadosImoveis'){
		$oquefazer->gravarDadosImoveis();
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}
	
	if($acao == 'formularioAlterarImoveis'){
		$oquefazer->formularioAlterarImoveis();
		require('formularioAlterarImoveis.php');
	}

	if($acao == 'formularioAlterarFotoImoveis'){
		$oquefazer->formularioAlterarFotoImoveis();
		require('formularioAlterarFotoImoveis.php');
	}
	
	if($acao == 'detalhesImoveis-dados-gerais'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarOutrosImoveisdoMesmoCliente();
		require('detalhesImoveis-dados-gerais.php');
	}
	
	if($acao == 'detalhesImoveis-consulta-processos'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefas();
		require('detalhesImoveis-consulta-processos.php');
	}
	
	if($acao == 'gravarAlteracaoImoveis'){
		$oquefazer->gravarAlteracaoImoveis();
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}
	if($acao == 'gravarAlteracaoFotoImoveis'){
		$oquefazer->gravarAlteracaoFotoImoveis();
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}
	
	if($acao == 'excluirImoveis'){
		$oquefazer->excluirImoveis();
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}	
	
	if($acao == 'status-confirmar-tarefas-detalhes-processos'){
		$oquefazer->statusAlterarConfirmar();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefas();
		require('detalhesImoveis-consulta-processos.php');
	}	
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>