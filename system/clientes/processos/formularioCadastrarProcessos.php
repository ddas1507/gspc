<form name="formularioCadastrarProcessos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Processos</b></li>
						<li>></li>
						<li>Cadastrar Processo Completo</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Processo Completo</legend>
					<table>
						<tr>
							<td>Processo:</td>
							<td>
								<select name="pro_nome" id="pro_nome">
								  <option>Selecione...</option>
								  <?php echo $oquefazer->listarProcessosSetup();?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tarefa:</td>
							<td>
								<select name="pro_sub" id="pro_sub">
								  <option>Selecione...</option>
								  <?php echo $oquefazer->listarProcessosSub();?>
								</select>
							</td>
						</tr>
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
					<input type="hidden" value="gravarProcessos" name="tabela"/>
					<input type="hidden" value="gravarProcessos" name="acao"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>