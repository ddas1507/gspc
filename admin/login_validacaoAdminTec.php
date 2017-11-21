<?php
	session_start();
	
$usuario = $_REQUEST['tec_login'];
$senha = base64_encode($_REQUEST['tec_senha']);

	if($usuario != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_tecnicos where TEC_LOGIN = '".$usuario."' AND TEC_SENHA = '".$senha."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Acesso Permitido!");
				
				session_register('sessao_codigo_usuario');
				$_SESSION['sessao_codigo_usuario'] = $registro->TEC_CODIGO;
				
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_nome_usuario'] = $registro->TEC_NOME;

				session_register('sessao_nivel_usuario');
				$cargo = $_SESSION['sessao_nivel_usuario'] = $registro->TEC_NIVEL;
				
				if($cargo == 1 ){
					direciona('gspc/index.php');
				}
				else{
					direciona('../tecnicos');
				}
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