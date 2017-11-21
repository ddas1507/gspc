<form name="formularioAlterarProcessos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Processos</b></li>
						<li>></li>
						<li><b><a href="index.php?tabela=listarProcessos&acao=listarProcessos">Consultar Processos Completo</a></b></li>
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
						<tr><td>Processo:</td><td><input type="text" name="pro_nome" id="pro_nome" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->PRO_NOME;?>"/></td></tr>
						<tr><td>Tarefa:</td><td><input type="text" name="pro_sub" id="pro_sub" size="50px" maxlength="50" value="<?php echo $oquefazer->registros->PRO_SUB;?>"/></td></tr>
						<tr>
							<td>Status:</td>
							<td>
								<select name="pro_status" id="pro_status">
									<?php
										$concluido = '';
										$pendente = '';
										
										switch($oquefazer->registros->PRO_STATUS)
										{
										case 'Concluido': $concluido = 'selected';break;
										case 'Pendente': $pendente = 'selected';break;
										}
									?>
									<option value="Concluido" <?php echo $concluido;?>>Concluido</option>
									<option value="Pendente" <?php echo $pendente;?>>Pendente</option>
								</select>
							</td>
						</tr>
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
					<input type="hidden" value="gravarAlteracaoProcessos" name="tabela"/>
					<input type="hidden" value="gravarAlteracaoProcessos" name="acao"/>
					<input type="hidden" value="<?php echo $oquefazer->registros->PRO_CODIGO;?>" name="codigo"/>
				</fieldset>
			</td>
		</tr>
	</table>
</form>