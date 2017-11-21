<table border="1">
	<form name="formularioAlterarTarefas" action="index.php" method="post">
		<tr >
			<td colspan="2" >
				<hr>ALTERAR DADOS CADASTRAIS<hr>
			</td>
		</tr>

		<tr>
			<td >trf_id:</td>
			<td ><input type="text" name="trf_id" id="trf_id" size="100px" maxlength="50" value="<?php echo $oquefazer->registros->TRF_ID;?>"/></td>
		</tr>
		<tr>
			<td >cli_codigo:</td>
			<td ><input type="text" name="cli_codigo" id="cli_codigo" size="100px" maxlength="50" value="<?php echo $oquefazer->registros->CLI_CODIGO;?>"/></td>
		</tr>

		<tr >
			<td colspan="2">
					<input 
						class="" onmouseover="this.className=''" onmouseout="this.className=''"
						type="submit" value="Alterar" name="Alterar"
					/>
						&nbsp;
					<input 
						class="" onmouseover="this.className=''" onmouseout="this.className=''"
						type="reset" value="Restaurar" name="Restaurar"
					/>
				<input type="hidden" value="gravarAlteracaoTarefas" name="tabela"/>
				<input type="hidden" value="gravarAlteracaoTarefas" name="acao"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->TRF_CODIGO;?>" name="codigo"/>
			</td>
		</tr>
	</form>
</table>