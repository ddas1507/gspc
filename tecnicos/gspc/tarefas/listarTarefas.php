<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Servi&ccedil;os</b></li>
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
						
					$datadecadastro	= $oquefazer->registros->TAR_DTCAD;

					$statusAtualProcessos = $oquefazer->verificarTarefasServicosConcluidos($imocod, $nprocesso);
					$total = $oquefazer->totalTarefas;
					$concluidos = $oquefazer->tarefasConcluidas;
					
					if($total == $concluidos){
						$status = '<img src="images/others/ok.png" width="16px" border="0" /> <label>Concluido</label>';
					}
					else if($concluidos == 0){
						$status = '<img src="images/others/pendente.png" width="16px" border="0" /> <label>Pendente</label>';
					}
					else if($concluidos > 0 && $concluidos < $total){
						$status = '<img src="images/others/andamento.gif" width="16px" border="0" /> <label>Em Andamento</label>';
					}
					//$porcentagem = (($concluidos * 100) / $total);
			?>
				<tr onclick="location.href = 'index.php?tabela=detalhesImoveis-consulta-servicos&acao=detalhesImoveis-consulta-servicos&imocod=<? echo $imocod;?>&nprocesso=<? echo $nprocesso;?>&clicod=<? echo $clicod;?>';" style="cursor: pointer;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" title="clique para visualizar os processos ">
					<td class="dados-tabelas"><?echo $dataTarefadia.'/'.$dataTarefames.'/'.$dataTarefaano;?></td>
					<td class="dados-tabelas"><?echo $cliente;?></td>
					<td class="dados-tabelas"><?echo $imovel;?></td>
					<td class="dados-tabelas"><?echo $processo;?></td>
					<td class="dados-tabelas"><?echo $tecnico;?></td>
					<td class="dados-tabelas" style="text-align:left;"><?echo $status;//.' - '.$porcentagem."%";?>
				</tr>
				<?php
				} 
				?>
			</tr>
		</tbody>
	</table>
</div>

