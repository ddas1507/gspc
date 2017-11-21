<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
		  <div id="navegacao-header">
			<ul>
				<li><b>Processos</b></li>
				<li>></li>
				<li>Consultar Processos</li>
			</ul>
		  </div>
		</td>
	</tr>
</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Nome do Processo</th>
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
					$codigo	= $oquefazer->registros->PROSET_CODIGO;
					$nome	= $oquefazer->registros->PROSET_NOME;
					$dtcad	= $oquefazer->registros->PROSET_DTCAD;
					$dtalt	= $oquefazer->registros->PROSET_DTALT;
			?>
				<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					<td class="dados-tabelas"><? echo $dtalt;?></td>
					
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarProcessosSetup&acao=formularioAlterarProcessosSetup&codigo=<? echo $codigo;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirProcessosSetup&acao=excluirProcessosSetup&codigo=<? echo $codigo;?>';}">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>
