<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod	= $oquefazer->registros->IMO_CODIGO;
	$clinome	= $oquefazer->registros->CLI_NOME;
	$nome	= $oquefazer->registros->IMO_NOME;
	$ref	= $oquefazer->registros->IMO_REF;
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
					<li><b>Consultar Unidades Cadastradas</b></li>
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
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 25%;">
			<div style=" border: 0px solid; ">
				<div style=" width: 150px; float: left; ">Dados da unidade</div>
				<div style=" border: 0px solid #f00; width: 24px; float: right; ">
					<a href="index.php?tabela=form-list-processos-tarefas&acao=form-list-processos-tarefas&clicod=<? echo $clicod;?>&nome_cliente=<? echo $clinome;?>&img_cliente=<? echo $img_cliente;?>&codigo_imovel=<? echo $imocod;?>&ref_imovel=<? echo $ref;?>&nome_imovel=<? echo $nome;?>" >
						<img width="25px" title="Adicionar Novo Processo" alt="Adicionar Novo Processo" src="http://dionesjobs.com/admin/gspc/images/others/add.png" border="0" />
					</a>
				</div>
			</div>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 4%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 12px; width: 65%;">
			<table style=" width: 100%; ">
				<tr>
					<td align="left">
						Consulta de processos
					</td>
					<td>
						<form action="index.php" method="post">
							<input 
								class="bt-consultar-processo" onmouseover="this.className='bt-consultar-processoOver'" onmouseout="this.className='bt-consultar-processo'"
								type="submit" value="Consultar processo" name="Consultar processo" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
					<td>
						<form action="index.php" method="post">
							<input 
								class="bt-acervo-digital" onmouseover="this.className='bt-acervo-digitalOver'" onmouseout="this.className='bt-acervo-digital'"
								type="submit" value="Acervo digital" name="Acervo digital" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-acervo" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-acervo" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clinome;?>" name="cliente"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>							
						</form>
					</td>
					<td>
						<form action="index.php" method="post">
							<input
								class="bt-financeiro" onmouseover="this.className='bt-financeiroOver'" onmouseout="this.className='bt-financeiro'"
								type="submit" value="Financeiro" name="Financeiro" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-financeiro" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-financeiro" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
				</tr>
			
			</table>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
	</tr>
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
		<td valign="top" style=" border: 1px solid #ccc; width: 25%; background: #fff;">
			<table style=" margin: 20px; max-width: 250px; font-size: 12px;" border="0">
				<tr><td valign="top" style="color:#069; font-weight:bold; height:50px">Descri&ccedil;&atilde;o da unidade selecionada</td></tr>
				<tr><td><label style="font-weight:bold;">Cliente:&nbsp;</label><label><? echo $clinome;?></label></tr>
				<tr><td><label style="font-weight:bold;">Unidade:&nbsp;</label><label><? echo $nome;?></label>&nbsp;<label style="font-weight:bold;">Ref:&nbsp;</label><label><? echo $ref;?></label></td></tr>
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
							<input type="hidden" value="<? echo $imocod;?>" name="imocod"/>
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
							<input type="hidden" value="detalhesImoveis-listar-imagens" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-listar-imagens" name="acao"/>
							<input type="hidden" value="<? echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<? echo $clinome;?>" name="cliente"/>
							<input type="hidden" value="<? echo $clicod;?>" name="clicod"/>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 4%;"></td>
		<td valign="top" style=" border: 1px solid #ccc; width: 65%; background: #fff;">
		<table class="tabelas-consulta" >
				<tr style=" font-size: 12px; ">
					<td class="titulo-tabelas">Processo</td>
					<td class="titulo-tabelas">Servi&ccedil;o</td>
					<td class="titulo-tabelas">T&eacute;cnico</td>
					<td class="titulo-tabelas">Status</td>
				</tr>
				<?php
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$tarcodigo	= $oquefazer->registros->TAR_CODIGO;
						$processo	= $oquefazer->registros->TAR_PROCESSO_NOME;
						$nprocesso	= $oquefazer->registros->TAR_PROCESSO_CODIGO;
						$numeroProcesso	= $oquefazer->registros->TAR_PROCESSO_NUMERO;
						$servico	= $oquefazer->registros->TAR_SERVICO_NOME;
						$tecnico	= $oquefazer->registros->TAR_TECNICO_NOME;
						$dataprocessodia	= $oquefazer->registros->DATATAREFADIA;
						$dataprocessomes	= $oquefazer->registros->DATATAREFAMES;
						$dataprocessoano	= $oquefazer->registros->DATATAREFAANO;
						$status	= $oquefazer->registros->TAR_STATUS;
						$datadecadastro	= $oquefazer->registros->TAR_DTCAD;

						$statusAtualProcessos = $oquefazer->verificarTarefasServicosConcluidos($imocod, $nprocesso);
						$total = $oquefazer->totalTarefas;
						$concluidos = $oquefazer->tarefasConcluidas;
						
						if($total == $concluidos){
							$status = '<img src="images/others/ok.png" width="16px" border="0" /> <label>Concluido</label>';
						}
						else if($concluidos == 0){
							$status = '<img src="images/others/pendente.png" width="16px" border="0" /> <label>Pendente</label>';
						}
						else if($concluidos > 0 && $concluidos < $total){
							$status = '<img src="images/others/andamento.gif" width="16px" border="0" /> <label>Em Andamento</label>';
						}
						//$porcentagem = (($concluidos * 100) / $total);
				?>
				<tr onclick="location.href = 'index.php?tabela=detalhesImoveis-consulta-servicos&acao=detalhesImoveis-consulta-servicos&imocod=<? echo $imocod;?>&nprocesso=<? echo $nprocesso;?>&tarcodigo=<? echo $tarcodigo;?>&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar os dados dos servi&ccedil;os">
					<!--td class="dados-tabelas"><?//echo $dataprocessodia.'/'.$dataprocessomes.'/'.$dataprocessoano;?></td-->
					<td class="dados-tabelas">
						<table align="center">
							<tr>
								<td align="left"><?echo $numeroProcesso;?></td>
								<td align="right">
									<a href="index.php?tabela=detalhesImoveis-consulta-processos-editar&acao=detalhesImoveis-consulta-processos-editar&imocod=<? echo $imocod;?>&nprocesso=<? echo $nprocesso;?>&tarcodigo=<? echo $tarcodigo;?>&clicod=<? echo $clicod;?>" title="Editar" >
										<img src="images/others/update.png" title="Editar" border="0" width="16px" />
									</a>
								</td>
							</tr>
						</table>
					</td>
					<td class="dados-tabelas" title="<?php echo 'Clique para visualizar as tarefas';?>" ><?echo $processo;?></td>
					<td class="dados-tabelas" style=" text-transform: capitalize; "><?echo $tecnico;?></td>
					<td class="dados-tabelas" style="text-align:left;"><?echo $status;//.' - '.$porcentagem."%";?>
				</tr>
				<?php
				} ?>
			</table>