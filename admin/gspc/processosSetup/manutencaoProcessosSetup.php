<?php
	class manutencaoProcessosSetup{
		var $resultado;
		var $registros;

		function manutencaoProcessosSetup(){
			$this->con = new conexao();
		}

		function listarProcessosSetup(){
			$sql = "select * FROM tbl_proset
			WHERE PROSET_NOME like '%".$filtrar_por."%'
			ORDER BY PROSET_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirProcessosSetup(){
			$sql = "delete from tbl_proset where PROSET_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Processo excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o processo!");
						return false;
				}
		}

		function formularioAlterarProcessosSetup(){
			$sql = "select * from tbl_proset where PROSET_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesProcessosSetup(){
			$sql = "select * from tbl_proset where PROSET_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoProcessosSetup(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_proset set 
			PROSET_NOME = '".$_POST['proset_nome']."',
			PROSET_DTALT = '".$data_hora."'

			where PROSET_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Processo alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu processo!");
					return false;
			}
		}

		function gravarProcessosSetup(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_proset
			(
				PROSET_NOME,
				PROSET_DTCAD
			)	
			values 
			(
			'".$_REQUEST['proset_nome']."',
			'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Processo cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu processo!");
						return false;
				}
		}
		
		function totalDeProcessosCadastradosSetup(){
			$sql = "select COUNT(*) as TOTALPROCESSOSSETUP from tbl_proset";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALPROCESSOSSETUP;
		}
	}
?>