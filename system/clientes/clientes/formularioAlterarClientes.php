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
					alert("Não foi possivel encontrar o endereço");
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
<form name="formularioAlterarClientes" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Clientes</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarClientes&acao=listarClientes">Consultar Clientes Cadastrados</a></b></li>
						<li>></li>
						<li>Atualizar Cadastro</li>
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
						<tr><td>C&oacute;digo:</td><td><input type="text" name="cli_nome" id="cli_nome" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_CODIGO;?>" disabled="disabled"/></td></tr>
						<tr><td>Name:</td><td><input type="text" name="cli_nome" id="cli_nome" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_NOME;?>"/><br /></td></tr>
						<tr><td>Raz&atilde;o Social:</td><td><input type="text" name="cli_razaosocial" id="cli_razaosocial" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_RAZAOSOCIAL;?>"/></td></tr>
					</table>
				</fieldset>
			</td>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Informa&ccedil;&otilde;es Governamentais</legend>
					<table>
						<tr><td>CNPJ-CPF/MF:</td><td><input type="text" name="cli_cnpj" id="cli_cnpj" size="30px" maxlength="30" value="<?php echo $oquefazer->registros->CLI_CNPJ;?>"/></td></tr>
						<!--tr><td>Cnpj:</td><td><input type="text" name="cli_cpf" id="cli_cpf" size="30px" maxlength="30" value="<?php //echo $oquefazer->registros->CLI_CPF;?>"/></td></tr-->
						<tr><td>Inscri&ccedil;&atilde;o Estadual:</td><td><input type="text" name="cli_inscricaoestadual" id="cli_inscricaoestadual" size="30px" maxlength="30" value="<?php echo $oquefazer->registros->CLI_INSCRICAOESTADUAL;?>"/></td></tr>
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
							<td><input type="text" name="cli_cep" id="cli_cep" size="15px" maxlength="9" onkeyup="proximoCampo(this, 'cli_numero')" onkeypress="mascara(this, '#####-###')" value="<?php echo $oquefazer->registros->CLI_CEP;?>"/></td>
						</tr>
						<tr>
							<td>Endere&ccedil;o:</td>
							<td><input type="text" name="cli_endereco" id="cli_endereco" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_ENDERECO;?>" readonly="readonly"/></td>
							
							<td>Bairro:</td>
							<td><input type="text" name="cli_bairro" id="cli_bairro" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_BAIRRO;?>" readonly="readonly"/></td>
							
							<td>Numero:</td>
							<td><input type="text" name="cli_numero" id="cli_numero" size="5px" maxlength="5" value="<?php echo $oquefazer->registros->CLI_NUMERO;?>"/></td>
						</tr>
						<tr>
							<td>Complemento:</td>
							<td><input type="text" name="cli_complemento" id="cli_complemento" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_COMPLEMENTO;?>" readonly="readonly"/></td>

							<td>Cidade:</td>
							<td><input type="text" name="cli_cidade" id="cli_cidade" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_CIDADE;?>" readonly="readonly"/></td>

							<td>Uf:</td>
							<td><input type="text" name="cli_uf" id="cli_uf" size="5px" maxlength="2" value="<?php echo $oquefazer->registros->CLI_UF;?>"/><br /></td>
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
							<td><input type="text" name="cli_telnome" id="cli_telnome" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_TELNOME;?>"/></td>

							<td>Telefone fixo:</td>
							<td><input type="text" name="cli_telfixo" id="cli_telfixo" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'cli_telcel')" onkeypress="mascara(this, '##&nbsp;####-####')" value="<?php echo $oquefazer->registros->CLI_TELFIXO;?>"/></td>

							<td>Celular:</td>
							<td><input type="text" name="cli_telcel" id="cli_telcel" size="15px" maxlength="14" onkeyup="proximoCampo(this, 'cli_obs')" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" value="<?php echo $oquefazer->registros->CLI_TELCEL;?>"/></td>
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
							<td>
							<textarea rows="4" cols="100" name="cli_obs" id="cli_obs" maxlength="255" ><?php echo $oquefazer->registros->CLI_OBS;?></textarea>	
							</td>
						</tr>
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
					<input type="hidden" value="gravarAlteracaoClientes" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoClientes" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->CLI_CODIGO;?>" name="clicod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>