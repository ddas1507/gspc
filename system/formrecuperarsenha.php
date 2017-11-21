<html>
	<head>
		<title>Recuperar Senha</title>
			<link type="text/css" href="master/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="recuperar_senha_validacao.php" >
		<tr><td align="center"><center><img src="master/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Recuperar senha de acesso</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">usu&aacute;rio:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_login" id="tec_login" size="30px" maxlength="15" placeholder="Digite seu usu&aacute;rio" /></td></tr>
								<tr><td><label class="login-labels">E-mail:</label></td></tr>
								<tr><td><input class="login-inputs" type="text" name="tec_email" id="tec_email" size="30px" maxlength="50" placeholder="Digite seu e-mail" /></td></tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="BUSCAR"
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
		<tr><td align="center"><a href="index.php"><label >Voltar</label></a></td></tr>
	</form>
</table>
</body>
</html>