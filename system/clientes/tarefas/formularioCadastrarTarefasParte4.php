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

function enviaForm(){
	$('#quadroTarefas').submit();
}
</script>
<?php $codigo_cliente = $_REQUEST['clicod'];?>
<?php $codigo_imovel = $_REQUEST['codigo_imovel'];?>
<?php $codigo_processo = $_REQUEST['codigo_processo'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php $ref_imovel = $_REQUEST['ref_imovel'];?>
<?php $nome_imovel = $_REQUEST['nome_imovel'];?>
<?php $nome_processo = $_REQUEST['nome_processo'];?>

<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr><td class="titulo-tabelas"><?echo $nome_processo?></td></tr>
</table>
<div id="corpo-tabela">
	<table width="100%" border="0" >
		<thead>	
			<tr>
				<th class="titulo-tabelas">Nome da Tarefas</th>
				<th class="titulo-tabelas">Valor do Servi&ccedil;o</th>
				<th class="titulo-tabelas">Data do evento</th>
				<th class="titulo-tabelas">Percentual do evento</th>
			</tr>
		</thead>
		<tbody>	
			<form name="quadroTarefas" id="quadroTarefas" method="post" action="index.php?tabela=form-list-tecnicos-tarefas&acao=form-list-tecnicos-tarefas&nome_cliente=<? echo $nome_cliente;?>&nome_imovel=<? echo $nome_imovel;?>&nome_processo=<? echo $nome_processo;?>&nome_servico=<? echo $nome_servico;?>&clicod=<? echo $codigo_cliente;?>&codigo_imovel=<? echo $codigo_imovel;?>&codigo_processo=<? echo $codigo_processo;?>&codigo_servico=<? echo $codigo_servico;?>">
				<?php
				$dia = date('d');	$mes = date('m');	$ano = date('Y');
				
				$dia1 = $dia + 5;
				if($dia1 > 30){	$dia2 = 1 + 5;}
				else{$dia2 = $dia + 5;}
				
				$mes1 = $mes + 1;				
				if($dia1 > 30){	$mes2 = $mes + 1;}
				else{$mes2 = date('m');}

				$ano1 = $ano + 1;				
				if($mes1 > 12){	$ano2 = $ano + 1;}
				else{$ano2 = date('Y');}

				$i = 1;
					while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
					{
						$conta = $i++;
						$percent = 100 / $oquefazer->numeroRegistros;
						$codigo_servico = $oquefazer->registros->PRO_CODIGO;
						$nome_servico	= $oquefazer->registros->PRO_NOME;
				?>
						<tr class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
							<td class="dados-tabelas"><? echo $nome_servico;?> <input type="hidden" name="quadroTarefas[<? echo $nome_servico;?>][codigoServico]" value="<?php echo $codigo_servico; ?>" id="dataTarefa" /></td>
							<td class="dados-tabelas">R$&nbsp;<input type="text" name="quadroTarefas[<? echo $nome_servico;?>][valordaTarefa]" id="valordaTarefa" placeholder="Digite um valor" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required" />&nbsp;</td>
							<td class="dados-tabelas">
								<input type="text" name="quadroTarefas[<? echo $nome_servico;?>][dataTarefaDia]" id="dataTarefaDia" size="2" maxlength="2" value="<?php echo $dia2;?>" style=" text-align: center; "/>/
								<input type="text" name="quadroTarefas[<? echo $nome_servico;?>][dataTarefaMes]" id="dataTarefaMes" size="2" maxlength="2" value="<?php echo $mes2;?>" style=" text-align: center; "/>/
								<input type="text" name="quadroTarefas[<? echo $nome_servico;?>][dataTarefaAno]" id="dataTarefaAno" size="4" maxlength="4" value="<?php echo $ano2;?>" style=" text-align: center; "/>
							</td>
							<td class="dados-tabelas"><input type="text" name="quadroTarefas[<? echo $nome_servico;?>][percentTarefa]" id="percentTarefa" placeholder="" size="2" maxlength="2" value="<?echo $percent;?>" style=" text-align: center; "/>%</td>
						</tr>
				<?php 
				}?>
			</form>
				<tr>
	 				<td colspan="4" style="width: 100%;">
					<input class="bt-salvar" onmouseover="this.className='bt-salvarOver'" onmouseout="this.className='bt-salvar'"
						type="button" onclick="enviaForm()" value="Avan&ccedil;ar" />
					</td>
				</tr>	
		</tbody>
	</table>
</div>