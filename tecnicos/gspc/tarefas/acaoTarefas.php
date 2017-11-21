<?php
	require('manutencaoTarefas.php');
		$oquefazer = new manutencaoTarefas();
			$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarTarefas'){
		$oquefazer->listarTarefasConsultaProcessos();
		require('listarTarefas.php');
	}
	
	if($acao == 'form-list-clientes-tarefas'){
		$oquefazer->listarClientes();/*lista todos os clientes em ordem alfabetica*/
		require('formularioCadastrarTarefasParte1.php');
	}	
	if($acao == 'form-list-imoveis-tarefas'){
		$oquefazer->listarImoveis();/*lista todos os imoveis em ordem alfabetica*/
		require('formularioCadastrarTarefasParte2.php');
	}
	
	if($acao == 'form-list-processos-tarefas'){
		$oquefazer->listarProcessos();/*lista todos os processos em ordem alfabetica*/
		require('formularioCadastrarTarefasParte3.php');
	}
	
	if($acao == 'form-list-servicos-tarefas'){
		$oquefazer->listarServicos();/*lista todos os serviços em ordem alfabetica*/
		require('formularioCadastrarTarefasParte4.php');
	}
	
	if($acao == 'form-list-tecnicos-tarefas'){
		$oquefazer->listarTecnicos();/*lista todos os tecnicos em ordem alfabetica*/
		require('formularioCadastrarTarefasParte5.php');
	}
	
	if($acao == 'form-list-honorarios-tarefas'){
		require('formularioCadastrarTarefasParte6.php');
	}
	
	if($acao == 'form-list-status-tarefas'){
		require('formularioCadastrarTarefasParte7.php');
	}
	
	if($acao == 'form-list-gravar-tarefas'){
		//$oquefazer->gravarTarefas();
		$oquefazer->gravarTarefas();
		$oquefazer->gravarTarefasComProcessos();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasProcessos();
		require('imoveis/detalhesImoveis-consulta-processos.php');
	}

	if($acao == 'status-confirmar-tarefas'){
		$oquefazer->statusAlterarConfirmar();
		$oquefazer->listarTarefas();
		require('listarTarefas.php');
	}	
	
	if($acao == 'status-desfazer-tarefas'){
		$oquefazer->statusAlterarDesfazer();
		$oquefazer->listarTarefas();
		require('listarTarefas.php');
	}	
	
	if($acao == 'excluirTarefas'){
		$oquefazer->excluirTarefas();
		$oquefazer->excluirProcessosAnexados();		
		$oquefazer->listarTarefas();
		require('listarTarefas.php');
	}
	
	if($acao == 'detalhesImoveis-consulta-servicos'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasServicos();
		require('detalhesImoveis-consulta-servicos.php');
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>