<?php

	class home_manutencao
	{
		var $resultado;
		var $registros;
		
		function home_manutencao()
		{
			$this->con = new conexao();
		}

		function listar_home()
		{
			$sql = "select * from tbl_home";
			$this->resultado = $this->con->banco->Execute($sql);

		}

		function total_registros()
		{
			$sql = "select count(*) as TOTAL from tbl_agenda";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTAL;
		}
		
		function relatorio_cadastros()
		{
			@$sql = "SELECT 
			AGENDA_OPERADORA AS OPERADORA, 
			AGENDA_TIPO AS TIPO,
			COUNT( AGENDA_OPERADORA ) AS QUANTIDADE 
			FROM tbl_agenda 
			GROUP BY AGENDA_OPERADORA, AGENDA_TIPO";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TIPO;
			return $this->registros->OPERADORA;
			return $this->registros->QUANTIDADE;
		}
	}
	
?>