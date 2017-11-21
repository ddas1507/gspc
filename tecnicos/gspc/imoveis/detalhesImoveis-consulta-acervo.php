<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod = $_REQUEST['imocod'];
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
					<li>Acervo digital</li>
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
			</div>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 4%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 12px; width: 65%;">
			<table style=" width: 100%; ">
				<tr>
					<td align="left">
						Acervo digital
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
				<tr><td><?echo $obs;?></td></tr>
				<tr><td valign="top" align="center"><img src="images/imoveis/<?php echo $img;?>" border="0" width="250px"/></td></tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 4%;"></td>
		<td valign="top" style=" border: 1px solid #ccc; width: 65%; background: #fff;">
			<table border="0" style=" width: 100%; padding: 15px; font-size: 12px;">
				<tr style=" font-size: 12px; ">
					<td colspan="6" align="center" style=" margin-top: 15px; margin-bottom: 10px; ">
						<label><a href="index.php?tabela=formularioCadastrarAcervo&acao=formularioCadastrarAcervo&imocod=<?echo $imocod;?>&clicod=<?echo $clicod;?>">Inserir novo documento</a></label>
					</td>
				</tr>
				<tr style=" font-size: 12px; ">
					<td class="titulo-tabelas">C&oacute;digo</td>
					<td class="titulo-tabelas">Documento</td>
					<td class="titulo-tabelas">N&uacute;mero</td>
					<td class="titulo-tabelas">Data</td>
					<td class="titulo-tabelas">Vencimento</td>
					<td class="titulo-tabelas">Opc&atilde;o</td>
				</tr>
				<?php
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$acervo_codigo	= $oquefazer->registros->IMG_CODIGO;
						$acervo_descricao	= $oquefazer->registros->ACERVO_DESCRICAO;
						$acervo_numero	= $oquefazer->registros->ACERVO_NUMERO;
						$acervo_dtvencimento	= $oquefazer->registros->ACERVO_DTVENCIMENTO;
						$img_descricao	= $oquefazer->registros->IMG_DESCRICAO;
						$img_dtcad	= $oquefazer->registros->IMG_DTCAD;
						$img_dtalt	= $oquefazer->registros->IMG_DTALT;
						$tar_status	= $oquefazer->registros->TAR_STATUS;
				?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $acervo_codigo;?></td>
					<td class="dados-tabelas"><? echo $acervo_descricao;?></td>
					<td class="dados-tabelas"><? echo $acervo_numero;?></td>
					<td class="dados-tabelas"><? echo $img_dtcad;?></td>
					<td class="dados-tabelas"><? echo $acervo_dtvencimento;?></td>
					<td >
						<a href="images/acervo/<? echo $img_descricao;?>" target="_blank">
							<img src="images/others/view.png" border="0" width="24px" alt="Visualizar Documento" title="Visualizar Documento" />
						</a>
					</td>
				</tr>
				<?php
				} ?>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 3%;"></td>
	</tr>
</table>