<script language="javascript">
//-----------------------------------------------------
//Funcao: MascaraMoeda
//Sinopse: Mascara de preenchimento de moeda
//Parametro:
//   objTextBox : Objeto (TextBox)
//   SeparadorMilesimo : Caracter separador de milésimos
//   SeparadorDecimal : Caracter separador de decimais
//   e : Evento
//Retorno: Booleano
//Autor: Gabriel Fróes - www.codigofonte.com.br
//-----------------------------------------------------
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
</script>
<?php $codigo_cliente = $_REQUEST['clicod'];?>
<?php $codigo_imovel = $_REQUEST['codigo_imovel'];?>
<?php $codigo_processo = $_REQUEST['codigo_processo'];?>
<?php $codigo_servico = $_REQUEST['codigo_servico'];?>
<?php $codigo_tecnico = $_REQUEST['codigo_tecnico'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php $nome_imovel = $_REQUEST['nome_imovel'];?>
<?php $nome_processo = $_REQUEST['nome_processo'];?>
<?php $nome_servico = $_REQUEST['nome_servico'];?>
<?php $nome_tecnico = $_REQUEST['nome_tecnico'];?>
<table class="tabelas-consulta" >	
	<tr>
		<td class="titulo-tabelas">Valor de honor&aacute;rios</td>
	</tr>
	<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
		<form name="formularioCadastrarTarefasHonorarios" action="index.php" method="post" enctype="multipart/form-data">
			<td class="dados-tabelas">
				<table >
					<tr>
						<td >
							Valor:&nbsp;
							<input type="text" name="valor_honorarios" id="valor_honorarios" placeholder="Digite o valor" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required" />&nbsp;
						</td>
						<td colspan="2" align="center">
							<input 
								class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
								type="submit" value="Registrar" name="Registrar" 
							/>
							<input type="hidden" value="form-list-status-tarefas" name="tabela"/>
							<input type="hidden" value="form-list-status-tarefas" name="acao"/>
							<input type="hidden" value="<? echo $nome_cliente;?>" name="nome_cliente"/>
							<input type="hidden" value="<? echo $nome_imovel;?>" name="nome_imovel"/>
							<input type="hidden" value="<? echo $nome_processo;?>" name="nome_processo"/>
							<input type="hidden" value="<? echo $nome_servico;?>" name="nome_servico"/>
							<input type="hidden" value="<? echo $nome_tecnico;?>" name="nome_tecnico"/>
							<input type="hidden" value="<? echo $codigo_cliente;?>" name="clicod"/>
							<input type="hidden" value="<? echo $codigo_imovel;?>" name="codigo_imovel"/>
							<input type="hidden" value="<? echo $codigo_processo;?>" name="codigo_processo"/>
							<input type="hidden" value="<? echo $codigo_servico;?>" name="codigo_servico"/>
							<input type="hidden" value="<? echo $codigo_tecnico;?>" name="codigo_tecnico"/>
						</td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
		<td class="rodape-tabelas">&nbsp;</td>
	</tr>
</table>