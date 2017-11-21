<?php
	class manutencaoServicos{
		var $resultado;
		var $registros;

		function manutencaoServicos(){
			$this->con = new conexao();
		}

		function listarServicos(){
			$sql = "select * FROM tbl_servicos";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirServicos(){
			$sql = "delete from tbl_servicos where SER_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Servicos excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o servico!");
						return false;
				}
		}

		function formularioAlterarServicos(){
			$sql = "select * from tbl_servicos where SER_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesServicos(){
			$sql = "select * from tbl_servicos where SER_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoServicos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));
		$data_hora = "$dt - $hr";

			$sql = "update tbl_servicos set 
			SER_ID = '".$_POST['ser_id']."',
			SER_NOME = '".$_POST['ser_nome']."',
			SER_DTALT = '".$data_hora."'

			where SER_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Servicos alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu servicos!");
					return false;
			}
		}

		function IniciarServico(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_servicos ( SER_DTCAD ) values ('".$data_hora."')";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Servico cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu servico!");
						return false;
				}
		}
		
		function totalDeServicosCadastrados(){
			$sql = "select COUNT(*) as TOTALSERVICOS from tbl_servicos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALSERVICOS;
		}
	}
?>