<?php
	session_start();
	
	if(isset($_POST['quadroTarefas'])){
		$_SESSION['quadroTarefas'] = $_POST['quadroTarefas'];
	}
	
	if(!$_SESSION['sessao_codigo_usuario']){
		require('../util/funcoes.php');
		direciona('../index.php');
	}
	else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR">
		<head>
			<title>SP CONSULT</title>
			<?php require('metas/meta.php');?>
			<?php require('scripts/script.php');?>
			<?php require('links/link.php');?>
		</head>
		<body style="margin: 0; font-family: Arial;">
			<table border="0" align="center">
				<tr><td colspan="2"><?php require('cabecalho.php');?></td></tr>
				<tr style=" height: 500px; ">
					<td valign="top"><?php require('menu.php');?></td>
					<td width="100%" valign="top"><?php require('direcoes.php');?></td>
				</tr>
				<tr><td width="100%" colspan="4"><?php require('rodape.php');?></td></tr>
			</table>
		</body>
	</html>
<?php
	}
?>