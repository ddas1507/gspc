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
				<th class="titulo-tabelas">Cargo</th>
				<th class="titulo-tabelas">Nome</th>
				<th class="titulo-tabelas">Data de Cadastro</th>
				<th class="titulo-tabelas">Ultima Altera&ccedil;&atilde;o</th>
				<!--th class="titulo-tabelas">Visualizar</th-->
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>						
				<td class="titulo-tabelas">Editar</td>
				<?
				}
				else{
				
				}
				?>						
				<?php
				$nivel = $_SESSION['sessao_nivel_usuario'];
				if($nivel == 1){?>				
				<th class="titulo-tabelas">Excluir</th>
				<?
				}
				else{
				
				}
				?>				
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$codigo	= $oquefazer->registros->TEC_CODIGO;
					$nome	= $oquefazer->registros->TEC_NOME;
					$cargo	= $oquefazer->registros->TEC_NIVEL;
					$dtcad	= $oquefazer->registros->TEC_DTCAD;
					$dtalt	= $oquefazer->registros->TEC_DTALT;
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesTecnicos&acao=detalhesTecnicos&codigo=<? echo $codigo;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas">
					<?
					if($cargo == 1)
						echo 'ADMINISTRADOR';
					else
						echo 'T&Eacute;CNICO';
					?>
					</td>
					<td class="dados-tabelas"><? echo $nome;?></td>
					<td class="dados-tabelas"><? echo $dtcad;?></td>
					<td class="dados-tabelas"><? echo $dtalt;?></td>
					
					<!--td class="dados-tabelas">
						<a href="index.php?tabela=detalhesTecnicos&acao=detalhesTecnicos&codigo=<? //echo $codigo;?>">
							<img src="images/others/view.png" border="0" width="24px">
						</a>
					</td-->
					<?php
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
						<td class="dados-tabelas">
							<a href="index.php?tabela=formularioAlterarTecnicos&acao=formularioAlterarTecnicos&codigo=<? echo $codigo;?>">
								<img src="images/others/update.png" border="0" width="24px">
							</a>
						</td>
					<?
					}
					else{?>
					<?
					}
					?>						
					<?php
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
						<td class="dados-tabelas">
							<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&codigo=<? echo $codigo;?>';}">						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&codigo=<? echo $codigo;?>';}">											<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirTecnicos&acao=excluirTecnicos&codigo=<? echo $codigo;?>';}">
								<img src="images/others/delete.png" border="0" width="24px">
							</a>
						</td>
					<?
					}
					else{?>
					<?
					}
					?>
				</tr>
				<?php
				} ?>				
		</tbody>
	</table>
</div>