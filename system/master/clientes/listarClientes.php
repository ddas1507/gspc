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
					<th class="titulo-tabelas">Nome</th>
					<th class="titulo-tabelas">Raz&atilde;o Social</th>
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
					$clicod	= $oquefazer->registros->CLI_CODIGO;
					$nome	= $oquefazer->registros->CLI_NOME;
					$razaosocial	= $oquefazer->registros->CLI_RAZAOSOCIAL;
					$dtcad	= $oquefazer->registros->CLI_DTCAD;
					$dtalt	= $oquefazer->registros->CLI_DTALT;
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesClientes&acao=detalhesClientes&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar" >
					<td class="dados-tabelas"><? echo $nome;?></td>
					<td class="dados-tabelas"><? echo $razaosocial;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					<td class="dados-tabelas"><? echo $dtalt;?></td>
					
					<!--td class="dados-tabelas">
						<a href="index.php?tabela=detalhesClientes&acao=detalhesClientes&clicod=<? //echo $clicod;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td-->
					<td class="dados-tabelas">
						<a href="index.php?tabela=formularioAlterarClientes&acao=formularioAlterarClientes&clicod=<? echo $clicod;?>">
							<img src="images/others/update.png" border="0" width="24px">
						</a>
					</td>
					<td class="dados-tabelas">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&clicod=<? echo $clicod;?>';}">
							<img src="images/others/delete.png" border="0" width="24px">
						</a>
					</td>
				</tr>
					<?php 
					} ?>
			</tbody>
		</table>
	</div>

