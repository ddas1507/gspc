<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#imo_cep").blur(function(e){
		if($.trim($("#imo_cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#imo_cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#imo_endereco").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#imo_bairro").val(unescape(resultadoCEP["bairro"]));
					$("#imo_cidade").val(unescape(resultadoCEP["cidade"]));
					$("#imo_uf").val(unescape(resultadoCEP["uf"]));
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

<form name="formularioCadastrarDadosImoveis" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Unidades</b></li>
						<li>></li>
						<li><a href="index.php?tabela=formularioCadastrarImoveis&acao=formularioCadastrarImoveis">Cadastrar</a></li>
						<li>></li>
						<li>Nova unidade</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
<?php $clicod = $_REQUEST['clicod'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>	
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Cadastrais</legend>
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td>Cliente:</td>
										<td><input type="text" name="cli_nome" id="cli_nome" size="30px" maxlength="50" value="<?echo $nome_cliente;?>" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>Ref:</td>
										<td><input type="text" name="imo_ref" id="imo_ref" size="30px" maxlength="50" value="<? //echo rand(1,9999);?>"/></td>
									</tr>
									<tr>
										<td>Unidade:</td>
										<td><input type="text" name="imo_nome" id="imo_nome" size="30px" maxlength="50" /></td>
									</tr>
								</table>
							</td>
							<td>
								<table>
									<tr>
										<td>INCRA / CCIR:</td>
										<td><input type="text" name="imo_incraccir" id="imo_incraccir" size="30px" maxlength="50" /></td>
									</tr>
									<tr>
										<td>RFB / ITR:</td>
										<td><input type="text" name="imo_rfbitr" id="imo_rfbitr" size="30px" maxlength="50" /></td>
									</tr>
									<tr>
										<td>CNPJ da Filial:</td>
										<td><input type="text" name="imo_cnpjfilial" id="imo_cnpjfilial" size="30px" maxlength="18" onkeyup="proximoCampo(this, 'imo_locacao')" onkeypress="mascara(this, '##.###.###/####-##')"/></td>
									</tr>
								</table>
							</td>
							<td>
								<table>
									<tr>
										<td>Loca&ccedil;&atilde;o:</td>
										<td>
											<select name="imo_locacao" id="imo_locacao">
											  <option>Selecione...</option>
											  <option value="Sim">Sim</option>
											  <option value="Nao">N&atilde;o</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Tomb. Hist&oacute;rico:</td>
										<td>
											<select name="imo_area_construida_tomb_historico" id="imo_area_construida_tomb_historico">
											  <option>Selecione...</option>
											  <option value="Sim">Sim</option>
											  <option value="Nao">N&atilde;o</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Propriet&aacute;rio do im&oacute;vel:</td>
										<td><input type="text" name="imo_propimovel" id="imo_propimovel" size="30px" maxlength="50" /></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<table>
									<tr>
										<td colspan="2" valign="top">
												<table>
													<tr>
														<td >Cep:</td>
														<td ><input type="text" name="imo_cep" id="imo_cep" size="15px" maxlength="9" onkeyup="proximoCampo(this, 'imo_numero')" onkeypress="mascara(this, '#####-###')" required="required"/></td>
													</tr>
													<tr>
														<td>Endere&ccedil;o:</td>
														<td><input type="text" name="imo_endereco" id="imo_endereco" size="50px" maxlength="50" /></td>
														
														<td>Bairro:</td>
														<td><input type="text" name="imo_bairro" id="imo_bairro" size="30px" maxlength="50" /></td>
														
														<td>Numero:</td>
														<td><input type="text" name="imo_numero" id="imo_numero" size="5px" maxlength="5" /></td>
													</tr>
													<tr>
														<td>Complemento:</td>
														<td><input type="text" name="imo_complemento" id="imo_complemento" size="50px" maxlength="50" /></td>

														<td>Cidade:</td>
														<td><input type="text" name="imo_cidade" id="imo_cidade" size="30px" maxlength="50" /></td>

														<td>Uf:</td>
														<td><input type="text" name="imo_uf" id="imo_uf" size="5px" maxlength="2" /><br /></td>
													</tr>
												</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">&Aacute;rea de Terreno</legend>
					<table>
						<tr>
							<td>IPTU:</td>
							<td><input type="text" name="imo_terreno_iptu" id="imo_terreno_iptu" size="15px" maxlength="10" /></td>
							<td>Reg. de Unidades:</td>
							<td><input type="text" name="imo_terreno_registro_imoveis" id="imo_terreno_registro_imoveis" size="15px" maxlength="10" /></td>
							<td>Topogr&aacute;fia:</td>
							<td><input type="text" name="imo_terreno_topografia" id="imo_terreno_topografia" size="15px" maxlength="10" /></td>
							<td>N&deg; do Contribuinte:</td>
							<td><input type="text" name="imo_terreno_contibuintes" id="imo_terreno_contibuintes" size="15px" maxlength="10" /></td>
							<td>Uso:</td>
							<td>
								<select name="imo_terreno_uso" id="imo_terreno_uso">
									<option>Selecione...</option>
									<option value="Rural">Rural</option>
									<option value="Urbano">Urbano</option>
								</select>
							</td>
						</tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">&Aacute;rea Constru&iacute;da</legend>
					<table>
						<tr>
							<td>Projeto aprovado:</td>
							<td><input type="text" name="imo_area_construida_projeto_aprovado" id="imo_area_construida_projeto_aprovado" size="15px" maxlength="10" /></td>
							<td>Averbada:</td>
							<td><input type="text" name="imo_area_construida_averbada" id="imo_area_construida_averbada" size="15px" maxlength="10" /></td>
							<td>IPTU:</td>
							<td><input type="text" name="imo_area_construida_iptu" id="imo_area_construida_iptu" size="15px" maxlength="10" /></td>
							<td>N&deg; da Matr&iacute;cula:</td>
							<td><input type="text" name="imo_area_construida_matricula" id="imo_area_construida_matricula" size="15px" maxlength="10" /></td>
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
							<td><input type="text" name="imo_telnome" id="imo_telnome" size="30px" maxlength="50" /></td>
							<td>Telefone:</td>
							<td><input type="text" name="imo_tel" id="imo_tel" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'imo_fax')" onkeypress="mascara(this, '##&nbsp;####-####')"/></td>
							<td>Fax:</td>
							<td><input type="text" name="imo_fax" id="imo_fax" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'imo_email')" onkeypress="mascara(this, '##&nbsp;####-####')" /></td>
							<td>E-mail:</td>
							<td><input type="text" name="imo_email" id="imo_email" size="30px" maxlength="50" /></td>
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
							<textarea rows="4" cols="100" name="imo_obs" id="imo_obs" maxlength="255"/></textarea>
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
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" 
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarDadosImoveis" name="tabela"/>
					<input type="hidden" value="gravarDadosImoveis" name="acao"/>
					<input type="hidden" value="<?echo $clicod;?>" name="clicod"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>