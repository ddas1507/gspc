<script>
function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)
	
	if (texto.substring(0,1) != saida){
		src.value += texto.substring(0,1);
	}
} 

function proximoCampo(atual,proximo){
	if(atual.value.length >= atual.maxLength){
		document.getElementById(proximo).focus();
	}
}
</script>
<? $imocod = $_REQUEST['imocod']?>
<? $clicod = $_REQUEST['clicod']?>
<form name="formularioCadastrarClientes" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Acervo Digital</b></li>
						<li>></li>
						<li>Cadastrar Novo Documento</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Acervo Digital</legend>
					<table>
						<tr><td>Nome:</td><td><input type="text" name="acervo_descricao" id="acervo_descricao" size="100px" maxlength="50" required="required" /></td></tr>
						<tr><td>N&uacute;mero:</td><td><input type="text" name="acervo_numero" id="acervo_numero" size="100px" maxlength="50" required="required" /></td></tr>
						<tr><td>Vencimento:</td><td><input type="text" name="acervo_dtvencimento" id="acervo_dtvencimento" size="15px" maxlength="10" onkeyup="proximoCampo(this, 'img_descricao')" onkeypress="mascara(this, '##/##/####')" required="required"/></td></tr>
						<tr><td>Foto:</td><td><input type="file" name="img_descricao" id="img_descricao" size="100px" maxlength="50" required="required" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td>
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" 
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarAcervo" name="tabela"/>
					<input type="hidden" value="gravarAcervo" name="acao"/>
					<input type="hidden" value="<?echo $imocod;?>" name="imocod"/>
					<input type="hidden" value="<?echo $clicod;?>" name="clicod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>