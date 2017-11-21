<?php $codigo_cliente = $_REQUEST['clicod'];?>
<?php $codigo_imovel = $_REQUEST['codigo_imovel'];?>
<?php $codigo_processo = $_REQUEST['codigo_processo'];?>
<?php $codigo_servico = $_REQUEST['codigo_servico'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php $nome_imovel = $_REQUEST['nome_imovel'];?>
<?php $nome_processo = $_REQUEST['nome_processo'];?>
<?php $nome_servico = $_REQUEST['nome_servico'];?>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Nome do T&eacute;cnico</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
					$codigo_tecnico = $oquefazer->registros->TEC_CODIGO;
					$nome_tecnico	= $oquefazer->registros->TEC_NOME;
			?>
				<tr onclick="location.href = 'index.php?tabela=form-list-honorarios-tarefas&acao=form-list-honorarios-tarefas&nome_cliente=<? echo $nome_cliente;?>&nome_imovel=<? echo $nome_imovel;?>&nome_processo=<? echo $nome_processo;?>&nome_servico=<? echo $nome_servico;?>&nome_tecnico=<? echo $nome_tecnico;?>&clicod=<? echo $codigo_cliente;?>&codigo_imovel=<? echo $codigo_imovel;?>&codigo_processo=<? echo $codigo_processo;?>&codigo_servico=<? echo $codigo_servico;?>&codigo_tecnico=<? echo $codigo_tecnico;?>';" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome_tecnico;?></td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>