<?php
	class manutencaoAcervo{
		var $resultado;
		var $registros;

		function manutencaoAcervo(){
			$this->con = new conexao();
		}

		function listarAcervo(){
			$sql = "SELECT * FROM tbl_acervos WHERE IMO_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirAcervo(){
			$sql = "delete from tbl_acervos where IMG_CODIGO =".$_REQUEST['acervo_codigo'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Documento excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o documento!");
						return false;
				}
		}

		function gravarAcervo(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/acervo/".$arquivo)){

					$sql = "insert into tbl_acervos
					(
						ACERVO_DESCRICAO,
						IMG_DESCRICAO,
						IMO_CODIGO,
						CLI_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$_REQUEST['acervo_descricao']."',
					'".$arquivo."',
					'".$_REQUEST['imocod']."',
					'".$_REQUEST['clicod']."',
					'".$data_hora."'
					)";

					if($this->resultado = $this->con->banco->Execute($sql)){
						alerta("Documento cadastrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar o documento!");
							return false;
					}
				
				}
			}
		}
		
		function totalDeAcervoCadastrados(){
			$sql = "select COUNT(*) as TOTALIMAGENS from tbl_acervos";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALIMAGENS;
		}
	}
?>