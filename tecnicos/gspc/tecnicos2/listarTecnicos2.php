<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Tarefas</b></li>
					<li>></li>
					<li>Consultar Tecnicos Cadastrados</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<div id="corpo-tabela">
	<table width="100%" class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Tipo de Acesso</th>
				<th class="titulo-tabelas">Nome</th>
				<th class="titulo-tabelas">Data de Cadastro</th>
				<th class="titulo-tabelas">Ultima Altera&ccedil;&atilde;o</th>
				<th class="titulo-tabelas">Editar</th>
				<th class="titulo-tabelas">Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{				
					$codigo	= $oquefazer->registros->TEC_CODIGO;
					$cargo	= $oquefazer->registros->TEC_NIVEL;
					$nome_cliente	= $oquefazer->registros->NOME_CLIENTE;
					$nome_imovel	= $oquefazer->registros->NOME_IMOVEL;
					$ref_imovel	= $oquefazer->registros->REF_IMOVEL;
					$dtcad	= $oquefazer->registros->TEC_DTCAD;
					$dtalt	= $oquefazer->registros->TEC_DTALT;
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesTecnicos2&acao=detalhesTecnicos2&codigo=<? echo $codigo;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas">Cliente</td>
					<td class="dados-tabelas"><? echo $nome_cliente.' / '.$ref_imovel.' - '.$nome_imovel;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					<td class="dados-tabelas"><? echo $dtalt;?></td>
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarTecnicos2&acao=formularioAlterarTecnicos2&codigo=<? echo $codigo;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirTecnicos2&acao=excluirTecnicos2&codigo=<? echo $codigo;?>';}">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
				<?php
				} ?>
		</tbody>
	</table>
</div>