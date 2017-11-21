<?php 
session_start();
$usuario = $_REQUEST['tec_login'];
$email = $_REQUEST['tec_email'];
$nome = $_SESSION['sessao_nome_usuario'];
$senha = $_SESSION['sessao_senha_usuario'];

$headers  = utf8_decode("From: Grupo SPConsult - Lembrete de Senha\r\n");
$headers .= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n";

	$conteudo='
	Olá '.$nome.'!
	Sua senha de acesso ao painel administravito é:'.base64_decode($senha).'
	Caso tenha duvidas ou dificuldades de acesso contate o desenvolvedor do sistema!
	Cordialmente
	SPConsult
	';
	
	mail("$email", "Grupo SPConsult - Lembrete de Senha", "$conteudo", $headers);
?>
<html>
	<head>
		<title>SPConsult</title>
			<link type="text/css" href="master/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="index.php" >
		<tr><td align="center"><center><img src="master/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Senha enviada para o seu email!</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table width="100%">
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="Voltar"
										/>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>

		</tr>
		<tr><td align="center"><a href="formrecuperarusuario.php">Esqueceu seu nome de us&uacute;ario?</label></a></td></tr>
		<tr><td align="center"><a href="#"><label >&nbsp;</label></a></td></tr>
	</form>
</table>
</body>
</html>