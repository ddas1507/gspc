<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#cli_cep").blur(function(e){
		if($.trim($("#cli_cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cli_cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#cli_endereco").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#cli_bairro").val(unescape(resultadoCEP["bairro"]));
					$("#cli_cidade").val(unescape(resultadoCEP["cidade"]));
					$("#cli_uf").val(unescape(resultadoCEP["uf"]));
				}else{
					alerta("Não foi possivel encontrar o endereço");
				}
			});				
		}		
	})
});
</script>
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

<form name="formularioCadastrarClientes" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Clientes</b></li>
						<li>></li>
						<li>Cadastrar Novo Cliente</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados do Cliente</legend>
					<table>
						<tr><td>Logomarca:</td><td><input type="file" name="cli_img" id="cli_img" size="100px" maxlength="50" required="required" /></td></tr>
						<tr><td>Nome:</td><td><input type="text" name="cli_nome" id="cli_nome" size="50px" maxlength="50" /><br /></td></tr>
						<tr><td>Raz&atilde;o Social:</td><td><input type="text" name="cli_razaosocial" id="cli_razaosocial" size="50px" maxlength="50"/></td></tr>
					</table>
				</fieldset>
			</td>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Informa&ccedil;&otilde;es Governamentais</legend>
					<table>
						<tr><td>CNPJ-CPF/MF:</td><td><input type="text" name="cli_cnpj" id="cli_cnpj" size="30px" maxlength="18" onkeyup="proximoCampo(this, 'cli_inscricaoestadual')" onkeypress="mascara(this, '##.###.###/####-##')"/></td></tr>
						<!--tr><td>Cnpj:</td><td><input type="text" name="cli_cnpj" id="cli_cnpj" size="30px" maxlength="14" /></td></tr-->
						<tr><td>Inscri&ccedil;&atilde;o Estadual:</td><td><input type="text" name="cli_inscricaoestadual" id="cli_inscricaoestadual" size="30px" maxlength="15" onkeyup="proximoCampo(this, 'cli_cep')" onkeypress="mascara(this, '###.###.###.###')"/></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2" valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Informa&ccedil;&otilde;es Cadastrais</legend>
					<table>
						<tr>
							<td >Cep:</td>
							<td><input type="text" name="cli_cep" id="cli_cep" size="15px" maxlength="9" onkeyup="proximoCampo(this, 'cli_numero')" onkeypress="mascara(this, '#####-###')"/></td>
						</tr>
						<tr>
							<td>Endere&ccedil;o:</td>
							<td><input type="text" name="cli_endereco" id="cli_endereco" size="50px" maxlength="50" /></td>
							
							<td>Bairro:</td>
							<td><input type="text" name="cli_bairro" id="cli_bairro" size="30px" maxlength="50" /></td>
							
							<td>N&uacute;mero:</td>
							<td><input type="text" name="cli_numero" id="cli_numero" size="5px" maxlength="5" onkeyup="proximoCampo(this, 'cli_complemento')" onkeypress="mascara(this, '#####')"/></td>
						</tr>
						<tr>
							<td>Complemento:</td>
							<td><input type="text" name="cli_complemento" id="cli_complemento" size="50px" maxlength="50" /></td>

							<td>Cidade:</td>
							<td><input type="text" name="cli_cidade" id="cli_cidade" size="30px" maxlength="50" /></td>

							<td>Uf:</td>
							<td><input type="text" name="cli_uf" id="cli_uf" size="5px" maxlength="2" /><br /></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Adicionais</legend>
					<table>
						<tr>
							<td>Contato:</td>
							<td><input type="text" name="cli_telnome" id="cli_telnome" size="30px" maxlength="50" /></td>

							<td>Telefone fixo:</td>
							<td><input type="text" name="cli_telfixo" id="cli_telfixo" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'cli_telcel')" onkeypress="mascara(this, '##&nbsp;####-####')"/></td>

							<td>Celular:</td>
							<td><input type="text" name="cli_telcel" id="cli_telcel" size="15px" maxlength="14" onkeyup="proximoCampo(this, 'cli_obs')" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')"/></td>
						</tr>
					</table>
				</fieldset>	
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Observa&ccedil;&otilde;es</legend>
					<table>
						<tr>
							<td><textarea rows="4" cols="100" type="text" name="cli_obs" id="cli_obs" maxlength="255" placeholder="M&aacute;ximo de 255 caracteres"></textarea></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2">
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
					<input type="hidden" value="gravarClientes" name="tabela"/>
					<input type="hidden" value="gravarClientes" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>