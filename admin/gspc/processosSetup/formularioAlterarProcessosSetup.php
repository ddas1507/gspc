<form name="formularioAlterarProcessosSetup" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Processos</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarProcessosSetup&acao=listarProcessosSetup">Consultar Processos</a></b></li>
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
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Processo</legend>
					<table>
						<tr><td>Titulo:</td><td><input type="text" name="proset_nome" id="proset_nome" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->PROSET_NOME;?>"/></td></tr>
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
					<input type="hidden" value="gravarAlteracaoProcessosSetup" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoProcessosSetup" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PROSET_CODIGO;?>" name="codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>