<?php
	require('manutencaoImoveis.php');
		$oquefazer = new manutencaoImoveis();
		$acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarImoveis'){
		$oquefazer->listarImoveis();
		require('listarImoveis.php');
	}

	if($acao == 'listarAcervo'){	
		$oquefazer->detalhesImoveis();
		$oquefazer->listarAcervo();
		require('detalhesImoveis-consulta-acervo.php');
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
	
	if($acao == 'detalhesImoveis-consulta-servicos'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasServicos();
		require('detalhesImoveis-consulta-servicos.php');
	}
	
	if($acao == 'detalhesImoveis-consulta-servicos-financeiro'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasServicos();
		require('detalhesImoveis-consulta-servicos-financeiro.php');
	}
	
	if($acao == 'detalhesImoveis-consulta-processos'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasProcessos();
		require('detalhesImoveis-consulta-processos.php');
	}
	
	if($acao == 'detalhesImoveis-consulta-acervo'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarAcervo();
		require('detalhesImoveis-consulta-acervo.php');
	}	
	
	if($acao == 'detalhesImoveis-consulta-financeiro'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasProcessos();
		require('detalhesImoveis-consulta-financeiro.php');
	}
	
	if($acao == 'detalhesImoveis-listar-imagens'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarImagens();
		require('detalhesImoveis-listar-imagens.php');
	}
		
	if($acao == 'detalhesImoveis-listar-acervo'){
		$oquefazer->detalhesImoveis();
		$oquefazer->listarAcervo();
		require('detalhesImoveis-listar-acervo.php');
	}

	if($acao == 'gravarImagens'){
		$oquefazer->gravarImagens();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarImagens();
		require('detalhesImoveis-listar-imagens.php');
	}

	if($acao == 'gravarAcervo'){
		$oquefazer->gravarAcervo();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarAcervo();
		require('detalhesImoveis-consulta-acervo.php');
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

	if($acao == 'excluirAcervo'){
		$oquefazer->excluirAcervo();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarAcervo();
		require('detalhesImoveis-consulta-acervo.php');
	}
	
	if($acao == 'status-confirmar-tarefas-detalhes-processos'){
		$oquefazer->statusAlterarConfirmar();
		$oquefazer->detalhesImoveis();
		$oquefazer->listarTarefasProcessos();
		require('detalhesImoveis-consulta-processos.php');
	}	
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>