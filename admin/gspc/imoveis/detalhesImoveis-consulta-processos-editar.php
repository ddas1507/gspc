<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod = $_REQUEST['imocod'];
	$tarcodigo = $_REQUEST['tarcodigo'];
	$nprocesso = $_REQUEST['nprocesso'];
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
		<td valign="top" style=" border: 1px solid #ccc; width: 100%; background: #fff;">
			<table class="tabelas-consulta" border="0">
				<form name="formularioCadastrarDadosImoveis" action="index.php" method="post" enctype="multipart/form-data">
					<tr style=" font-size: 12px; ">
						<td class="titulo-tabelas" align="left">N&uacute;mero do Processo:&nbsp;<input type="text" name="numeroProcesso" id="numeroProcesso" size="25" maxlength="10" value="<?php echo $oquefazer->registros->TAR_PROCESSO_NUMERO;?>" style=" text-align: center;"/></td>
						<td class="titulo-tabelas" align="right">
							<input 
							class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
							type="submit" value="Alterar" name="Alterar"
							/>
							&nbsp;
							<input 
							class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
							type="reset" value="Restaurar" name="Restaurar"
							/>
							<input type="hidden" value="detalhesImoveis-consulta-processos-alterar" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-processos-alterar" name="acao"/>
							<input type="hidden" value="<?php echo $oquefazer->registros->TAR_CODIGO;?>" name="tarcod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $tarcodigo;?>" name="tarcodigo"/>
							<input type="hidden" value="<?php echo $nprocesso;?>" name="nprocesso"/>
						</td>
					</tr>
				</form>
			</table>
		</td>
	</tr>
</table>