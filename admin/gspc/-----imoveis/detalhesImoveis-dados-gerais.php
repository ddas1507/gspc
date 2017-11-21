<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod	= $oquefazer->registros->IMO_CODIGO;
	$ref	= $oquefazer->registros->IMO_REF;
	$incraccir	= $oquefazer->registros->IMO_INCRACCIR;
	$rfbitr	= $oquefazer->registros->IMO_RFBITR;
	$cnpjfilial	= $oquefazer->registros->IMO_CNPJFILIAL;
	$propimovel	= $oquefazer->registros->IMO_PROPIMOVEL;
	$locacao	= $oquefazer->registros->IMO_LOCACAO;
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
					<li><b>Consultar unidades cadastradas</b></li>
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
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 25%;">Dados da unidade</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 4%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 12px; width: 65%;">
			<table style=" width: 100%; ">
				<tr>
					<td align="left">
						Unidade - Dados Gerais
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
							<input type="hidden" value="<?php echo $clinome;?>" name="cliente"/>
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
							<input type="hidden" value="<?php echo $clinome;?>" name="cliente"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 12px; width: 3%;">&nbsp;</td>
	</tr>
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 12px; width: 3%;">&nbsp;</td>
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
				<tr><td valign="top" align="left"><? echo $obs;?></td></tr>
				<tr><td valign="top" align="center"><img src="images/imoveis/<?php echo $img;?>" width="250px" style="border: 1px #ccc solid;"/></td></tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 4%;"></td>
		<td valign="top" style=" border: 1px solid #ccc; width: 65%; background: #fff;">
			<table border="0" style=" width: 100%; padding: 15px; font-size: 12px;">
				<tr>
					<td>
						<fieldset style=" border: 0px; "><legend style="color:#069; font-weight:bold;">Informa&ccedil;&otilde;es dispon&iacute;veis</legend>
							<table width="100%">
								<tr>
									<td><label class="labels-negrito">Endere&ccedil;o:</label>&nbsp;&nbsp;<? echo $endereco?></td>
									<td><label class="labels-negrito">N&uacute;mero:</label>&nbsp;&nbsp;<? echo $numero?></td>									
									<td><label class="labels-negrito">CEP:</label>&nbsp;&nbsp;<? echo $cep?></td>
									</tr>
								<tr>
									<td><label class="labels-negrito">Complemento:</label>&nbsp;&nbsp;<? echo $complemento?></td>
									<td><label class="labels-negrito">Bairro:</label>&nbsp;&nbsp;<? echo $bairro?></td>
									<td>
										<label class="labels-negrito">Cidade:</label>&nbsp;&nbsp;<? echo $cidade?>&nbsp;&nbsp;
										<label class="labels-negrito">Estado:</label>&nbsp;&nbsp;<? echo $uf?>
									</td>
								</tr>
								<tr>
									<td><label class="labels-negrito">Contato:</label>&nbsp;&nbsp;<? echo $imotelnome?></td>
									<td><label class="labels-negrito">Tel.Com:</label>&nbsp;&nbsp;<? echo $imotel?></td>
									<td><label class="labels-negrito">Fax:</label>&nbsp;&nbsp;<? echo $fax?></td>
								</tr>
								<tr>
									<td><label class="labels-negrito">Propriet&aacute;rio:</label>&nbsp;&nbsp;<? echo $propimovel;?></td>
									<td><label class="labels-negrito">CNPJ da Filial:</label>&nbsp;&nbsp;<? echo $cnpjfilial;?></td>
									<td><label class="labels-negrito">Email:</label>&nbsp;&nbsp;<? echo $email;?></td>
								</tr>
								<tr>
									<td><label class="labels-negrito">Ref</label>&nbsp;&nbsp;<? echo $ref;?></td>
									<td><label class="labels-negrito">Loca&ccedil;&atilde;o</label>&nbsp;&nbsp;<? echo $locacao;?></td>
								</tr>
								
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset style=" border: 0px; "><legend style="color:#069; font-weight:bold;">Area de terreno</legend>
							<table width="100%">
								<tr>
									<td><label class="labels-negrito">IPTU:</label>&nbsp;&nbsp;<? echo $terreno_iptu?></td>
									<td><label class="labels-negrito">Reg. de Unidade:</label>&nbsp;&nbsp;<? echo $terreno_registrodeimoveis?></td>
									<td><label class="labels-negrito">Topografia:</label>&nbsp;&nbsp;<? echo $terreno_topografia?></td>
									<td><label class="labels-negrito">N&deg; do Contribuinte:</label>&nbsp;&nbsp;<? echo $terreno_contribuintes?></td>
									<td><label class="labels-negrito">Uso:</label>&nbsp;&nbsp;<? //echo $uso?></td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset style=" border: 0px; "><legend style="color:#069; font-weight:bold;">&Aacute;rea constru&iacute;da</legend>
							<table width="100%">
								<td><label class="labels-negrito">Projeto aprovado::</label>&nbsp;&nbsp;<? echo $areaconstruida_projetoaprovado?></td>
								<td><label class="labels-negrito">Averbada:</label>&nbsp;&nbsp;<? echo $areaconstruida_averbada?></td>
								<td><label class="labels-negrito">IPTU:</label>&nbsp;&nbsp;<? echo $areaconstruida_iptu?></td>
								<td><label class="labels-negrito">N&deg; da Matricula:</label>&nbsp;&nbsp;<? echo $areaconstruida_matricula?></td>
								<td><label class="labels-negrito">Tomb. Historico:</label>&nbsp;&nbsp;<? //echo $areaconstruida_tomb_historico?></td>
							</table>
						</fieldset>
					</td>
				</tr>
			</table>		
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 3%;"></td>
	</tr>
