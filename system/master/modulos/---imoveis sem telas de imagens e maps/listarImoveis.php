<table cellspacing="0" cellpadding="0" border="0" width="1024px">
	<tr>
		<td align="left">
		  <div id="navegacao-header">
			<ul>
				<li>Unidades</li>
				<li>></li>
				<li><b>Consultar Unidades Cadastradas</b></li>
			</ul>
		  </div>
		</td>
	</tr>
</table>
<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
			<th class="titulo-tabelas">Cliente Respons&aacute;vel</th>
			<th class="titulo-tabelas">Unidade</th>
			<th class="titulo-tabelas">Ref</th>
			<th class="titulo-tabelas">Data de Cadastro</th>
			<th class="titulo-tabelas">Ultima Altera&ccedil;&atilde;o</th>
			<th class="titulo-tabelas">Visualizar</th>
			<th class="titulo-tabelas">Editar</th>
			<th class="titulo-tabelas">Foto</th>
			<th class="titulo-tabelas">Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$codigo	= $oquefazer->registros->IMO_CODIGO;
					
					$img	= $oquefazer->registros->IMO_IMG;
					$nome	= $oquefazer->registros->IMO_NOME;
					$ref	= $oquefazer->registros->IMO_REF;
					$clinome= $oquefazer->registros->CLI_NOME;
					$clicod = $oquefazer->registros->CLI_CODIGO;
					$cep	= $oquefazer->registros->IMO_CEP;
					$dtcad	= $oquefazer->registros->IMO_DTCAD;
					$dtalt	= $oquefazer->registros->IMO_DTALT;
			?>
			<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
				<td class="dados-tabelas"><? echo $clinome;?></td>
				<td class="dados-tabelas"><? echo $nome;?></td>
				<td class="dados-tabelas"><? echo $ref;?></td>
				<td class="dados-tabelas"><? echo $dtcad;?></td>
				<td class="dados-tabelas"><? echo $dtalt;?></td>
				
				<td class="dados-tabelas">
					<a href="index.php?tabela=detalhesImoveis-dados-gerais&acao=detalhesImoveis-dados-gerais&codigo=<? echo $codigo;?>&cliente=<? echo $clinome;?>&clicod=<? echo $clicod;?>">
						<img src="images/others/view.png" border="0" width="24px">
					</a>
				</td>
				<td class="dados-tabelas">
					<a href="index.php?tabela=formularioAlterarImoveis&acao=formularioAlterarImoveis&codigo=<? echo $codigo;?>">
						<img src="images/others/update.png" border="0" width="24px">
					</a>
				</td>
				<td class="dados-tabelas">
					<a href="index.php?tabela=formularioAlterarFotoImoveis&acao=formularioAlterarFotoImoveis&codigo=<? echo $codigo;?>">
						<img src="images/others/imagem.png" border="0" width="24px">
					</a>
				</td>
				<td class="dados-tabelas">
					<a href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\nVoc&ecirc; deseja excluir a unidade abaixo?\n\nCodigo: <?php echo $id;?>\nUnidade: <?php echo $nome;?>\nCEP: <?php echo $cep;?>')) {location='index.php?tabela=excluirImoveis&acao=excluirImoveis&codigo=<? echo $codigo;?>';}">
						<img src="images/others/delete.png" border="0" width="24px">
					</a>
				</td>
			</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>