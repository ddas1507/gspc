<?php
	$codigo	= $oquefazer->registros->SER_CODIGO;
	$id		= $oquefazer->registros->SER_ID;
	$nome	= $oquefazer->registros->SER_NOME;
	$dtcad	= $oquefazer->registros->SER_DTCAD;
	$dtalt	= $oquefazer->registros->SER_DTALT;
?>
<table class="bloco-detalhes-table">
	<tr>
		<td ><? echo $codigo;?></td>
		<td ><? echo $id;?></td>
		<td ><? echo $nome;?></td>
		<td ><? echo $dtcad;?></td>
		<td ><? echo $dtalt;?></td>
</table>