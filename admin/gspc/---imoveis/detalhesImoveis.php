<?php
	$clicod = $_REQUEST['clicod'];
	$codigo	= $oquefazer->registros->IMO_CODIGO;
	$clinome	= $oquefazer->registros->CLI_NOME;
	$nome	= $oquefazer->registros->IMO_NOME;
	$cep	= $oquefazer->registros->IMO_CEP;
	$endereco	= $oquefazer->registros->IMO_ENDERECO;
	$complemento	= $oquefazer->registros->IMO_COMPLEMENTO;
	$bairro	= $oquefazer->registros->IMO_BAIRRO;
	$cidade	= $oquefazer->registros->IMO_CIDADE;
	$numero	= $oquefazer->registros->IMO_NUMERO;
	$uf		= $oquefazer->registros->IMO_UF;
	$imotel	= $oquefazer->registros->IMO_TEL;
	$imotelnome	= $oquefazer->registros->IMO_TELNOME;
	$obs	= $oquefazer->registros->IMO_OBS;
	$img	= $oquefazer->registros->IMO_IMG;
	$dtcad	= $oquefazer->registros->IMO_DTCAD;
	$dtalt	= $oquefazer->registros->IMO_DTALT;
?>
<table class="tabela-nevegacao" >
	<tr>
		<td align="left">
			<div id="navegacao-header">
				<ul>
					<li><b>Unidades</b></li>
					<li>></li>
					<li><b><a href="index.php?tabela=listarImoveis&acao=listarImoveis">Consultar Unidades Cadastradas</a></b></li>
					<li>></li>
					<li>Visualizar</li>
				</ul>
			</div>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td valign="top" style=" border: 1px solid #ccc; margin-left: 5px; ">
			<table style=" margin-right: 10px; max-width: 250px;" border="0">
				<tr><td valign="top" style="color:#069; font-weight:bold; height:50px">Descri&ccedil;&atilde;o da unidade selecionada</td></tr>
				<tr>
					<td valign="top" style="height:60px;">
						<label >
							<? echo $endereco;?>,
							<? echo $numero;?>&nbsp;
							CEP&nbsp;<? echo $cep?>,
							<? echo $bairro;?>&nbsp-&nbsp;
							<? echo $cidade;?>-<? echo $uf;?>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" align="center">
						<form action="index.php" method="post">
							<input 
								class="bt-consultar-dados-gerais" onmouseover="this.className='bt-consultar-dados-geraisOver'" onmouseout="this.className='bt-consultar-dados-gerais'"
								type="submit" value="Consultar dados gerais" name="Consultar Dados Gerais" 
							/>
							<input type="hidden" value="listarImagens" name="tabela"/>
							<input type="hidden" value="listarImagens" name="acao"/>
							<input type="hidden" value="<? echo $codigo;?>" name="imocod"/>
						</form>
					</td>
				</tr>
				<tr><td valign="top" align="center"><img src="images/imoveis/<?php echo $img;?>" border="0" width="250px"/></td></tr>
				<tr>
					<td valign="top" align="center">
						<form action="index.php" method="post">
							<input 
								class="bt-consultar-dados-gerais" onmouseover="this.className='bt-consultar-dados-geraisOver'" onmouseout="this.className='bt-consultar-dados-gerais'"
								type="submit" value="Ver imagens da unidade" name="Ver imagens da unidade" 
							/>
							<input type="hidden" value="listarImagens" name="tabela"/>
							<input type="hidden" value="listarImagens" name="acao"/>
							<input type="hidden" value="<? echo $codigo;?>" name="imocod"/>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top">
			<table width="245px">
				<tr><td class="tabela-dados-labels">C&oacute;digo:</td><td class="tabela-dados-visualizar"><? echo $codigo;?></td></tr>
				<tr><td class="tabela-dados-labels">Cliente:</td><td class="tabela-dados-visualizar"><? echo $clinome;?></td></tr>
				<tr><td class="tabela-dados-labels">Nome:</td><td class="tabela-dados-visualizar"><? echo $nome;?></td></tr>
				<tr><td class="tabela-dados-labels">Complemento:</td><td class="tabela-dados-visualizar"><? echo $complemento;?></td></tr>
				<tr><td class="tabela-dados-labels">Telefone:</td><td class="tabela-dados-visualizar"><? echo $imotel;?></td></tr>
				<tr><td class="tabela-dados-labels">Contato:</td><td class="tabela-dados-visualizar"><? echo $imotelnome;?></td></tr>
				<tr><td class="tabela-dados-labels">Data de Cadastro:</td><td class="tabela-dados-visualizar"><? echo $dtcad;?></td></tr>			
				<tr><td class="tabela-dados-labels">Ultima Modifica&ccedil;&atilde;o:</td><td class="tabela-dados-visualizar"><? echo $dtalt;?></td></tr>
				<tr><td class="tabela-dados-labels">Observa&ccedil;&otilde;es:</td><td class="tabela-dados-visualizar"><? echo $obs;?></td></tr>								
			</table>		
		</td>
		<td valign="top">
			<table style="border-collpase:collpase; border: 1px solid #ccc; margin-left:10px;" width="425px" >
				<tr>
					<td>
						<?php
						if(isset($cep)){
							$imoveis_cep = urlencode($cep);
							$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$imoveis_cep&sensor=false";
							$getmap = file_get_contents($url); 
							$googlemap = json_decode($getmap);
							foreach($googlemap->results as $res){
								 $address = $res->geometry;
								 $latlng = $address->location;
								 $formattedaddress = $res->formatted_address;
						?>
								<?php //echo "Latitude: ". $latlng->lat ."<br />". "Longitude:". $latlng->lng; ?>
								<iframe class="map" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $imoveis_cep;?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo urlencode($formattedaddress);?>&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
								<?php
							}
						}
						?>
					</td>
				</tr>
			</table>
		</td>		
	</tr>
</table>