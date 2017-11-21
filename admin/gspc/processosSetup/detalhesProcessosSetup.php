<?php
	$codigo	= $oquefazer->registros->PROSET_CODIGO;
	$id		= $oquefazer->registros->PROSET_ID;
	$nome	= $oquefazer->registros->PROSET_NOME;
	$dtcad	= $oquefazer->registros->PROSET_DTCAD;
	$dtalt	= $oquefazer->registros->PROSET_DTALT;
?>
<table class="bloco-detalhes-table">
	<tr>
		<td ><? echo $codigo;?></td>
		<td ><? echo $id;?></td>
		<td ><? echo $nome;?></td>
		<td ><? echo $dtcad;?></td>
		<td ><? echo $dtalt;?></td>
</table>