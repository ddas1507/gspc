	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Processos</b></li>
						<li>></li>
						<li>Consultar Processos Completo</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Raiz</th>
				<th class="titulo-tabelas">Sub</th>
				<th class="titulo-tabelas">Status</th>
				<th class="titulo-tabelas">Data de Cadastro</th>
				<th class="titulo-tabelas">Ultima Altera&ccedil;&atilde;o</th>
				<th class="titulo-tabelas">Atualizar</th>
				<th class="titulo-tabelas">Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
				$codigo	= $oquefazer->registros->PRO_CODIGO;
				$sub	= $oquefazer->registros->PRO_NOME;
				$raiz	= $oquefazer->registros->PRO_SUB;
				$codraiz	= $oquefazer->registros->PRO_CODIGO;
				$status	= $oquefazer->registros->PRO_STATUS;
				$dtcad	= $oquefazer->registros->PRO_DTCAD;
				$dtalt	= $oquefazer->registros->PRO_DTALT;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $raiz;?></td>
					<td class="dados-tabelas"><? echo $sub;?></td>
					<td class="dados-tabelas"><? echo $status;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					<td class="dados-tabelas"><? echo $dtalt;?></td>
					
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarProcessos&acao=formularioAlterarProcessos&codigo=<? echo $codigo;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=excluirProcessos&acao=excluirProcessos&codigo=<? echo $codigo;?>">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>