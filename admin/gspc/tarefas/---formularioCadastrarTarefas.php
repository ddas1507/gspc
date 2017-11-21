<table border="1">
	<form name="formularioCadastrarTarefas" action="index.php" method="get" enctype="multipart/form-data">
		<tr >
			<td >
				<hr>CADASTRAR NOVA TAREFA</hr>
			</td>
		</tr>
		<tr>
			<td>
				<select name="cli_codigo" id="cli_codigo">
				  <option>Selecione um Cliente</option>
				  <?php echo $oquefazer->listarTarefasClientes();?>
				</select>
				<input 
					class="" onmouseover="this.className=''" onmouseout="this.className=''"
					type="submit" value="OK" name="OK" readonly="readonly"
				/>
				<input type="hidden" value="gravarTarefas" name="tabela"/>
				<input type="hidden" value="gravarTarefas" name="acao"/>
				<input type="hidden" value="<?php $oquefazer->registros->CLI_CODIGO; ?>" name="cli_codigo"/>
			</td>
		</tr>
	</form>
</table>