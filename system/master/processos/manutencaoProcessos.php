<?php
	class manutencaoProcessos{
		var $resultado;
		var $registros;

		function manutencaoProcessos(){
			$this->con = new conexao();
		}

		function listarProcessos(){
			$sql = "select * FROM tbl_processos	ORDER BY PRO_SUB ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function listarProcessosSetup(){
			$retorna ='';
			$sql = "select * FROM tbl_proset ORDER BY PROSET_NOME ASC";
			$resultado = $this->con->banco->Execute($sql);
			while($regpro = $resultado->FetchNextObject())
			{
				$selecionado = '';
				if($this->registros->PROSET_CODIGO == $regpro->PROSET_CODIGO)
				{
					$selecionado = 'selected';
				}
			$retorna = $retorna.'<option value="'.$regpro->PROSET_NOME.'"'.$selecionado.'>'.$regpro->PROSET_NOME.'</option>';
			}
			return $retorna;
		}
		
		function listarProcessosSub(){
			$retorna ='';
			$sql = "select * FROM tbl_prosub ORDER BY PROSUB_NOME ASC";
			$resultado = $this->con->banco->Execute($sql);
			while($regprosub = $resultado->FetchNextObject())
			{
				$selecionado = '';
				if($this->registros->PROSUB_CODIGO == $regprosub->PROSUB_CODIGO)
				{
					$selecionado = 'selected';
				}
			$retorna = $retorna.'<option value="'.$regprosub->PROSUB_NOME.'"'.$selecionado.'>'.$regprosub->PROSUB_NOME.'</option>';
			}
			return $retorna;
		}

		function excluirProcessos(){
			$sql = "delete from tbl_processos where PRO_CODIGO =".$_REQUEST['codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Processo excluido  com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o processo!");
						return false;
				}
		}

		function formularioAlterarProcessos(){
			$sql = "select * from tbl_processos where PRO_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesProcessos(){
			$sql = "select * from tbl_processos where PRO_CODIGO =".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoProcessos(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_processos set 
			PRO_NOME = '".$_POST['pro_nome']."',
			PRO_SUB = '".$_POST['pro_sub']."',
			PRO_STATUS = '".$_POST['pro_status']."',
			PRO_DTALT = '".$data_hora."'

			where PRO_CODIGO = ".$_POST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Processo alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu processo!");
					return false;
			}
		}

		function gravarProcessos(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$status = 'Pendente';
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_processos
			(
				PRO_NOME,
				PRO_SUB,
				PRO_STATUS,
				PRO_DTCAD
			)	
			values 	
			(
			'".$_REQUEST['pro_sub']."',
			'".$_REQUEST['pro_nome']."',
			'".$status."',
			'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Processo cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar o processo!");
						return false;
				}
		}
		
		function totalDeProcessosCadastrados(){
			$sql = "select COUNT(*) as TOTALPROCESSOS from tbl_processos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALPROCESSOS;
		}
	}
?>