<?php
$email = $_REQUEST['tec_email'];
$senha = base64_encode($_REQUEST['tec_senha']);

	if($email != '' || $senha != ''){
		require('util/conecta.php');
		
		$sql = "SELECT * FROM tbl_tecnicos where TEC_EMAIL = '".$email."' AND TEC_SENHA = '".$senha."' ";
			$resultado = $con->banco->Execute($sql);
			if($registro = $resultado->FetchNextObject()){
				//alerta("Dados Localizados!");
				session_register('sessao_nome_usuario');
				$_SESSION['sessao_nome_usuario'] = $registro->TEC_NOME;

				session_register('sessao_login_usuario');
				$_SESSION['sessao_login_usuario'] = $registro->TEC_LOGIN;
				
				direciona('mostrausuario.php');
				exit;
			}
			else{
				alerta("Dados incorretos!");
				voltar();
				exit; 
			}
	}
	else{
		echo '<center>Preencha os campos de e-mail e senha!!!</center>';
	}
?>