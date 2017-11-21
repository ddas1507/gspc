<style type="text/css">
.labels-negrito{
	font-weight:bold;
}
</style>
<?php
	$clicod = $_REQUEST['clicod'];
	$imocod	= $oquefazer->registros->IMO_CODIGO;
	$clinome	= $oquefazer->registros->CLI_NOME;
	$nome	= $oquefazer->registros->IMO_NOME;
	$ref	= $oquefazer->registros->IMO_REF;
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
	$fax	= $oquefazer->registros->IMO_FAX;
	$email	= $oquefazer->registros->IMO_EMAIL;
	$uso	= $oquefazer->registros->IMO_TERRENO_USO;
	$terreno_iptu	= $oquefazer->registros->IMO_TERRENO_IPTU;
	$terreno_registrodeimoveis	= $oquefazer->registros->IMO_TERRENO_REGISTRO_IMOVEIS;
	$terreno_topografia	= $oquefazer->registros->IMO_TERRENO_TOPOGRAFIA;
	$terreno_contribuintes	= $oquefazer->registros->IMO_TERRENO_CONTIBUINTES;
	$areaconstruida_projetoaprovado	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_PROJETO_APROVADO;
	$areaconstruida_averbada	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_AVERBADA;
	$areaconstruida_iptu	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_IPTU;
	$areaconstruida_matricula	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_MATRICULA;
	$areaconstruida_tomb_historico	= $oquefazer->registros->IMO_AREA_CONSTRUIDA_TOMB_HISTORICO;
