<?php
	session_start();

	$senha = $_REQUEST['tec_senha'];
	$usuario = $_REQUEST['tec_senha'];

	if($usuario != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_tecnicos2 where TEC_LOGIN = '".$usuario."' AND TEC_SENHA = '".$senha."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Acesso Permitido!");
/*SESSÃO DE DADOS DO USUARIO*/
				session_register('sessao_codigo_usuario');
				$_SESSION['sessao_codigo_usuario'] = $registro->TEC_CODIGO;
				session_register('sessao_nivel_usuario');
				$_SESSION['sessao_nivel_usuario'] = $registro->TEC_NIVEL;
/*SESSÃO DE DADOS DO USUARIO*/
				
/*SESSÃO DE DADOS DO CLIENTE*/
				session_register('sessao_img_cliente');
				$_SESSION['sessao_img_cliente'] = $registro->IMG_CLIENTE;
				session_register('sessao_codigo_cliente');
				$clicod = $_SESSION['sessao_codigo_cliente'] = $registro->CODIGO_CLIENTE;
				session_register('sessao_nome_cliente');
				$_SESSION['sessao_nome_cliente'] = $registro->NOME_CLIENTE;
/*SESSÃO DE DADOS DO CLIENTE*/

/*SESSÃO DE DADOS DO IMOVEL*/
				session_register('sessao_codigo_imovel');
				$imocod = $_SESSION['sessao_codigo_imovel'] = $registro->CODIGO_IMOVEL;
				session_register('sessao_nome_imovel');
				$imonome = $_SESSION['sessao_nome_imovel'] = $registro->NOME_IMOVEL;
				session_register('sessao_ref_imovel');
				$imoref = $_SESSION['sessao_ref_imovel'] = $registro->REF_IMOVEL;
/*SESSÃO DE DADOS DO IMOVEL*/

				direciona('clientes/index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&imocod='.$imocod.'&img='.$imoref.'&cliente='.$imonome.'&clicod='.$clicod);
				exit;
				
			}
			else{
				alerta("Dados incorretos, Por favor verificar!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha os campos de usuario e senha!!!</center>';
	}
?>