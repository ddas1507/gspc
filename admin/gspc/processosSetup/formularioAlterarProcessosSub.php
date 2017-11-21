<form name="formularioAlterarProcessosSub" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Processos</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarProcessosSub&acao=listarProcessosSub">Consultar Tarefas</a></b></li>
						<li>></li>						
						<li>Atualizar Cadastro</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Tarefa</legend>
					<table>
						<tr><td>Titulo:</td><td><input type="text" name="prosub_nome" id="prosub_nome" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->PROSUB_NOME;?>"/></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr >
			<td colspan="2">
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-alterar" onmouseover="this.className='bt-alterarOver'" onmouseout="this.className='bt-alterar'"
						type="submit" value="Alterar" name="Alterar" 
					/>
						&nbsp;
					<input 
						class="bt-restaurar" onmouseover="this.className='bt-restaurarOver'" onmouseout="this.className='bt-restaurar'"
						type="reset" value="Restaurar" name="Restaurar"
					/>
					<input type="hidden" value="gravarAlteracaoProcessosSub" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoProcessosSub" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PROSUB_CODIGO;?>" name="codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>