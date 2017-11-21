<?php 
	  require('../util/conecta.php');
		$tabela = $_REQUEST['tabela'];

/*INICIO - TECNICOS E ADMINISTRADORES DO SISTEMA ##############################################################################*/
		if($tabela == "listarTecnicos") require('tecnicos/acaoTecnicos.php');
		if($tabela == "formularioCadastrarTecnicos") require('tecnicos/acaoTecnicos.php');
		if($tabela == "gravarTecnicos") require('tecnicos/acaoTecnicos.php');		
		if($tabela == "formularioAlterarTecnicos") require('tecnicos/acaoTecnicos.php');		
		if($tabela == "gravarAlteracaoTecnicos") require('tecnicos/acaoTecnicos.php');		
		if($tabela == "excluirTecnicos") require('tecnicos/acaoTecnicos.php');		
		if($tabela == "detalhesTecnicos") require('tecnicos/acaoTecnicos.php');		
/*FINAL - TECNICOS E ADMINISTRADORES DO SISTEMA ##############################################################################*/

/*INICIO - TECNICOS LIMITADOS COM ACESSOS DE CLIENTES ########################################################################*/
		if($tabela == "listarTecnicos2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "formularioCadastrarTecnicos2Parte1") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "formularioCadastrarTecnicos2Parte2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "formularioCadastrarTecnicos2Parte3") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "gravarTecnicos2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "formularioAlterarTecnicos2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "gravarAlteracaoTecnicos2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "excluirTecnicos2") require('tecnicos2/acaoTecnicos2.php');
		if($tabela == "detalhesTecnicos2") require('tecnicos2/acaoTecnicos2.php');
/*FINAL - TECNICOS LIMITADOS COM ACESSOS DE CLIENTES ########################################################################*/

/*INICIO - CLIENTES ###########################################################################################################*/
		if($tabela == "listarClientes") require('clientes/acaoClientes.php');
		if($tabela == "formularioCadastrarClientes") require('clientes/acaoClientes.php');
		if($tabela == "gravarClientes") require('clientes/acaoClientes.php');
		if($tabela == "formularioAlterarClientes") require('clientes/acaoClientes.php');
		if($tabela == "gravarAlteracaoClientes") require('clientes/acaoClientes.php');
		if($tabela == "excluirClientes") require('clientes/acaoClientes.php');
		if($tabela == "detalhesClientes") require('clientes/acaoClientes.php');
/*FINAL  - CLIENTES ###########################################################################################################*/
			
/*INICIO - IMOVEIS ###########################################################################################################*/
		if($tabela == "listarImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "formularioCadastrarImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "formularioCadastrarDadosImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "gravarDadosImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "formularioAlterarImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "formularioAlterarFotoImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "gravarAlteracaoImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "gravarAlteracaosImoveisServicos") require('imoveis/acaoImoveis.php');
		if($tabela == "gravarAlteracaoFotoImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "excluirImoveis") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-dados-gerais") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-processos") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-processos-editar") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-processos-alterar") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-servicos") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-servicos-alterar") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-financeiro") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-servicos-financeiro") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-consulta-acervo") require('imoveis/acaoImoveis.php');

		if($tabela == "status-confirmar-tarefas-detalhes-processos") require('imoveis/acaoImoveis.php');
		if($tabela == "status-desfazer-tarefas-detalhes-processos") require('imoveis/acaoImoveis.php');
		if($tabela == "detalhesImoveis-listar-imagens") require('imoveis/acaoImoveis.php');
/*FINAL  - IMOVEIS ###########################################################################################################*/
			
/*INICIO - PROCESSOS ###########################################################################################################*/
		if($tabela == "listarProcessos") require('processos/acaoProcessos.php');
		if($tabela == "formularioCadastrarProcessos") require('processos/acaoProcessos.php');
		if($tabela == "gravarProcessos") require('processos/acaoProcessos.php');
		if($tabela == "formularioAlterarProcessos") require('processos/acaoProcessos.php');
		if($tabela == "gravarAlteracaoProcessos") require('processos/acaoProcessos.php');
		if($tabela == "excluirProcessos") require('processos/acaoProcessos.php');
		if($tabela == "detalhesProcessos") require('processos/acaoProcessos.php');
/*FINAL  - PROCESSOS ###########################################################################################################*/
			
/*INICIO - PROCESSOS SETUP ###########################################################################################################*/
		if($tabela == "ProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "listarProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "formularioCadastrarProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "gravarProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "formularioAlterarProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "gravarAlteracaoProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "excluirProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
		if($tabela == "detalhesProcessosSetup") require('processosSetup/acaoProcessosSetup.php');
/*FINAL  - PROCESSOS SETUP ###########################################################################################################*/

/*INICIO - PROCESSOS SUB ###########################################################################################################*/
		//if($tabela == "ProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "listarProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "formularioCadastrarProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "gravarProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "formularioAlterarProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "gravarAlteracaoProcessosSub") require('processosSetup/acaoProcessosSub.php');
		if($tabela == "excluirProcessosSub") require('processosSetup/acaoProcessosSub.php');
		//if($tabela == "detalhesProcessosSub") require('processosSetup/acaoProcessosSub.php');
/*FINAL  - PROCESSOS SETUP ###########################################################################################################*/

/*INICIO - SERVICOS ###########################################################################################################*/
		if($tabela == "listarServicos") require('servicos/acaoServicos.php');
		if($tabela == "formularioCadastrarServicos") require('servicos/acaoServicos.php');
		if($tabela == "gravarServicos") require('servicos/acaoServicos.php');
		if($tabela == "formularioAlterarServicos") require('servicos/acaoServicos.php');
		if($tabela == "gravarAlteracaoServicos") require('servicos/acaoServicos.php');
		if($tabela == "excluirServicos") require('servicos/acaoServicos.php');
		if($tabela == "detalhesServicos") require('servicos/acaoServicos.php');
		if($tabela == "IniciarServico") require('servicos/acaoServicos.php');
/*FINAL  - SERVICOS ###########################################################################################################*/

/*INICIO - TAREFAS ###########################################################################################################*/
		if($tabela == "form-list-clientes-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-imoveis-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-processos-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-servicos-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-tecnicos-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-honorarios-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-emolumentos-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-status-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "form-list-gravar-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "listarTarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "status-confirmar-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "status-desfazer-tarefas") require('tarefas/acaoTarefas.php');
		if($tabela == "excluirTarefas") require('tarefas/acaoTarefas.php');
/*FINAL  - TAREFAS ###########################################################################################################*/


/*INICIO - ACERVO ###########################################################################################################*/
		if($tabela == "listarAcervo") require('acervo/acaoAcervo.php');
		if($tabela == "formularioCadastrarAcervo") require('acervo/acaoAcervo.php');
		/*if($tabela == "gravarImagens") require('acervo/acaoAcervo.php');*/
		if($tabela == "gravarAcervo") require('imoveis/acaoImoveis.php');
		if($tabela == "excluirAcervo") require('imoveis/acaoImoveis.php');
/*FINAL  - ACERVO ###########################################################################################################*/
	
/*INICIO - SERVICOS ###########################################################################################################*/
		if($tabela == "listarImagens") require('imagens/acaoImagens.php');
		if($tabela == "formularioCadastrarImagens") require('imagens/acaoImagens.php');
		/*if($tabela == "gravarImagens") require('imagens/acaoImagens.php');*/
		if($tabela == "gravarImagens") require('imoveis/acaoImoveis.php');
		if($tabela == "excluirImagens") require('imagens/acaoImagens.php');
/*FINAL  - SERVICOS ###########################################################################################################*/
			
		else
			require('principal.php');
?>	