<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$codigo	= $oquefazer->registros->IMO_CODIGO;
	$clinome	= $oquefazer->registros->CLI_NOME;
	$nome	= $oquefazer->registros->IMO_NOME;
	$cep	= $oquefazer->registros->IMO_CEP;
	$endereco	= $oquefazer->registros->IMO_ENDERECO;
	$complemento	= $oquefazer->registros->IMO_COMPLEMENTO;
	$bairro	= $oquefazer->registros->IMO_BAIRRO;
	$cidade	= $oquefazer->registros->IMO_CIDADE;
	$numero	= $oquefazer->registros->IMO_NUMERO;
	$uf		= $oquefazer->registros->IMO_UF;
	$imotel	= $oquefazer->registros->IMO_TEL;
	$imotelnome	= $oquefazer->registros->IMO_TELNOME;
	$obs	= $oquefazer->registros->IMO_OBS;
	$img	= $oquefazer->registros->IMO_IMG;
	$dtcad	= $oquefazer->registros->IMO_DTCAD;
	$dtalt	= $oquefazer->registros->IMO_DTALT;
	$fax	= $oquefazer->registros->IMO_FAX;
	$email	= $oquefazer->registros->IMO_EMAIL;
	$uso	= $oquefazer->registros->IMO_TERRENO_USO;
	$terreno_iptu	= $oquefazer->registros->IMO_TERRENO_IPTU;
	$terreno_registrodeimoveis	= $oquefazer->registros->IMO_TERRENO_REGISTRO_IMOVEIS;
	$terreno_topografia	= $oquefazer->registros->IMO_TERRENO_TOPOGRAFIA;
	$terreno_contribuintes	= $oquefazer->registros->IMO_TERRENO_CONTIBUINTES;
	$areaconstruida_projetoaprovado	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_PROJETO_APROVADO;
	$areaconstruida_averbada	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_AVERBADA;
	$areaconstruida_iptu	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_IPTU;
	$areaconstruida_matricula	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_MATRICULA;
	$areaconstruida_tomb_historico	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_TOMB_HISTORICO;
