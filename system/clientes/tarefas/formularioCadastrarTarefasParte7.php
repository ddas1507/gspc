<?php  $codigo_cliente = $_REQUEST['clicod'];?>
<?php  $codigo_imovel = $_REQUEST['codigo_imovel'];?>
<?php  $codigo_processo = $_REQUEST['codigo_processo'];?>
<?php  $codigo_servico = $_REQUEST['codigo_servico'];?>
<?php  $codigo_tecnico = $_REQUEST['codigo_tecnico'];?>
<?php  $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php  $nome_imovel = $_REQUEST['nome_imovel'];?>
<?php  $nome_processo = $_REQUEST['nome_processo'];?>
<?php  $nome_servico = $_REQUEST['nome_servico'];?>
<?php  $nome_tecnico = $_REQUEST['nome_tecnico'];?>
<?php  $valor_honorarios = $_REQUEST['valor_honorarios'];?>

<table class="tabelas-consulta" >	
	<tr>
		<td class="titulo-tabelas">Conf&ecirc;rencia de dados</td>
	</tr>
	<tr>
		<form name="formularioCadastrarTarefasConferencia" action="index.php" method="post" enctype="multipart/form-data">
			<td>
				<table width="100%" >
					<tr><td class="tabela-dados-labels" >Cliente:</td><td class="tabela-dados-visualizar"><? echo $nome_cliente;?></td><tr>
					<tr><td class="tabela-dados-labels" >Im&oacute;vel:</td><td class="tabela-dados-visualizar"><? echo $nome_imovel;?></td></tr>
					<tr><td class="tabela-dados-labels" >Processo:</td><td class="tabela-dados-visualizar"><? echo $nome_processo;?></td></tr>
					<tr><td class="tabela-dados-labels" >T&eacute;cnico:</td><td class="tabela-dados-visualizar"><? echo $nome_tecnico;?></td></tr>
					<tr><td class="tabela-dados-labels" >Valor de honor&aacute;rios:</td><td class="tabela-dados-visualizar"><? echo 'R$ '.$valor_honorarios;?></td></tr>
					<tr>
						<td colspan="2" >
							<input 
								class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
								type="submit" value="Salvar" name="Salvar"
							/>
							<input type="hidden" value="form-list-gravar-tarefas" name="tabela"/>
							<input type="hidden" value="form-list-gravar-tarefas" name="acao"/>
							<input type="hidden" value="<? echo $nome_cliente;?>" name="tar_cliente_nome"/>
							<input type="hidden" value="<? echo $nome_imovel;?>" name="tar_imovel_nome"/>
							<input type="hidden" value="<? echo $nome_processo;?>" name="tar_processo_nome"/>
							<input type="hidden" value="<? echo $nome_tecnico;?>" name="tar_tecnico_nome"/>
							
							<input type="hidden" value="<? echo $codigo_cliente;?>" name="clicod"/>
							<input type="hidden" value="<? echo $codigo_imovel;?>" name="imocod"/>
							<input type="hidden" value="<? echo $codigo_processo;?>" name="tar_processo_codigo"/>
							<input type="hidden" value="<? echo $codigo_servico;?>" name="tar_servico_codigo"/>
							<input type="hidden" value="<? echo $codigo_tecnico;?>" name="tar_tecnico_codigo"/>
							<input type="hidden" value="<? echo $valor_honorarios;?>" name="tar_honorarios_valor"/>
						</td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
		<td class="rodape-tabelas">&nbsp;</td>
	</tr>
</table>