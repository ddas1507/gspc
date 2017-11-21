<div id="tabela-topo">
	<table cellspacing="0" cellpadding="0" border="0" width="1024px">
		<tr>
			<td align="left">
				<label id="titulo-navegacao-padrao"><a href="index.php">Home </a>></label> <span id="titulo-navegacao-pagina">Processos</span>
			</td>
		</tr>
	</table>
</div>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">DATA DE CADASTRO</th>
				<th class="titulo-tabelas">ULTIMA ALTERA&Ccedil;&Atilde;O</th>
				<th class="titulo-tabelas">VISUALIZAR</th>
				<th class="titulo-tabelas">ATUALIZAR</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$codigo	= $oquefazer->registros->SER_CODIGO;
					$dtcad	= $oquefazer->registros->SER_DTCAD;
					$dtalt	= $oquefazer->registros->SER_DTALT;
			?>
			<tr>
				<td ><? echo $dtcad;?></td>
				<td ><? echo $dtalt;?></td>
				
				<td align="center">
					<a href="index.php?tabela=detalhesProcessos&acao=detalhesProcessos&codigo=<? echo $codigo;?>">
						visualizar
					</a>
				</td>
				<td align="center">
					<a href="index.php?tabela=formularioAlterarProcessos&acao=formularioAlterarProcessos&codigo=<? echo $codigo;?>">
						Atualizar
					</a>
				</td>
			</tr>
			<?php 
			} ?>				
		</tbody>
	</table>
</div>