?>
<table class="tabela-nevegacao" >
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Unidades</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarImoveis&acao=listarImoveis">Consultar Unidades Cadastradas</a></b></li>
					<li>></li>
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table class="imoveis-fundo-dados-gerais">
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 3%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 25%;">Dados da Unidade</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 4%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 65%;">
			<table style=" width: 100%; ">
				<tr>
					<td align="left">
						Consulta de processos
					</td>
					<td>
						<form>					
							<input 
								class="bt-consultar-processo" onmouseover="this.className='bt-consultar-processoOver'" onmouseout="this.className='bt-consultar-processo'"
								type="submit" value="Consultar processo" name="Consultar processo" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="acao"/>
							<input type="hidden" value="<?php echo $codigo;?>" name="codigo"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
					<td>
						<input 
							class="bt-acervo-digital" onmouseover="this.className='bt-acervo-digitalOver'" onmouseout="this.className='bt-acervo-digital'"
							type="submit" value="Acervo digital" name="Acervo digital" 
						/>
					</td>
					<td>
						<input 
							class="bt-financeiro" onmouseover="this.className='bt-financeiroOver'" onmouseout="this.className='bt-financeiro'"
							type="submit" value="Financeiro" name="Financeiro" 
						/>
					</td>
				</tr>
			
			</table>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
	</tr>
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
		<td valign="top" style=" border: 1px solid #ccc; width: 25%; background: #fff;">
			<table style=" margin: 20px; max-width: 250px; font-size: 15px;" border="0">
				<tr><td valign="top" style="color:#069; font-weight:bold; height:50px">Descri&ccedil;&atilde;o da unidade selecionada</td></tr>
				<tr>
					<td valign="top" style="height:60px;">
						<label >
							<? echo $endereco;?>,
							<? echo $numero;?>&nbsp;
							CEP&nbsp;<? echo $cep?>,
							<? echo $bairro;?>&nbsp-&nbsp;
							<? echo $cidade;?>-<? echo $uf;?>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" align="center">
						<form name="" action="index.php" method="post" enctype="multipart/form-data">
							<input 
								class="bt-consultar-dados-gerais" onmouseover="this.className='bt-consultar-dados-geraisOver'" onmouseout="this.className='bt-consultar-dados-gerais'"
								type="submit" value="Consultar dados gerais" name="Consultar Dados Gerais" 
							/>
							<input type="hidden" value="detalhesImoveis-dados-gerais" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-dados-gerais" name="acao"/>
							<input type="hidden" value="<? echo $codigo;?>" name="codigo"/>
							<input type="hidden" value="<? echo $clinome;?>" name="cliente"/>
							<input type="hidden" value="<? echo $clicod;?>" name="clicod"/>
						</form>
					</td>
				</tr>
				<tr><td valign="top" align="center"><img src="images/imoveis/<?php echo $img;?>" border="0" width="250px"/></td></tr>
				<tr>
					<td valign="top" align="center">
						<form name="" action="index.php" method="post" enctype="multipart/form-data">
							<input 
								class="bt-consultar-dados-gerais" onmouseover="this.className='bt-consultar-dados-geraisOver'" onmouseout="this.className='bt-consultar-dados-gerais'"
								type="submit" value="Ver imagens da unidade" name="Ver imagens da unidade" 
							/>
							<input type="hidden" value="detalhesImoveis-imagens-galeria" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-imagens-galeria" name="acao"/>
							<input type="hidden" value="<? echo $codigo;?>" name="codigo"/>
							<input type="hidden" value="<? echo $clinome;?>" name="cliente"/>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 4%;"></td>
		<td valign="top" style=" border: 1px solid #ccc; width: 65%; background: #fff;">
		<table class="tabelas-consulta" >
				<tr>
					<td class="titulo-tabelas">Processo</td>
					<td class="titulo-tabelas">Servi&ccedil;o</td>
					<td class="titulo-tabelas">T&eacute;cnico</td>
					<td class="titulo-tabelas">Status</td>
					<td class="titulo-tabelas">Confirmar</td>
				</tr>
				<?php
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$tarcodigo	= $oquefazer->registros->TAR_CODIGO;
						$processo	= $oquefazer->registros->TAR_PROCESSO_NOME;
						$nprocesso	= $oquefazer->registros->TAR_PROCESSO_CODIGO;
						$servico	= $oquefazer->registros->TAR_SERVICO_NOME;
						$tecnico	= $oquefazer->registros->TAR_TECNICO_NOME;
						$status	= $oquefazer->registros->TAR_STATUS;
				?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><?echo $nprocesso;?></td>
					<td class="dados-tabelas" title="<?php echo $processo;?>" alt="<?php echo $processo;?>"><?echo $servico;?></td>
					<td class="dados-tabelas"><?echo $tecnico;?></td>
					<td class="dados-tabelas">
						<?php
							if($status == 'Pendente'){
								echo '
								<table align="center" width="100%">
								<tr>
									<td valign="center">
										<img src=images/others/pendente.png width=24px />
									</td>
									<td align="left" valign="center">
										'.$status.'
									</td>
								</tr>
								</table>
								';
							}
							else if($status == 'Concluido'){
								echo '
								<table align="center" width="100%">
								<tr>
									<td valign="center">
										<img src=images/others/concluido.png width=24px />
									</td>
									<td align="left" valign="center">
										'.$status.'
									</td>
								</tr>
								</table>
								';
							}
						?>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=status-confirmar-tarefas-detalhes-processos&acao=status-confirmar-tarefas-detalhes-processos&codigo=<? echo $codigo;?>&tarcodigo=<? echo $tarcodigo;?>">
							<img src="images/others/ok.png" title="Concluir" title="Concluir" border="0" width="24px">
						</a>
					</td>
				</tr>
				<?php
				} ?>			
			<tr>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
			</tr>
			<tr>
				<table width="100%" border="0">
					<tr><td colspan="3">&nbsp;</td></tr>
					<tr>
						<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 25%;">
						Detalhes do processo:</td>
						<td><?php echo $nprocesso?></td>
						<td>
							<table width="100%" border="0" align="right">
								<tr>
									<td>
										<table>
											<tr>
												<td align="center">
													<a href="#"><img src="images/others/print.png" width="25%" title="Imprimir" alt="Imprimir"/></a>
												</td>
											</tr>
											<tr>
												<td align="center">
													<a href="#">Imprimir</a>
												</td>
											</tr>
										</table>
									</td>
									<td>
										<table>
											<tr>
												<td align="center">
													<a href="#"><img src="images/others/send.png" width="25%" title="Enviar" alt="Enviar"/></a>
												</td>
											</tr>
											<tr>
												<td align="center">
													<a href="#">Enviar</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr><td colspan="3">&nbsp;</td></tr>
					<tr>
						<td><b>Tarefa:&nbsp;</b><?php echo $processo;?></td>
						<td><b>Ocorr&ecirc;ncia:&nbsp;</b><?php echo $processo;?></td>
					</tr>
					<tr><td colspan="3">&nbsp;</td></tr>
					<tr>
						<td colspan="3"><b>Conteudo da ocorr&ecirc;ncia;&nbsp;</b><?php echo $processo;?></td>
					</tr>
					<tr><td colspan="3">&nbsp;</td></tr>
					<tr>
						<td ><b>Conclus&atilde;o;&nbsp;</b><?php echo $processo;?></td>
						<td><b>Percentual de conclus&atilde;o:&nbsp;</b><?php echo $processo;?></td>
						<td><b>Status:&nbsp;</b><?php echo $processo;?></td>
					</tr>
				</table>
			</tr>
		</table>	
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 3%;"></td>
	</tr>
</table>