?>
<table class="imoveis-fundo-dados-gerais">
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 3%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 25%;">Dados da Unidade</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 4%;">&nbsp;</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 15px; width: 65%;">
			<table style=" width: 100%; ">
				<tr>
					<td align="left">
						Consulta de processos
					</td>
					<td>
						<form action="index.php" method="post">
							<input 
								class="bt-consultar-processo" onmouseover="this.className='bt-consultar-processoOver'" onmouseout="this.className='bt-consultar-processo'"
								type="submit" value="Consultar processo" name="Consultar processo" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-processos" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
					<td>
						<form action="index.php" method="post">
							<input 
								class="bt-acervo-digital" onmouseover="this.className='bt-acervo-digitalOver'" onmouseout="this.className='bt-acervo-digital'"
								type="submit" value="Acervo digital" name="Acervo digital" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-acervo" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-acervo" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clinome;?>" name="cliente"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>							
						</form>
					</td>
					<td>
						<form action="index.php" method="post">
							<input 
								class="bt-financeiro" onmouseover="this.className='bt-financeiroOver'" onmouseout="this.className='bt-financeiro'"
								type="submit" value="Financeiro" name="Financeiro" 
							/>
							<input type="hidden" value="detalhesImoveis-consulta-financeiro" name="tabela"/>
							<input type="hidden" value="detalhesImoveis-consulta-financeiro" name="acao"/>
							<input type="hidden" value="<?php echo $imocod;?>" name="imocod"/>
							<input type="hidden" value="<?php echo $clicod;?>" name="clicod"/>
						</form>
					</td>
				</tr>
			
			</table>
		</td>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
	</tr>
	<tr>
		<td style="color:#069; font-weight:bold; height: 40px;font-size: 20px; width: 3%;">&nbsp;</td>
		<td valign="top" style=" border: 1px solid #ccc; width: 25%; background: #fff;">
			<table style=" margin: 20px; max-width: 250px; font-size: 12px;" border="0">
				<tr><td valign="top" style="color:#069; font-weight:bold; height:50px">Descri&ccedil;&atilde;o da unidade selecionada</td></tr>
				<tr><td><label style="font-weight:bold;">Unidade:&nbsp;</label><label><? echo $nome;?></label>&nbsp;<label style="font-weight:bold;">Ref:&nbsp;</label><label><? echo $ref;?></label></td></tr>
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
				<tr><td><?echo $obs;?></td></tr>
				<tr><td valign="top" align="center"><img src="images/imoveis/<?php echo $img;?>" border="0" width="250px"/></td></tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 4%;"></td>
		<td valign="top" style=" border: 1px solid #ccc; width: 65%; background: #fff;">
			<table border="0" style=" width: 100%; padding: 15px; font-size: 12px;">
				<tr>
					<td>
						<fieldset style=" border: 0px; "><legend style="color:#069; font-weight:bold;">Informa&ccedil;&otilde;es dispon&iacute;veis</legend>
							<table style="border-collpase:collpase; border: 0px solid #ccc; margin: auto;width: 100%;" >
								<tr>
									<td><label class="labels-negrito">CEP:</label>&nbsp;&nbsp;<? echo $cep?></td>
									<td><label class="labels-negrito">Endere&ccedil;o:</label>&nbsp;&nbsp;<? echo $endereco?></td>
								</tr>
								<tr>
									<td><label class="labels-negrito">N&uacute;mero:</label>&nbsp;&nbsp;<? echo $numero?></td>									
									<td><label class="labels-negrito">Complemento:</label>&nbsp;&nbsp;<? echo $complemento?></td>
								</tr>
								<tr>
									<td><label class="labels-negrito">Bairro:</label>&nbsp;&nbsp;<? echo $bairro?></td>
									<td>
										<label class="labels-negrito">Cidade:</label>&nbsp;&nbsp;<? echo $cidade?>&nbsp;&nbsp;
										<label class="labels-negrito">Estado:</label>&nbsp;&nbsp;<? echo $uf?>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>			
				<tr>		
					<td>
						<table style="border-collpase:collpase; border: 0px solid #ccc; margin: auto;width: 100%;" >
							<tr>
								<td>
									<?php/*
									if(isset($cep)){
										$imoveis_cep = urlencode($cep);
										$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$imoveis_cep&sensor=false";
										$getmap = cURL($url);
										$getmap = file_get_contents($url); 
										$googlemap = json_decode($getmap);
										foreach($googlemap->results as $res){
											 $address = $res->geometry;
											 $latlng = $address->location;
											 $formattedaddress = $res->formatted_address;
									?>
											<?php //echo "Latitude: ". $latlng->lat ."<br />". "Longitude:". $latlng->lng; ?>
											<!--iframe class="map" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $imoveis_cep;?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo urlencode($formattedaddress);?>&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" style=" margin-bottom: 15px; margin-top: 15px; "></iframe-->
											<?php
										}
									}*/
									?>
								</td>
							</tr>
						</table>					
					</td>
				</tr>
				<tr>
					<td align="center" style=" margin-top: 15px; margin-bottom: 10px; ">
						<label><a href="index.php?tabela=formularioCadastrarImagens&acao=formularioCadastrarImagens&imocod=<?echo $imocod;?>&clicod=<?echo $clicod;?>">Inserir nova imagem da unidade</a></label>
					</td>
				</tr>
				<tr>
					<td>
						<link rel="stylesheet" href="css/carosel/oxp.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="css/carosel/style.css" type="text/css" media="screen" />
						
						<script type="text/javascript" src="js/carosel/jquery-1.3.2.min.js"></script>
						<script type="text/javascript" src="js/carosel/jcarousellite_1.0.1.pack.js"></script>
						<script type="text/javascript" src="js/captify.tiny.js"></script>
						
						<script type="text/javascript">
							$(function() {
								$(".slider").jCarouselLite({
									btnNext: ".next",
									btnPrev: ".prev",
									visible: 4
								});
							});

							$(document).ready(function(){
								$('img.captify').captify({
									// all of these options are... optional
									// ---
									// speed of the mouseover effect
									speedOver: 'slow',
									// speed of the mouseout effect
									speedOut: 'normal',
									// how long to delay the hiding of the caption after mouseout (ms)
									hideDelay: 1000,	
									// 'fade', 'slide', 'always-on'
									animation: 'slide',		
									// text/html to be placed at the beginning of every caption
									prefix: '',		
									// opacity of the caption on mouse over
									opacity: '0.7',					
									// the name of the CSS class to apply to the caption box
									className: 'caption-bottom',	
									// position of the caption (top or bottom)
									position: 'bottom',
									// caption span % of the image
									spanWidth: '100%'
								});
							});

						</script>
						<div id="wrap">
							<div id="list">
								<div class="prev"><img src="images/others/prev.png" alt="prev" /></div>
										
									<div class="slider">
										<ul>
											<?php
												while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
												{
													$imgCarosel	= $oquefazer->registros->IMG_DESCRICAO;
													$nome	= $oquefazer->registros->IMO_NOME;
													$ref	= $oquefazer->registros->IMO_REF;
											?>										
											<li>
												<img src="images/imagens/<?php echo $imgCarosel;?>" alt="<?php echo $imgCarosel;?>" class="captify" />
											</li>
											<?php
											} ?>
										</ul>
									</div>
								<div class="next"><img src="images/others/next.png " alt="next" /></div>
							</div>
						</div>
						<script type="text/javascript">
							var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
							document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
							</script>
							<script type="text/javascript">
							try {
							var pageTracker = _gat._getTracker("UA-8453623-1");
							pageTracker._trackPageview();
							} catch(err) {}
						</script>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top" style=" border: 0px solid #ccc; width: 3%;"></td>
	</tr>
</table>