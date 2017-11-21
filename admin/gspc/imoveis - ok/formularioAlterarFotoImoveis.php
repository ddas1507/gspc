<? $clicod = $_REQUEST['clicod']?>
<? $imocod = $_REQUEST['imocod']?>
<form name="formularioAlterarFotoImoveis" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Unidades</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarImoveis&acao=listarImoveis">Consultar Unidades Cadastradas</a></b></li>
						<li>></li>
						<li>Atualizar Foto</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Foto principal</legend>
					<table>
						<td >Unidade:</td><td ><input type="text" name="imo_nome" id="imo_nome" size="100px" value="<?php echo $oquefazer->registros->IMO_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="imo_img" id="imo_img" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>	
		<tr >
			<td colspan="2">
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar"
					/>
						&nbsp;
					<input 
						class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
				<input type="hidden" value="gravarAlteracaoFotoImoveis" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoFotoImoveis" name="acao"/>
				<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
				<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
			</td>
		</tr>
	</table>
</form>