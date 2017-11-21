<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Tarefas</b></li>
					<li>></li>
					<li>Consultar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Data</th>
				<th class="titulo-tabelas">Cliente</th>
				<th class="titulo-tabelas">Unidade</th>
				<th class="titulo-tabelas">Servi&ccedil;o</th>
				<th class="titulo-tabelas">T&eacute;cnico</th>
				<th class="titulo-tabelas">Status</th>
				<th class="titulo-tabelas">Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$codigo	= $oquefazer->registros->TAR_CODIGO;

					$clicod	= $oquefazer->registros->TAR_CLIENTE_CODIGO;
					$cliente	= $oquefazer->registros->TAR_CLIENTE_NOME;

					$imovel	= $oquefazer->registros->TAR_IMOVEL_NOME;
					$imocod	= $oquefazer->registros->TAR_IMOVEL_CODIGO;

					$nprocesso	= $oquefazer->registros->TAR_PROCESSO_CODIGO;
					$processo	= $oquefazer->registros->TAR_PROCESSO_NOME;

					$servico	= $oquefazer->registros->TAR_SERVICO_NOME;
					$tecnico	= $oquefazer->registros->TAR_TECNICO_NOME;

					$honorarios	= $oquefazer->registros->TAR_HONORARIOS_VALOR;

					$valorTarefa	= $oquefazer->registros->VALORDATAREFA;
					$dataTarefadia	= $oquefazer->registros->DATATAREFADIA;
					$dataTarefames	= $oquefazer->registros->DATATAREFAMES;
					$dataTarefaano	= $oquefazer->registros->DATATAREFAANO;
					$status	= $oquefazer->registros->TAR_STATUS;
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesImoveis-consulta-servicos&acao=detalhesImoveis-consulta-servicos&imocod=<? echo $imocod;?>&nprocesso=<? echo $nprocesso;?>&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar os processos ">
					<td class="dados-tabelas"><?echo $dataTarefadia.'/'.$dataTarefames.'/'.$dataTarefaano;?></td>
					<td class="dados-tabelas"><?echo $cliente;?></td>
					<td class="dados-tabelas"><?echo $imovel;?></td>
					<td class="dados-tabelas"><?echo $processo;?></td>
					<td class="dados-tabelas"><?echo $tecnico;?></td>
					<td class="dados-tabelas">
					<?/*
						$statusProcesso = $oquefazer->TarefasStatus();
						$ProcessoCompleto = $oquefazer->TarefasCompletas();
					
						if($statusProcesso == 0){echo 'Pendente';}
						else if(($statusProcesso > 0) && ($statusProcesso < $ProcessoCompleto)){echo 'Em andamento';}
						else{echo 'Conclu&iacute;do';}
						*/
					?>
					</td>
					<?php
					$nivel = $_SESSION['sessao_nivel_usuario'];
					if($nivel == 1){?>
					<td class="dados-tabelas">
						<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir o cadastro abaixo?\n\nProcesso: <?php echo $processo;?>\nServico: <?php echo $servico;?>\nStatus: <?php echo $status;?>\nTecnico: <?php echo $tecnico;?>\n')) {location='index.php?tabela=excluirTarefas&acao=excluirTarefas&codigo=<? echo $codigo;?>&nprocesso=<? echo $nprocesso;?>';}">
							<img src="images/others/delete.png" title="Excluir" alt="Excluir" border="0" width="24px" />
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
				} 
				?>
			</tr>
		</tbody>
	</table>
</div>

