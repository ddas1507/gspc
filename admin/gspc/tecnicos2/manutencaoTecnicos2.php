<?php
	class manutencaoTecnicos2{
		var $resultado;
		var $registros;

		function manutencaoTecnicos2(){
			$this->con = new conexao();
		}

		function listarTecnicos2(){$sql = "select * FROM tbl_tecnicos2 WHERE TEC_NOME like '%".$filtrar_por."%' ORDER BY TEC_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarClientes(){$sql = "select * FROM tbl_clientes ORDER BY CLI_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarImoveis(){$sql = "select * FROM tbl_imoveis WHERE CLI_CODIGO = ".$_REQUEST['clicod']." ORDER BY IMO_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}

		function excluirTecnicos2(){
			$sql = "delete from tbl_tecnicos2 where TEC_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Tecnico excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o tecnico!");
						return false;
				}
		}

		function formularioAlterarTecnicos2(){$sql = "select * from tbl_tecnicos2 where TEC_CODIGO =".$_REQUEST['codigo'];$this->resultado = $this->con->banco->Execute($sql);$this->registros = $this->resultado->FetchNextObject();}
		function detalhesTecnicos2(){$sql = "select * from tbl_tecnicos2 where TEC_CODIGO =".$_REQUEST['codigo'];$this->resultado = $this->con->banco->Execute($sql);$this->registros = $this->resultado->FetchNextObject();}

		function gravarAlteracaoTecnicos2(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_tecnicos2 set 
			TEC_LOGIN = '".$_POST['tec_login']."',
			TEC_EMAIL = '".$_POST['tec_email']."',
			TEC_CPF = '".$_POST['tec_cpf']."',
			TEC_CNPJ = '".$_POST['tec_cnpj']."',
			TEC_CEP = '".$_POST['tec_cep']."',
			TEC_ENDERECO = '".$_POST['tec_endereco']."',
			TEC_COMPLEMENTO = '".$_POST['tec_complemento']."',
			TEC_BAIRRO = '".$_POST['tec_bairro']."',
			TEC_CIDADE = '".$_POST['tec_cidade']."',
			TEC_NUMERO = '".$_POST['tec_numero']."',
			TEC_UF = '".$_POST['tec_uf']."',
			TEC_TELFIXO = '".$_POST['tec_telfixo']."',
			TEC_TELNOME = '".$_POST['tec_telnome']."',
			TEC_TELCEL = '".$_POST['tec_telcel']."',
			TEC_OBS = '".$_POST['tec_obs']."',
			TEC_BCO = '".$_POST['tec_bco']."',
			TEC_AG = '".$_POST['tec_ag']."',
			TEC_CC = '".$_POST['tec_cc']."',
			TEC_DV = '".$_POST['tec_dv']."',
			TEC_DTALT = '".$data_hora."'

			where TEC_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Tecnico alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu tecnico!");
					return false;
			}
		}

		function gravarTecnicos2(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_tecnicos2
			(
				CODIGO_CLIENTE,
				CODIGO_IMOVEL,
				IMG_CLIENTE,
				NOME_CLIENTE,
				NOME_IMOVEL,
				REF_IMOVEL,
				TEC_NIVEL,
				TEC_LOGIN,
				TEC_EMAIL,
				TEC_SENHA,
				TEC_CPF,
				TEC_CNPJ,
				TEC_CEP,
				TEC_ENDERECO,
				TEC_COMPLEMENTO,
				TEC_BAIRRO,
				TEC_CIDADE,
				TEC_NUMERO,
				TEC_UF,
				TEC_TELFIXO,
				TEC_TELNOME,
				TEC_TELCEL,
				TEC_OBS,
				TEC_BCO,
				TEC_AG,
				TEC_CC,
				TEC_DV,
				TEC_DTCAD
			)	
			values 	
			(
				'".$_REQUEST['codigo_cliente']."',
				'".$_REQUEST['codigo_imovel']."',
				'".$_REQUEST['img_cliente']."',
				'".$_REQUEST['nome_cliente']."',
				'".$_REQUEST['nome_imovel']."',
				'".$_REQUEST['ref_imovel']."',
				'".$_REQUEST['tec_nivel']."',			
				'".$_REQUEST['tec_login']."',
				'".$_REQUEST['tec_email']."',
				'".$_REQUEST['tec_senha']."',
				'".$_REQUEST['tec_cpf']."',
				'".$_REQUEST['tec_cnpj']."',
				'".$_REQUEST['tec_cep']."',
				'".$_REQUEST['tec_endereco']."',
				'".$_REQUEST['tec_complemento']."',
				'".$_REQUEST['tec_bairro']."',
				'".$_REQUEST['tec_cidade']."',
				'".$_REQUEST['tec_numero']."',
				'".$_REQUEST['tec_uf']."',
				'".$_REQUEST['tec_telfixo']."',
				'".$_REQUEST['tec_telnome']."',
				'".$_REQUEST['tec_telcel']."',
				'".$_REQUEST['tec_obs']."',
				'".$_REQUEST['tec_bco']."',
				'".$_REQUEST['tec_ag']."',
				'".$_REQUEST['tec_cc']."',
				'".$_REQUEST['tec_dv']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Tecnico cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu tecnico!");
						return false;
				}
		}

		function totalDeTecnicos2Cadastrados(){$sql = "select COUNT(*) as TOTALTECNICOS from tbl_tecnicos2";$this->resultado = $this->con->banco->Execute($sql);$this->registros = $this->resultado->FetchNextObject();return $this->registros->TOTALTECNICOS;}
	}
?>