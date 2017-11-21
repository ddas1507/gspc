<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Selecione um Cliente</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
				$codigo_cliente	= $oquefazer->registros->CLI_CODIGO;
				$nome_cliente	= $oquefazer->registros->CLI_NOME;
			?>
				<tr onclick="location.href = 'index.php?tabela=form-list-imoveis-tarefas&acao=form-list-imoveis-tarefas&clicod=<? echo $codigo_cliente;?>&nome_cliente=<? echo $nome_cliente;?>';" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome_cliente;?></td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>