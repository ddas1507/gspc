<?php
	$clicod = $_REQUEST['clicod'];
	
	$codigo	= $oquefazer->registros->CLI_CODIGO;
	$nome	= $oquefazer->registros->CLI_NOME;
	$razaosocial	= $oquefazer->registros->CLI_RAZAOSOCIAL;
	$cpf	= $oquefazer->registros->CLI_CPF;
	$cnpj	= $oquefazer->registros->CLI_CNPJ;
	$inscricaoestadual	= $oquefazer->registros->CLI_INSCRICAOESTADUAL;
	$cep	= $oquefazer->registros->CLI_CEP;
	$endereco	= $oquefazer->registros->CLI_ENDERECO;
	$complemento	= $oquefazer->registros->CLI_COMPLEMENTO;
	$bairro	= $oquefazer->registros->CLI_BAIRRO;
	$cidade	= $oquefazer->registros->CLI_CIDADE;
	$numero	= $oquefazer->registros->CLI_NUMERO;
	$uf	= $oquefazer->registros->CLI_UF;
	$telfixo	= $oquefazer->registros->CLI_TELFIXO;
	$telnome	= $oquefazer->registros->CLI_TELNOME;
	$telcel	= $oquefazer->registros->CLI_TELCEL;
	$obs	= $oquefazer->registros->CLI_OBS;
	$img	= $oquefazer->registros->CLI_IMG;
	$dtcad	= $oquefazer->registros->CLI_DTCAD;
	$dtalt	= $oquefazer->registros->CLI_DTALT;
	$post	= $oquefazer->registros->CLI_POST;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Clientes</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarClientes&acao=listarClientes">Consultar Clientes Cadastrados</a></b></li>
					<li>></li>
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td >
			<table style="width:100%;">
				<tr>
					<td align="center"><img src="images/clientes/<?php echo $img;?>" border="0" width="200px"/></td>
				</tr>
			</table>
		</td>
		<td>
			<table style="width:100%;">
				<!--tr><td class="tabela-dados-labels" >C&oacute;digo:</td><td class="tabela-dados-visualizar"><? //echo $codigo;?></td></tr-->
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Raz&atilde;o Social:</td><td class="tabela-dados-visualizar"><? echo $razaosocial;?></td></tr>
				<tr><td class="tabela-dados-labels" >CPF-CNPJ/MF:</td><td class="tabela-dados-visualizar"><? echo $cnpj;?></td></tr>
				<tr><td class="tabela-dados-labels" >Inscri&ccedil;&atilde;o Estadual:</td><td class="tabela-dados-visualizar"><? echo $inscricaoestadual;?></td></tr>
				<tr><td class="tabela-dados-labels" >CEP:</td><td class="tabela-dados-visualizar"><? echo $cep;?></td></tr>
				<tr><td class="tabela-dados-labels" >Endere&ccedil;o:</td><td class="tabela-dados-visualizar"><? echo $endereco.',&nbsp;'.$numero;?></td></tr>
				<tr><td class="tabela-dados-labels" >Complemento:</td><td class="tabela-dados-visualizar"><? echo $complemento;?></td></tr>
				<tr><td class="tabela-dados-labels" >Bairro:</td><td class="tabela-dados-visualizar"><? echo $bairro;?></td></tr>
			</table>
		</td>
		<td>
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >Cidade:</td><td class="tabela-dados-visualizar"><? echo $cidade.'-'.$uf;?></td></tr>
				<tr><td class="tabela-dados-labels" >Telefone Fixo:</td><td class="tabela-dados-visualizar"><? echo $telfixo;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome de Contato:</td><td class="tabela-dados-visualizar"><? echo $telnome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Celular:</td><td class="tabela-dados-visualizar"><? echo $telcel;?></td></tr>
				<tr><td class="tabela-dados-labels" >Observa&ccedil;&otilde;es:</td><td class="tabela-dados-visualizar"><? echo $obs;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
				<tr><td class="tabela-dados-labels" >Registrado por:</td><td class="tabela-dados-visualizar"><? echo $post;?></td></tr>
			</table>
		</td>
	</tr>
</table>
<table width="100%" border="0">
	<tr>
		<td style="float: left;">
			<form action="index.php" method="post">
				<input 
					class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
					type="submit" value="Unidades" name="Unidades" title="Consultar Unidades" 
				/>
					<input type="hidden" value="listarImoveis" name="tabela"/>
					<input type="hidden" value="listarImoveis" name="acao"/>
					<input type="hidden" value="<? echo $clicod;?>" name="clicod"/>
					<input type="hidden" value="<? echo $img;?>" name="cliimg"/>
					<input type="hidden" value="<? echo $nome;?>" name="cliente"/>
			</form>
		</td>
	</tr>
</table>