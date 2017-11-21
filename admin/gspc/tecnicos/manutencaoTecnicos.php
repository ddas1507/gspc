<?php
	class manutencaoTecnicos{
		var $resultado;
		var $registros;

		function manutencaoTecnicos(){
			$this->con = new conexao();
		}

		function listarTecnicos(){
			$sql = "select * FROM tbl_tecnicos
			WHERE TEC_NOME like '%".$filtrar_por."%'
			ORDER BY TEC_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirTecnicos(){
			$sql = "delete from tbl_tecnicos where TEC_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Tecnico excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o tecnico!");
						return false;
				}
		}

		function formularioAlterarTecnicos(){
			$sql = "select * from tbl_tecnicos where TEC_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesTecnicos(){
			$sql = "select * from tbl_tecnicos where TEC_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoTecnicos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_tecnicos set 
			TEC_NIVEL = '".$_POST['tec_nivel']."',
			TEC_NOME = '".$_POST['tec_nome']."',
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

		function gravarTecnicos(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_tecnicos
			(
				TEC_NIVEL,
				TEC_NOME,
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
				'".$_REQUEST['tec_nivel']."',
				'".$_REQUEST['tec_nome']."',
				'".$_REQUEST['tec_login']."',
				'".$_REQUEST['tec_email']."',
				'".base64_encode($_REQUEST['tec_senha'])."',
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
		
		function totalDeTecnicosCadastrados(){
			$sql = "select COUNT(*) as TOTALTECNICOS from tbl_tecnicos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALTECNICOS;
		}
	}
?>