		<table cellspacing="0" cellpadding="0" border="0" width="1024px">
			<tr>
				<td align="left">
				  <div id="navegacao-header">
					<ul>
						<li><b>Clientes</b></li>
						<li>></li>
						<li>Consultar Clientes Cadastrados</li>
					</ul>
				  </div>
				</td>
			</tr>
		</table>
	<div id="corpo-tabela">
		<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="tabelaClientes">
			<thead>
				<tr>
					<th class="titulo-tabelas">Raz&atilde;o Social</th>
				</tr>
			</thead>
			<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$clicod	= $oquefazer->registros->CLI_CODIGO;
					$nome	= $oquefazer->registros->CLI_NOME;
					$razaosocial	= $oquefazer->registros->CLI_RAZAOSOCIAL;
					$dtcad	= $oquefazer->registros->CLI_DTCAD;
					$dtalt	= $oquefazer->registros->CLI_DTALT;
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesClientes&acao=detalhesClientes&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar" >
					<td class="dados-tabelas"><? echo $razaosocial;?></td>
				</tr>
					<?php 
					} ?>
			</tbody>
		</table>
	</div>

