<?php
	class manutencaoTarefas{
		var $resultado;
		var $registros;
		var $numeroRegistros;
		var $TarefasStatus;
		

		function manutencaoTarefas(){
			$this->con = new conexao();
		}

		function listarTarefas(){
			$sql = "select * FROM tbl_tarefasProcessos";
			$sql2 = mysql_query("select COUNT(*) as PERCENTUALTAREFASCONCLUIDAS from tbl_tarefas where TAR_STATUS2 = 1");
			$this->resultado = $this->con->banco->Execute($sql);
			$this->numeroRegistros = mysql_num_rows($sql2);			
		}
		
		function listarTarefasConsultaProcessos(){$sql = "select * FROM tbl_tarefasProcessos";$this->resultado = $this->con->banco->Execute($sql);}
		function listarClientes(){$sql = "select * FROM tbl_clientes ORDER BY CLI_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarImoveis(){$sql = "select * FROM tbl_imoveis WHERE CLI_CODIGO = ".$_REQUEST['clicod']." ORDER BY IMO_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarProcessos(){$sql = "select * FROM tbl_proset ORDER BY PROSET_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarServicos(){
			$sql = "select * FROM tbl_processos 
			WHERE PRO_ID = ".$_REQUEST['codigo_processo']." 
			ORDER BY PRO_NOME DESC";
			$sql2 = mysql_query("select * FROM tbl_processos 
			WHERE PRO_ID = ".$_REQUEST['codigo_processo']." 
			ORDER BY PRO_NOME DESC");
			$this->resultado = $this->con->banco->Execute($sql);
			$this->numeroRegistros = mysql_num_rows($sql2);
		}
		function listarTecnicos(){$sql = "select * FROM tbl_tecnicos ORDER BY TEC_NOME ASC";$this->resultado = $this->con->banco->Execute($sql);}
		function listarTarefasProcessos(){$sql = "select * FROM tbl_tarefasProcessos WHERE TAR_IMOVEL_CODIGO =".$_REQUEST['imocod'];$this->resultado = $this->con->banco->Execute($sql);}
		function excluirTarefas(){
			$sql = "delete from tbl_tarefas where TAR_PROCESSO_CODIGO =".$_REQUEST['nprocesso'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Tarefas e Processos excluidos com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar excluir a tarefa!");
					return false;
			}
		}
		function excluirProcessosAnexados(){
			$sql = "delete from tbl_tarefasProcessos where TAR_CODIGO  =".$_REQUEST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Processos excluidos com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar excluir a tarefa!");
					return false;
			}
		}
		function detalhesTarefas(){
			$sql = "select * from tbl_tarefas where CLI_NOME =".$_REQUEST['cliente'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		function detalhesImoveis(){
			$sql = "select * from tbl_imoveis where IMO_CODIGO =".$_REQUEST['imocod']." AND CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		function gravarTarefas(){
			
			foreach($_SESSION['quadroTarefas'] as $tipoServico=>$valores){	
			
				$dt = date('d/m/Y');
				$hr = gmDate('H:i:s', strtotime("-3 hours"));
				$data_hora = "$dt - $hr";
				$status = "Em andamento";
				$status2 = 0;
				
				$sql = "insert into tbl_tarefas
				(
					TAR_CLIENTE_NOME,
					TAR_CLIENTE_CODIGO,
					TAR_IMOVEL_NOME,
					TAR_IMOVEL_CODIGO,
					TAR_PROCESSO_NOME,
					TAR_PROCESSO_CODIGO,
					TAR_SERVICO_NOME,
					TAR_SERVICO_CODIGO,
					TAR_TECNICO_NOME,
					TAR_TECNICO_CODIGO,
					TAR_HONORARIOS_VALOR,
					VALORDATAREFA,
					DATATAREFADIA,
					DATATAREFAMES,
					DATATAREFAANO,
					PERCENTTAREFA,
					TAR_STATUS,
					TAR_STATUS2,
					TAR_POST,
					TAR_DTCAD
				)	
				values 
				(
				'".$_REQUEST['tar_cliente_nome']."',
				".$_REQUEST['clicod'].",
				'".$_REQUEST['tar_imovel_nome']."',
				".$_REQUEST['imocod'].",
				'".$_REQUEST['tar_processo_nome']."',
				".$_REQUEST['tar_processo_codigo'].",
				'".$tipoServico."',
				".$valores['codigoServico'].",
				'".$_REQUEST['tar_tecnico_nome']."',
				".$_REQUEST['tar_tecnico_codigo'].",
				'".$_REQUEST['tar_honorarios_valor']."',
				'".$valores['valordaTarefa']."',
				'".$valores['dataTarefaDia']."',
				'".$valores['dataTarefaMes']."',
				'".$valores['dataTarefaAno']."',
				'".$valores['percentTarefa']."',
				'".$status."',
				".$status2.",
				'".$_SESSION['sessao_nome_usuario']."',
				'".$data_hora."'
				)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Tarefa cadastrada com sucesso!");
						//return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar a tarefa!");
						return false;
				}
			}
			unset($_SESSION['quadroTarefas']);
		}
		function gravarTarefasComProcessos(){
		
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			$dia = date('d');	
			$mes = date('m');
			$ano = date('Y');
			$status = "Em andamento";
			$status2 = 1;
			
			$sql = "insert into tbl_tarefasProcessos
			(
				TAR_CLIENTE_NOME,
				TAR_CLIENTE_CODIGO,
				TAR_IMOVEL_NOME,
				TAR_IMOVEL_CODIGO,
				TAR_PROCESSO_NOME,
				TAR_PROCESSO_CODIGO,
				TAR_TECNICO_NOME,
				TAR_TECNICO_CODIGO,
				TAR_HONORARIOS_VALOR,
				DATATAREFADIA,
				DATATAREFAMES,
				DATATAREFAANO,
				TAR_STATUS,
				TAR_STATUS2,
				TAR_POST,
				TAR_DTCAD
			)	
			values 
			(
			'".$_REQUEST['tar_cliente_nome']."',
			".$_REQUEST['clicod'].",
			'".$_REQUEST['tar_imovel_nome']."',
			".$_REQUEST['imocod'].",
			'".$_REQUEST['tar_processo_nome']."',
			".$_REQUEST['tar_processo_codigo'].",
			'".$_REQUEST['tar_tecnico_nome']."',
			".$_REQUEST['tar_tecnico_codigo'].",
			'".$_REQUEST['tar_honorarios_valor']."',			
			'".$dia."',
			'".$mes."',
			'".$ano."',
			'".$status."',
			".$status2.",
			'".$_SESSION['sessao_nome_usuario']."',
			'".$data_hora."'
			)";

			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Tarefa cadastrada com sucesso!");
					//return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar cadastrar a tarefa!");
					return false;
			}
		}
		function statusAlterarConfirmar(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";
		$status = "Concluido";
		$status2 = 1;

			$sql = "update tbl_tarefas set 
			TAR_STATUS = '".$status."',
			TAR_STATUS2 = ".$status2.",
			TAR_DTALT = '".$data_hora."'

			where TAR_CODIGO = ".$_REQUEST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Tarefa concluida com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar concluir a sua tarefa!");
					return false;
			}
		}	
		function statusAlterarDesfazer(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";
		$status = "Pendente";
		$status2 = 1;

			$sql = "update tbl_tarefas set 
			TAR_STATUS = '".$status."',
			TAR_STATUS2 = '".$status2."',
			TAR_DTALT = '".$data_hora."'

			where TAR_CODIGO = ".$_REQUEST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Tarefa restaurada com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar restaurar a sua tarefa!");
					return false;
			}
		}

		function TarefasStatus(){
			$sql = "select COUNT(*) as PERCENTUALTAREFASCONCLUIDAS from tbl_tarefas where TAR_STATUS2 = 1";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->PERCENTUALTAREFASCONCLUIDAS;
		}
		
		function TarefasCompletas(){
			$sql = "select COUNT(*) as PERCENTUALTAREFASCONCLUIDAS from tbl_tarefas";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->PERCENTUALTAREFASCONCLUIDAS;
		}
		
		function valorTarefas(){/*PERCENTTAREFA*/
			$sql = "select PERCENTTAREFA FROM tbl_tarefas 
			WHERE TAR_IMOVEL_CODIGO =".$_REQUEST['imocod']." 
			AND TAR_PROCESSO_CODIGO =".$_REQUEST['nprocesso']."
			AND TAR_STATUS2 = 1";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->VALORTAREFAS;
		}
	}
?>