</table>
<!--table style=" border-top: 1px solid #CCC; width: 100%; margin-top: 26px; ">
	<tr>
	<div id="corpo-tabela">
		<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
			<thead>	
				<tr>
				<th class="titulo-tabelas">Cliente</th>
				<th class="titulo-tabelas">Ref</th>
				<th class="titulo-tabelas">Unidade</th>
				<th class="titulo-tabelas">Visualizar</th>
				<th class="titulo-tabelas">Editar</th>
				<th class="titulo-tabelas">Foto</th>
				<th class="titulo-tabelas">Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				/*
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$imocod2	= $oquefazer->registros->IMO_CODIGO;
						
						$img	= $oquefazer->registros->IMO_IMG;
						$nome	= $oquefazer->registros->IMO_NOME;
						$ref	= $oquefazer->registros->IMO_REF;
						$clinome= $oquefazer->registros->CLI_NOME;
						$clicod = $oquefazer->registros->CLI_CODIGO;
						$cep	= $oquefazer->registros->IMO_CEP;
						$dtcad	= $oquefazer->registros->IMO_DTCAD;
						$dtalt	= $oquefazer->registros->IMO_DTALT;
				*/
				?>
				<tr onclick="location.href = 'index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&imocod=<? //echo $imocod2;?>&cliente=<? //echo $clinome;?>&clicod=<? //cho $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? //echo $clinome;?></td>
					<td class="dados-tabelas"><? //echo $ref;?></td>
					<td class="dados-tabelas"><? //echo $nome;?></td>
					
					<!--td class="dados-tabelas">
						<a href="index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&imocod=<? //echo $imocod2;?>&cliente=<? //echo $clinome;?>&clicod=<? //echo $clicod;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td-->
					<!--td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarImoveis&acao=formularioAlterarImoveis&imocod=<? // echo $imocod2;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarFotoImoveis&acao=formularioAlterarFotoImoveis&imocod=<? // echo $imocod2;?>">
							<img src="images/others/imagem.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir a unidade abaixo?\n\nCodigo: <?php //echo $id;?>\nUnidade: <?php //echo $nome;?>\nCEP: <?php //echo $cep;?>')) {location='index.php?tabela=excluirImoveis&acao=excluirImoveis&imocod=<? //echo $imocod2;?>';}">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
				<?php 
			//	} ?>
			</tbody>
		</table>
	</div>
	</tr>
</table-->