<html>
	<head>
		<title>Acesso ao sistema</title>
			<link type="text/css" href="gspc/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
		<tr><td align="center"><center><img src="gspc/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Seja bem-vindo!<br/>Por favor, selecione um tipo de acesso</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table align="center" width="90%">
					<tr>
						<td>
							<table align="center" width="100%">
								<tr>
									<td>
										<form action="PageLoginCliente.php" method="post">
											<input 
												class="bt-loginHome" onmouseover="this.className='bt-loginHomeOver'" onmouseout="this.className='bt-loginHome'"
												type="submit" value="Cliente" name="Cliente" 
											/>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										<form action="PageLoginAdminTec.php" method="post">
											<input 
												class="bt-loginHome" onmouseover="this.className='bt-loginHomeOver'" onmouseout="this.className='bt-loginHome'"
												type="submit" value="Administrador / T&eacute;cnico" name="Administrador / T&eacute;cnico" 
											/>
										</form>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr><td align="center"><label >&nbsp;</label></td></tr>
</table>
</body>
</html>