<form name="formularioCadastrarProcessosSub" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Tarefas</b></li>
						<li>></li>
						<li>Cadastrar Tarefa</li>
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
						<tr><td>T&iacute;tulo:</td><td><input type="text" name="prosub_nome" id="prosub_nome" size="30px" maxlength="50" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset class="conteudo-fielset">
					<input 
						class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="submit" value="Salvar" name="Salvar" 
					/>
						&nbsp;
					<input 
						class="bt-limpar" onmouseover="this.className='bt-limparOver'" onmouseout="this.className='bt-limpar'"
						type="reset" value="Limpar" name="Limpar"
					/>
					<input type="hidden" value="gravarProcessosSub" name="tabela"/>
					<input type="hidden" value="gravarProcessosSub" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>