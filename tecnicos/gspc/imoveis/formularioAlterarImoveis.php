<? $clicod = $_REQUEST['clicod'];?>
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
						<li><b><a href="index.php?tabela=listarImoveis&acao=listarImoveis">Consultar Unidades Cadastradas</a></b></li>
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
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Dados Cadastrais</legend>
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td>Cliente:</td>
										<td><input type="text" name="cli_nome" id="cli_nome" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_NOME;?>" readonly="readonly"/></td>
									</tr>
									<tr>
										<td>Ref:</td>
										<td><input type="text" name="imo_ref" id="imo_ref" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_REF;?>" /></td>
									</tr>
									<tr>
										<td>Unidade:</td>
										<td><input type="text" name="imo_nome" id="imo_nome" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_NOME;?>" /></td>
									</tr>
								</table>
							</td>
							<td>
								<table>
									<tr>
										<td>INCRA / CCIR:</td>
										<td><input type="text" name="imo_incraccir" id="imo_incraccir" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_INCRACCIR;?>"/></td>
									</tr>
									<tr>
										<td>RFB / ITR:</td>
										<td><input type="text" name="imo_rfbitr" id="imo_rfbitr" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_RFBITR;?>" /></td>
									</tr>
									<tr>
										<td>CNPJ da Filial:</td>
										<td><input type="text" name="imo_cnpjfilial" id="imo_cnpjfilial" size="30px" maxlength="18" onkeyup="proximoCampo(this, 'imo_locacao')" onkeypress="mascara(this, '##.###.###/####-##')" value="<?php echo $oquefazer->registros->IMO_CNPJFILIAL;?>" /></td>
									</tr>
								</table>
							</td>
							<td>
								<table>
									<tr>
										<td>Loca&ccedil;&atilde;o:</td>
										<td>
											<select name="imo_locacao" id="imo_locacao">
												<?php
													$sim = '';
													$nao = '';
													
													switch($oquefazer->registros->IMO_LOCACAO)
													{
													case 'SIM': $sim = 'selected';break;
													case 'NAO': $nao = 'selected';break;
													}
												?>
												<option value="SIM" <?php echo $sim;?>>Sim</option>
												<option value="NAO" <?php echo $nao;?>>N&atilde;o</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Tomb. Hist&oacute;rico:</td>
										<td>
											<select name="imo_area_construida_tomb_historico" id="imo_area_construida_tomb_historico">
												<?php
													$sim = '';
													$nao = '';
													
													switch($oquefazer->registros->IMO_AREA_CONSTRUIDA_TOMB_HISTORICO)
													{
													case 'Sim': $sim = 'selected';break;
													case 'Nao': $nao = 'selected';break;
													}
												?>
												<option value="Sim" <?php echo $sim;?>>Sim</option>
												<option value="Nao" <?php echo $nao;?>>N&atilde;o</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Proprietario do im&oacute;vel:</td>
										<td><input type="text" name="imo_propimovel" id="imo_propimovel" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_PROPIMOVEL;?>" /></td>
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
													<td ><input type="text" name="imo_cep" id="imo_cep" size="15px" maxlength="9" onkeyup="proximoCampo(this, 'imo_numero')" onkeypress="mascara(this, '#####-###')" value="<?php echo $oquefazer->registros->IMO_CEP;?>" required="required"/></td>
												</tr>
												<tr>
													<td>Endere&ccedil;o:</td>
													<td><input type="text" name="imo_endereco" id="imo_endereco" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_ENDERECO;?>" /></td>
													
													<td>Bairro:</td>
													<td><input type="text" name="imo_bairro" id="imo_bairro" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_BAIRRO;?>" /></td>
													
													<td>Numero:</td>
													<td><input type="text" name="imo_numero" id="imo_numero" size="5px" maxlength="5" value="<?php echo $oquefazer->registros->IMO_NUMERO;?>" /></td>
												</tr>
												<tr>
													<td>Complemento:</td>
													<td><input type="text" name="imo_complemento" id="imo_complemento" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_COMPLEMENTO;?>" /></td>

													<td>Cidade:</td>
													<td><input type="text" name="imo_cidade" id="imo_cidade" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_CIDADE;?>" /></td>

													<td>Uf:</td>
													<td><input type="text" name="imo_uf" id="imo_uf" size="5px" maxlength="2" value="<?php echo $oquefazer->registros->IMO_UF;?>" /></td>
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
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Area de terreno</legend>
					<table>
						<tr>
							<td>IPTU:</td>
							<td><input type="text" name="imo_terreno_iptu" id="imo_terreno_iptu" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_TERRENO_IPTU;?>"/></td>
							<td>Reg. de Unidades:</td>
							<td><input type="text" name="imo_terreno_registro_imoveis" id="imo_terreno_registro_imoveis" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_TERRENO_REGISTRO_IMOVEIS;?>"/></td>
							<td>Topogr&aacute;fia:</td>
							<td><input type="text" name="imo_terreno_topografia" id="imo_terreno_topografia" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_TERRENO_TOPOGRAFIA;?>"/></td>
							<td>N&deg; do Contribuinte:</td>
							<td><input type="text" name="imo_terreno_contibuintes" id="imo_terreno_contibuintes" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_TERRENO_CONTIBUINTES;?>"/></td>
							<td>Uso:</td>
							<td>
								<select name="imo_terreno_uso" id="imo_terreno_uso">
									<?php
										$rural = '';
										$urbano = '';
										
										switch($oquefazer->registros->IMO_TERRENO_USO)
										{
										case 'Rural': $rural = 'selected';break;
										case 'Urbano': $urbano = 'selected';break;
										}
									?>
									<option value="Rural" <?php echo $rural;?>>Rural</option>
									<option value="Urbano" <?php echo $urbano;?>>Urbano</option>
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
							<td><input type="text" name="imo_area_construida_projeto_aprovado" id="imo_area_construida_projeto_aprovado" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_AREA_CONSTRUIDA_PROJETO_APROVADO;?>" /></td>
							<td>Averbada:</td>
							<td><input type="text" name="imo_area_construida_averbada" id="imo_area_construida_averbada" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_AREA_CONSTRUIDA_AVERBADA;?>" /></td>
							<td>IPTU:</td>
							<td><input type="text" name="imo_area_construida_iptu" id="imo_area_construida_iptu" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_AREA_CONSTRUIDA_IPTU;?>" /></td>
							<td>N&deg; da Matr&iacute;cula:</td>
							<td><input type="text" name="imo_area_construida_matricula" id="imo_area_construida_matricula" size="15px" maxlength="10" value="<?php echo $oquefazer->registros->IMO_AREA_CONSTRUIDA_MATRICULA;?>" /></td>
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
							<td><input type="text" name="imo_telnome" id="imo_telnome" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_TELNOME;?>" /></td>
							<td>Telefone:</td>
							<td><input type="text" name="imo_tel" id="imo_tel" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'imo_fax')" onkeypress="mascara(this, '##&nbsp;####-####')" value="<?php echo $oquefazer->registros->IMO_TEL;?>" /></td>
							<td>Fax:</td>
							<td><input type="text" name="imo_fax" id="imo_fax" size="15px" maxlength="12" onkeyup="proximoCampo(this, 'imo_email')" onkeypress="mascara(this, '##&nbsp;####-####')" value="<?php echo $oquefazer->registros->IMO_FAX;?>" /></td>
							<td>E-mail:</td>
							<td><input type="text" name="imo_email" id="imo_email" size="30px" maxlength="50" value="<?php echo $oquefazer->registros->IMO_EMAIL;?>" /></td>
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
							<textarea rows="4" cols="100" name="imo_obs" id="imo_obs" maxlength="255"/><?php echo $oquefazer->registros->IMO_OBS;?></textarea>
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
				<input type="hidden" value="gravarAlteracaoImoveis" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoImoveis" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->IMO_CODIGO;?>" name="imocod"/>
				<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
			</td>
		</tr>
	</table>
</form>