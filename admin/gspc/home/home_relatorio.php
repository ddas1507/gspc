			<table border="1" cellpadding="3" cellspacing="3" width="815px" height="10x" align="center">
				<tr >
					<td colspan="13" align="left"><b>HOME</b></td>
				</tr>
			</table>
			<table  class="bordas" border="0" cellpadding="3" cellspacing="3" width="800px" height="10x" align="LEFT">
				<tr ><td colspan="3" align="center"><b>ESTATISTICAS DE CONTATOS</b></td>
				<tr class="titulos_2">
					<td align="LEFT">
						<b>OPERADORA</b>
					</td>
					<td>
						<b>TIPO</b>
					</td>
					<td>
						<b>TOTAL</b>
					</td>
				</tr>
			<?
				while($oque_fazer->registros = $oque_fazer->resultado->FetchNextObject())
				{
			?>	
				<tr >
					<td align="LEFT">
						<b><? echo $oque_fazer->registros->OPERADORA;?></b>
					</td>
					<td>
						<b><? echo $oque_fazer->registros->TIPO;?></b>
					</td>
					<td>
						<b><? echo $oque_fazer->registros->QUANTIDADE;?></b>
					</td>
				</tr>
			<? 
				}
			?>
				<tr class="titulos_2" >
					<td COLSPAN="2" align="LEFT">
						<b>&nbsp;</b>
					</td>
					<td align="RIGHT">
						<b>
						<? 

						?>
						</b>
					</td>
				</tr>			
			</table>