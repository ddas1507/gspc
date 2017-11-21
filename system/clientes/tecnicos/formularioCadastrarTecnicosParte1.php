<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>	
			<tr>
				<th class="titulo-tabelas">Selecione um tipo de acesso</th>
			</tr>
		</thead>
		<tbody>
				<tr onclick="location.href = 'index.php?tabela=NAA&acao=NAA&teccod=<? echo '1';?>" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" ><td class="dados-tabelas">Administrador</td></tr>
				<tr onclick="location.href = 'index.php?tabela=NAT&acao=NAT&teccod=<? echo '2';?>" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" ><td class="dados-tabelas">T&eacute;cnico</td></tr>
				<tr onclick="location.href = 'index.php?tabela=NAC&acao=NAC&teccod=<? echo '3';?>" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" ><td class="dados-tabelas">Cliente</td></tr>
		</tbody>
	</table>
</div>