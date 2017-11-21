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
				<th class="titulo-tabelas">Registrar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$cli_codigo	= $oquefazer->registros->CLI_CODIGO;
					$nome_cliente	= $oquefazer->registros->CLI_NOME;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome_cliente;?></td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioCadastrarDadosImoveis&acao=formularioCadastrarDadosImoveis&cli_codigo=<? echo $cli_codigo;?>&nome_cliente=<? echo $nome_cliente;?>">
							<img src="images/others/ok.png" border="0" width="24px">
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>
