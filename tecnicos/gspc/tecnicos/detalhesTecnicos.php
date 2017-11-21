<?php
	$codigo	= $oquefazer->registros->TEC_CODIGO;
	$cargo	= $oquefazer->registros->TEC_NIVEL;
	$nome	= $oquefazer->registros->TEC_NOME;
	$login	= $oquefazer->registros->TEC_LOGIN;
	$email	= $oquefazer->registros->TEC_EMAIL;
	$senha	= $oquefazer->registros->TEC_SENHA;
	$cpf	= $oquefazer->registros->TEC_CPF;
	$cnpj	= $oquefazer->registros->TEC_CNPJ;
	$cep	= $oquefazer->registros->TEC_CEP;
	$endereco	= $oquefazer->registros->TEC_ENDERECO;
	$complemento	= $oquefazer->registros->TEC_COMPLEMENTO;
	$bairro	= $oquefazer->registros->TEC_BAIRRO;
	$cidade	= $oquefazer->registros->TEC_CIDADE;
	$numero	= $oquefazer->registros->TEC_NUMERO;
	$uf	= $oquefazer->registros->TEC_UF;
	$telfixo	= $oquefazer->registros->TEC_TELFIXO;
	$telnome	= $oquefazer->registros->TEC_TELNOME;
	$telcel	= $oquefazer->registros->TEC_TELCEL;
	$obs	= $oquefazer->registros->TEC_OBS;
	$bco	= $oquefazer->registros->TEC_BCO;
	$ag	= $oquefazer->registros->TEC_AG;
	$cc	= $oquefazer->registros->TEC_CC;
	$dv	= $oquefazer->registros->TEC_DV;
	$dtcad	= $oquefazer->registros->TEC_DTCAD;
	$dtalt	= $oquefazer->registros->TEC_DTALT;
?>
<table class="tabela-nevegacao">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Tecnicos</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarTecnicos&acao=listarTecnicos">Consultar Tecnicos Cadastrados</a></b></li>
					<li>></li>
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td>
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels">Cargo:</td><td class="tabela-dados-visualizar"><?php if($cargo == 1)echo 'Administrador'; else echo 'T&eacute;cnico';?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome:</td><td class="tabela-dados-visualizar"><? echo $nome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Email:</td><td class="tabela-dados-visualizar"><? echo $email;?></td></tr>
				<tr><td class="tabela-dados-labels" >Login:</td><td class="tabela-dados-visualizar"><? echo $login;?></td></tr>
				<tr><td class="tabela-dados-labels" >Senha:</td><td class="tabela-dados-visualizar"><? echo base64_decode($senha)?></td></tr>
				<tr><td class="tabela-dados-labels" >CPF:</td><td class="tabela-dados-visualizar"><?php echo $cpf;?></td></tr>
				<tr><td class="tabela-dados-labels" >CNPJ:</td><td class="tabela-dados-visualizar"><? echo $cnpj;?></td></tr>
				<tr><td class="tabela-dados-labels" >CEP:</td><td class="tabela-dados-visualizar"><? echo $cep;?></td></tr>
				<tr><td class="tabela-dados-labels" >Endere&ccedil;o:</td><td class="tabela-dados-visualizar"><? echo $endereco;?></td></tr>
				<tr><td class="tabela-dados-labels" >Complemento:</td><td class="tabela-dados-visualizar"><? echo $complemento;?></td></tr>
			</table>
		</td>
		<td>
			<table style="width:100%;">
				<tr><td class="tabela-dados-labels" >Bairro:</td><td class="tabela-dados-visualizar"><? echo $bairro;?></td></tr>
				<tr><td class="tabela-dados-labels" >Cidade / UF:</td><td class="tabela-dados-visualizar"><? echo $cidade.' - '.$uf;?></td></tr>
				<tr><td class="tabela-dados-labels" >N&uacute;mero:</td><td class="tabela-dados-visualizar"><? echo $numero;?></td></tr>
				<tr><td class="tabela-dados-labels" >Telefone Fixo:</td><td class="tabela-dados-visualizar"><? echo $telfixo;?></td></tr>
				<tr><td class="tabela-dados-labels" >Nome de Contato:</td><td class="tabela-dados-visualizar"><? echo $telnome;?></td></tr>
				<tr><td class="tabela-dados-labels" >Celular:</td><td class="tabela-dados-visualizar"><? echo $telcel;?></td></tr>
				<tr><td class="tabela-dados-labels" >Observa&ccedil;&otilde;es:</td><td class="tabela-dados-visualizar"><? echo $obs;?></td></tr>
				<tr><td class="tabela-dados-labels" >Banco / Ag&ecirc;ncia / Conta:</td><td class="tabela-dados-visualizar"><? echo $bco.' / '.$ag.' / '.$cc.'-'.$dv;?></td></tr>
				<tr><td class="tabela-dados-labels" >Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>
				<tr><td class="tabela-dados-labels" >Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
			</table>
		</td>
	</tr>
</table>