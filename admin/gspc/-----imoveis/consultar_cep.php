<?php
 
$cep = $_POST['cep'];
 
$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
 
$dados['sucesso'] = (string) $reg->resultado;
$dados['imo_enredeco']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['imo_bairro']  = (string) $reg->bairro;
$dados['imo_cidade']  = (string) $reg->cidade;
$dados['imo_uf']  = (string) $reg->uf;
 
echo json_encode($dados);
 
?>