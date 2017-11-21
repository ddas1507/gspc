<?php $cliimg = $_REQUEST['cliimg'];?>
<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
		  <div id="navegacao-header">
			<ul>
				<li>Unidades</li>
				<li>></li>
				<li><b>Consultar Unidades Cadastradas</b></li>
			</ul>
		  </div>
		</td>
	</tr>
</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
			<th class="titulo-tabelas">Cliente Respons&aacute;vel</th>
			<th class="titulo-tabelas">Ref</th>
			<th class="titulo-tabelas">Unidade</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$imocod	= $oquefazer->registros->IMO_CODIGO;
					
					$img	= $oquefazer->registros->IMO_IMG;
					$nome	= $oquefazer->registros->IMO_NOME;
					$ref	= $oquefazer->registros->IMO_REF;
					$clinome= $oquefazer->registros->CLI_NOME;
					$clicod = $oquefazer->registros->CLI_CODIGO;
					$cep	= $oquefazer->registros->IMO_CEP;
					$dtcad	= $oquefazer->registros->IMO_DTCAD;
					$dtalt	= $oquefazer->registros->IMO_DTALT;
			?>
			<tr onclick="location.href = 'index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&imocod=<? echo $imocod;?>&img=<? echo $img;?>&cliente=<? echo $clinome;?>&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar">
				<td class="dados-tabelas"><? echo $clinome;?></td>
				<td class="dados-tabelas"><? echo $ref;?></td>
				<td class="dados-tabelas"><? echo $nome;?></td>
			</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>