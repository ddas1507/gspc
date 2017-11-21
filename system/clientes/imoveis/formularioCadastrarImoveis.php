<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
		  <div id="navegacao-header">
			<ul>
				<li><b>Unidades</b></li>
				<li>></li>
				<li>Cadastrar</li>
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
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$clicod	= $oquefazer->registros->CLI_CODIGO;
					$nome_cliente	= $oquefazer->registros->CLI_NOME;
			?>
				<tr onclick="location.href = 'index.php?tabela=formularioCadastrarDadosImoveis&acao=formularioCadastrarDadosImoveis&clicod=<? echo $clicod;?>&nome_cliente=<? echo $nome_cliente;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome_cliente;?></td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>
