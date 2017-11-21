<?php
	require('manutencaoAcervo.php');
		$oquefazer = new manutencaoAcervo();
			echo $acao = $_REQUEST['acao'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($acao == 'listarAcervo'){
		$oquefazer->listarAcervo();
		require('listarAcervo.php');
	}
	
	if($acao == 'formularioCadastrarAcervo'){
		require('formularioCadastrarAcervo.php');
	}

	if($acao == 'gravarAcervo'){
		$oquefazer->gravarAcervo();
		$oquefazer->listarAcervo();
		require('listarAcervo.php');
	}
	
	if($acao == 'excluirAcervo'){
		$oquefazer->excluirAcervo();
		$oquefazer->listarAcervo();
		require('listarAcervo.php');
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
	
?>