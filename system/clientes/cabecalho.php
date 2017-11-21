<?php 
	session_start();
	$codigo = $_SESSION['sessao_codigo_usuario'];
	
	$nome_cliente = $_SESSION['sessao_nome_cliente'];
	$img = $_SESSION['sessao_img_cliente'];
	$clicod = $_SESSION['sessao_codigo_cliente'];
	$usercod = $_SESSION['sessao_codigo_imovel'];
	$imonome = $_SESSION['sessao_nome_imovel'];
	$imoref = $_SESSION['sessao_ref_imovel'];
	$nome_imovel = $_SESSION['sessao_nome_imovel'];
	$ref_imovel = $_SESSION['sessao_ref_imovel'];
	$cliente = $_REQUEST['cliente'];
	
?>
<table border="0" class="tabela-cabecalho">
	<tr>
		<td style=" float: left; ">
			<a href="<?php echo 'index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&imocod='.$usercod.'&img='.$imoref.'&cliente='.$imonome.'&clicod='.$clicod?>"><img src="images/others/logo.png" border="0" alt="" title="SPConsult" class="logo" /></a>
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
								<td >
									<table border="0">
										<tr><td align="center"><img src="images/others/user-m.png" width="24px" /></a></td></tr>
										<tr><td align="center">
										<a href="index.php?tabela=detalhesTecnicos2&acao=detalhesTecnicos2&codigo=<?php echo $codigo;?>">
											<?php echo $nome_cliente.' / '.$ref_imovel.' - '.$nome_imovel;?>
										</a>
										</td></tr>
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