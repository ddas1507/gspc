<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod = $_REQUEST['imocod'];
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
		<tr style=" text-align:center; font-weight:bold;" colspan="5"><td><?php echo $oquefazer->registros->TAR_PROCESSO_NOME;?></td></tr>
	</tr>
	<tr>
		<td valign="top" style=" border: 1px solid #ccc; width: 100%; background: #fff;">
			<table class="tabelas-consulta" border="0">
				<form name="formularioCadastrarDadosImoveis" action="index.php" method="post" enctype="multipart/form-data">
					<tr style=" font-size: 12px; ">
						<td class="titulo-tabelas">Nome da Tarefas</td>
						<td class="titulo-tabelas">Valor do Servi&ccedil;o</td>
						<td class="titulo-tabelas">Data do evento</td>
						<td class="titulo-tabelas">Percentual do evento</td>
						<td class="titulo-tabelas">T&eacute;cnico</td>
						<td class="titulo-tabelas" style="width: 235px;">Op&ccedil;&otilde;es</td>
					</tr>
					<tr style=" font-size: 12px; ">
						<td class="titulo-tabelas"><input type="text" name="nomeServico" id="nomeServico" size="25" value="<?php echo $oquefazer->registros->TAR_SERVICO_NOME;?>" style=" text-align: center;" disabled /></td>
						<td class="titulo-tabelas"><input type="text" name="valordaTarefa" id="valordaTarefa" size="4" value="<?php echo $oquefazer->registros->VALORDATAREFA;?>" style=" text-align: center; " placeholder="Digite um valor" onKeyPress="return(MascaraMoeda(this,'.',',',event))"/></td>
						<td class="titulo-tabelas">
							<input type="text" name="dataTarefaDia" id="dataTarefaDia" size="2" maxlength="2" value="<?php echo $oquefazer->registros->DATATAREFADIA;?>" style=" text-align: center; ">/
							<input type="text" name="dataTarefaMes" id="dataTarefaMes" size="2" maxlength="2" value="<?php echo $oquefazer->registros->DATATAREFAMES;?>" style=" text-align: center; ">/
							<input type="text" name="dataTarefaAno" id="dataTarefaAno" size="4" maxlength="4" value="<?php echo $oquefazer->registros->DATATAREFAANO;?>" style=" text-align: center; ">
						</td>
						<td class="titulo-tabelas"><input type="text" name="percentTarefa" id="percentTarefa" size="4" maxlength="4" value="<?php echo $oquefazer->registros->PERCENTTAREFA;?>" style=" text-align: center; "/></td>
						<td class="titulo-tabelas"><input type="text" name="nomeTecnico" id="nomeTecnico" value="<?php echo $oquefazer->registros->TAR_TECNICO_NOME;?>" style=" text-align: center; " disabled /></td>
						<td class="titulo-tabelas">
							<input 
							class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
							type="submit" value="Alterar" name="Alterar"
							/>
							&nbsp;
							<input 
							class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
							type="reset" value="Restaurar" name="Restaurar"
							/>
							<input type="hidden" value="gravarAlteracaosImoveisServicos" name="tabela"/>
							<input type="hidden" value="gravarAlteracaosImoveisServicos" name="acao"/>
							<input type="hidden" value="<?php echo $oquefazer->registros->TAR_CODIGO;?>" name="tarcod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $nprocesso;?>" name="nprocesso"/>
						</td>
					</tr>
				</form>
			</table>
		</td>
	</tr>
</table>