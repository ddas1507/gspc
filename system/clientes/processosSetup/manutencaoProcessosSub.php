<?php
	class manutencaoProcessosSub{
		var $resultado;
		var $registros;

		function manutencaoProcessosSub(){
			$this->con = new conexao();
		}

		function listarProcessosSub(){
			$sql = "select * FROM tbl_prosub
			WHERE PROSUB_NOME like '%".$filtrar_por."%'
			ORDER BY PROSUB_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirProcessosSub(){
			$sql = "delete from tbl_prosub where PROSUB_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Tarefa excluida com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir a tarefa!");
						return false;
				}
		}

		function formularioAlterarProcessosSub(){
			$sql = "select * from tbl_prosub where PROSUB_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesProcessosSub(){
			$sql = "select * from tbl_prosub where PROSUB_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoProcessosSub(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));
		$data_hora = "$dt - $hr";

			$sql = "update tbl_prosub set 
			PROSUB_NOME = '".$_POST['prosub_nome']."',
			PROSUB_DTALT = '".$data_hora."'

			where PROSUB_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Tarefa alterada com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a tarefa!");
					return false;
			}
		}

		function gravarProcessosSub(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_prosub
			(
				PROSUB_NOME,
				PROSUB_DTCAD
			)	
			values 
			(
			'".$_REQUEST['prosub_nome']."',
			'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Tarefa cadastrada com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a tarefa!");
						return false;
				}
		}
		
		function totalDeProcessosCadastradosSub(){
			$sql = "select COUNT(*) as TOTALPROCESSOSSUB from tbl_prosub";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALPROCESSOSSUB;
		}
	}
?>