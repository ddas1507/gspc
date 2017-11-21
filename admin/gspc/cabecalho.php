<?php 
	session_start();
	$codigo = $_SESSION['sessao_codigo_usuario'];
	$nome = $_SESSION['sessao_nome_usuario'];
	$cliente = $_REQUEST['cliente'];
	$img = $_REQUEST['cliimg'];
?>
<table border="0" class="tabela-cabecalho">
	<tr>
		<td style=" float: left; ">
			<a href="index.php"><img src="images/others/logo.png" border="0" alt="" title="SPConsult" class="logo" /></a>
		</td>
		<td style=" float: right; ">
			<table border="0">
				<tr>
					<td>
						<table>
							<tr>
								<td >
									<table border="0">
										<tr>
											<td align="center" valign="center">
											<? if($img == NULL){echo '';}else{?><img src="images/clientes/<?php echo $img;?>" border="0" width="64px" alt="<? echo $cliente;?>" title="<? echo $cliente;?>"/><?}?>
											</td>
										</tr>
									</table>
								</td>
								<td style=" border-left: 1px solid #ccc; ">
									<label></label>
								</td>								
								<td >
									<table border="0">
										<tr>
											<td align="center">
												<a href="index.php?tabela=detalhesTecnicos&acao=detalhesTecnicos&codigo=<?php echo $codigo;?>"><img src="images/others/user-m.png" width="24px" /></a>
											</td>
										</tr>
										<tr>
											<td align="center">
												<a href="index.php?tabela=detalhesTecnicos&acao=detalhesTecnicos&codigo=<?php echo $codigo;?>">
													<?php 
														echo $nome;
													?>
												</a>
											</td>
										</tr>
									</table>
								</td>
								<td style=" border-left: 1px solid #ccc; ">
									<label></label>
								</td>
								<td >
									<table border="0">
										<tr>
											<td align="center">
												<a href="../logoff.php"><img src="images/others/encerrar.png" width="24px" /></a>
											</td>
										</tr>
										<tr>
											<td align="center">
												<a href="../logoff.php">Encerrar Sess&atilde;o</a>
											</td>
										</tr>
									</table>
								</td>							
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="5">
		<img src="images/others/sub-logo.png" border="0" class="sub-logo"/>
		</td>
	</tr>
</table>