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
		<table class="tabelas-consulta" >
			<tr>
				<td class="titulo-tabelas">Nome</td>
				<td class="titulo-tabelas">Raz&atilde;o Social</td>
				<td class="titulo-tabelas">Data de Cadastro</td>
				<td class="titulo-tabelas">Ultima Altera&ccedil;&atilde;o</td>
				<td class="titulo-tabelas">Visualizar</td>
				<td class="titulo-tabelas">Editar</td>
				<td class="titulo-tabelas">Excluir</td>
			</tr>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$codigo	= $oquefazer->registros->CLI_CODIGO;
					$nome	= $oquefazer->registros->CLI_NOME;
					$razaosocial	= $oquefazer->registros->CLI_RAZAOSOCIAL;
					$dtcad	= $oquefazer->registros->CLI_DTCAD;
					$dtalt	= $oquefazer->registros->CLI_DTALT;
			?>
			<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
				<td class="dados-tabelas"><? echo $nome;?></td>
				<td class="dados-tabelas"><? echo $razaosocial;?></td>
				<td class="dados-tabelas"><? echo $dtcad;?></td>
				<td class="dados-tabelas"><? echo $dtalt;?></td>
				
				<td class="dados-tabelas">
					<a href="index.php?tabela=detalhesClientes&acao=detalhesClientes&codigo=<? echo $codigo;?>">
						<img src="images/others/view.png" border="0" width="24px">
					</a>
				</td>
				<td class="dados-tabelas">
					<a href="index.php?tabela=formularioAlterarClientes&acao=formularioAlterarClientes&codigo=<? echo $codigo;?>">
						<img src="images/others/update.png" border="0" width="24px">
					</a>
				</td>
				<td class="dados-tabelas">
					<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&codigo=<? echo $codigo;?>';}">						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&codigo=<? echo $codigo;?>';}">											<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nNome: <?php echo $nome;?>')) {location='index.php?tabela=excluirClientes&acao=excluirClientes&codigo=<? echo $codigo;?>';}">
						<img src="images/others/delete.png" border="0" width="24px">
					</a>
				</td>
			</tr>
				<?php 
				} ?>
				<tr>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				<td class="rodape-tabelas">&nbsp;</td>
				</tr>
		</table>
	</div>

