<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#tec_cep").blur(function(e){
		if($.trim($("#tec_cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#tec_cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#tec_endereco").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#tec_bairro").val(unescape(resultadoCEP["bairro"]));
					$("#tec_cidade").val(unescape(resultadoCEP["cidade"]));
					$("#tec_uf").val(unescape(resultadoCEP["uf"]));
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
<form name="formularioCadastrarTecnicos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>T&eacute;cnicos</b></li>
						<li>></li>
						<li>Cadastrar Novo T&eacute;cnico</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Pessoais</legend>
					<table>
						<tr>
							<td>Cargo:</td>
							<td>
								<select name="tec_nivel" id="tec_nivel">
								  <option value="0">Selecione...</option>
								  <option value="1">Administrador</option>
								  <option value="2">T&eacute;cnico</option>
								</select>							
							</td>
						</tr>
						<tr><td>Nome:</td><td><input type="text" name="tec_nome" id="tec_nome" size="30px" maxlength="30" required="required" /></td></tr>
						<tr><td>CPF:</td><td><input type="text" name="tec_cpf" id="tec_cpf" size="30px" maxlength="14" onkeyup="proximoCampo(this, 'tec_cnpj')" onkeypress="mascara(this, '###.###.###-##')"/></td></tr>
						<tr><td>CNPJ:</td><td><input type="text" name="tec_cnpj" id="tec_cnpj" size="30px" maxlength="18" onkeyup="proximoCampo(this, 'imo_locacao')" onkeypress="mascara(this, '##.###.###/####-##')"/></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td valign="top" >
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados De Acesso</legend>
					<table>
						<tr><td>Email:</td><td><input type="text" name="tec_email" id="imo_locacao" size="30" maxlength="50" required="required"/></td></tr>
						<tr><td>Login:</td><td><input type="text" name="tec_login" id="tec_login" size="6" maxlength="6" required="required" /></td></tr>
						<tr><td>Senha:</td><td><input type="text" name="tec_senha" id="tec_senha" size="10" maxlength="6" required="required"/></td></tr>
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
							<td><input type="text" name="tec_cep" id="tec_cep" size="15px" maxlength="9" onkeyup="proximoCampo(this, 'cli_numero')" onkeypress="mascara(this, '#####-###')" /></td>
						</tr>
						<tr>
							<td>Endere&ccedil;o:</td>
							<td><input type="text" name="tec_endereco" id="tec_endereco" size="50px" maxlength="50" /></td>
							
							<td>Bairro:</td>
							<td><input type="text" name="tec_bairro" id="tec_bairro" size="30px" maxlength="50" /></td>
							
							<td>N&uacute;mero:</td>
							<td><input type="text" name="tec_numero" id="tec_numero" size="5px" maxlength="5" /></td>
						</tr>
						<tr>
							<td>Complemento:</td>
							<td><input type="text" name="tec_complemento" id="tec_complemento" size="50px" maxlength="50" /></td>

							<td>Cidade:</td>
							<td><input type="text" name="tec_cidade" id="tec_cidade" size="30px" maxlength="50" /></td>

							<td>Uf:</td>
							<td><input type="text" name="tec_uf" id="tec_uf" size="5px" maxlength="2" /><br /></td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td valign="top" >
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Adicionais</legend>
					<table>
						<tr>
							<td>Contato:</td>
							<td><input type="text" name="tec_telnome" id="tec_telnome" size="30px" maxlength="50" /></td>

							<td>Telefone:</td>
							<td><input type="text" name="tec_telfixo" id="tec_telfixo" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'tec_telcel')" onkeypress="mascara(this, '##&nbsp;####-####')" /></td>

							<td>Celular:</td>
							<td><input type="text" name="tec_telcel" id="tec_telcel" size="15px" maxlength="14" onkeyup="proximoCampo(this, 'tec_bco')" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" /></td>
						</tr>
					</table>
				</fieldset>	
			</td>
		</tr>
		<tr>
			<td valign="top" >
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Banc&aacute;rios</legend>
					<table>
						<tr>
						<td>Banco:</td><td><input type="text" name="tec_bco" id="tec_bco" size="5" maxlength="3" /></td>
						<td>Ag&ecirc;ncia:</td><td><input type="text" name="tec_ag" id="tec_ag" size="10" maxlength="10" /></td>
						<td>Conta:</td><td><input type="text" name="TEC_CC" id="tec_cc" size="10" maxlength="15" /></td>
						<td>DV:</td><td><input type="text" name="tec_dv" id="tec_dv" size="1	" maxlength="15" /></td>
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
							<td><input type="text" name="TEC_OBS" id="TEC_OBS" size="100px" maxlength="50" /></td>
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
					<input type="hidden" value="gravarTecnicos" name="tabela"/>
					<input type="hidden" value="gravarTecnicos" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>