<?php
	$codigo	= $oquefazer->registros->PRO_CODIGO;
	$id		= $oquefazer->registros->PRO_ID;
	$nome	= $oquefazer->registros->PRO_NOME;
	$dtcad	= $oquefazer->registros->PRO_DTCAD;
	$dtalt	= $oquefazer->registros->PRO_DTALT;
?>
<table class="bloco-detalhes-table">
	<tr>
		<td ><? echo $codigo;?></td>
		<td ><? echo $id;?></td>
		<td ><? echo $nome;?></td>
		<td ><? echo $dtcad;?></td>
		<td ><? echo $dtalt;?></td>
</table>