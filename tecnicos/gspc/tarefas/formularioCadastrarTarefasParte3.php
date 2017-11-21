<?php $codigo_cliente = $_REQUEST['clicod'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php $img_cliente = $_REQUEST['img_cliente'];?>
<?php $ref_imovel = $_REQUEST['ref_imovel'];?>
<?php $codigo_imovel = $_REQUEST['codigo_imovel'];?>
<?php $nome_imovel = $_REQUEST['nome_imovel'];?>
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Servi&ccedil;os</b></li>
						<li>></li>
						<li>Cadastrar Novo Servi&ccedil;o</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr><td class="titulo-tabelas">Selecione Um processo</td></tr>
</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<td class="titulo-tabelas">T&iacute;tulo do Processo</td>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
			{
				$codigo_processo = $oquefazer->registros->PROSET_CODIGO;
				$nome_processo	= $oquefazer->registros->PROSET_NOME;
			?>
				<tr onclick="location.href = 'index.php?tabela=form-list-servicos-tarefas&acao=form-list-servicos-tarefas&clicod=<? echo $codigo_cliente;?>&nome_cliente=<? echo $nome_cliente;?>&img_cliente=<? echo $img_cliente;?>&codigo_imovel=<? echo $codigo_imovel;?>&ref_imovel=<? echo $ref_imovel;?>&nome_imovel=<? echo $nome_imovel;?>&codigo_processo=<? echo $codigo_processo;?>&nome_processo=<? echo $nome_processo;?>';" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $nome_processo;?></td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>