<?php
	class manutencaoClientes{
		var $resultado;
		var $registros;

		function manutencaoClientes(){
			$this->con = new conexao();
		}

		function listarClientes(){
			$sql = "select * FROM tbl_clientes
			WHERE CLI_NOME like '%".$filtrar_por."%'
			ORDER BY CLI_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function excluirClientes(){
			$sql = "delete from tbl_clientes where CLI_CODIGO =".$_REQUEST['clicod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cliente excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o cliente!");
						return false;
				}
		}

		function formularioAlterarClientes(){
			$sql = "select * from tbl_clientes where CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesClientes(){
			$sql = "select * from tbl_clientes where CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function listarOutrosImoveisdoMesmoCliente(){
			$sql = "select * from tbl_imoveis where CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}


		function gravarAlteracaoClientes(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_clientes set 
			CLI_NOME = '".$_POST['cli_nome']."',
			CLI_SENHA = '".$_POST['cli_senha']."',
			CLI_LOGIN = '".$_POST['cli_senha']."',
			CLI_RAZAOSOCIAL = '".$_POST['cli_razaosocial']."',
			CLI_CNPJ = '".$_POST['cli_cnpj']."',
			CLI_INSCRICAOESTADUAL = '".$_POST['cli_inscricaoestadual']."',
			CLI_CEP = '".$_POST['cli_cep']."',
			CLI_ENDERECO = '".$_POST['cli_endereco']."',
			CLI_BAIRRO = '".$_POST['cli_bairro']."',
			CLI_NUMERO = '".$_POST['cli_numero']."',
			CLI_COMPLEMENTO = '".$_POST['cli_complemento']."',
			CLI_CIDADE = '".$_POST['cli_cidade']."',
			CLI_UF = '".$_POST['cli_uf']."',
			CLI_TELNOME = '".$_POST['cli_telnome']."',
			CLI_TELFIXO = '".$_POST['cli_telfixo']."',
			CLI_TELCEL = '".$_POST['cli_telcel']."',
			CLI_OBS = '".$_POST['cli_obs']."',
			CLI_POST = '".$_SESSION['sessao_nome_usuario']."',
			CLI_DTALT = '".$data_hora."'

			where CLI_CODIGO = ".$_POST['clicod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Cliente alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu cliente!");
					return false;
			}
		}

		function gravarClientes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			$unidade = 'Matriz';
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['cli_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['cli_img']['tmp_name'],"images/clientes/".$arquivo)){

					$sql = "insert into tbl_clientes
					(
						CLI_IMG,
						CLI_UNIDADE,
						CLI_NOME,
						CLI_SENHA,
						CLI_LOGIN,
						CLI_RAZAOSOCIAL,
						CLI_CNPJ,
						CLI_INSCRICAOESTADUAL,
						CLI_CEP,
						CLI_ENDERECO,
						CLI_BAIRRO,
						CLI_NUMERO,
						CLI_COMPLEMENTO,
						CLI_CIDADE,
						CLI_UF,
						CLI_TELNOME,
						CLI_TELFIXO,
						CLI_TELCEL,
						CLI_OBS,
						CLI_POST,
						CLI_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$unidade."',
					'".$_REQUEST['cli_nome']."',
					'".$_REQUEST['cli_senha']."',
					'".$_REQUEST['cli_senha']."',
					'".$_REQUEST['cli_razaosocial']."',
					'".$_REQUEST['cli_cnpj']."',
					'".$_REQUEST['cli_inscricaoestadual']."',
					'".$_REQUEST['cli_cep']."',
					'".$_REQUEST['cli_endereco']."',
					'".$_REQUEST['cli_bairro']."',
					'".$_REQUEST['cli_numero']."',
					'".$_REQUEST['cli_complemento']."',
					'".$_REQUEST['cli_cidade']."',
					'".$_REQUEST['cli_uf']."',
					'".$_REQUEST['cli_telnome']."',
					'".$_REQUEST['cli_telfixo']."',
					'".$_REQUEST['cli_telcel']."',
					'".$_REQUEST['cli_obs']."',
					'".$_SESSION['sessao_nome_usuario']."',
					'".$data_hora."'
					)";

					if($this->resultado = $this->con->banco->Execute($sql)){
						alerta("Cliente cadastrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar seu cliente!");
							return false;
					}
				
				}
			}
		}

		function gravarTecnicos2(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_tecnicos2
			(
				IMG_CLIENTE,
				NOME_CLIENTE,
				TEC_LOGIN,
				TEC_SENHA,
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
				TEC_DTCAD
			)	
			values 	
			(
				'".$_REQUEST['cli_img']."',
				'".$_REQUEST['cli_nome']."',
				'".$_REQUEST['cli_senha']."',
				'".$_REQUEST['cli_senha']."',
				'".$_REQUEST['cli_cnpj']."',
				'".$_REQUEST['cli_cep']."',
				'".$_REQUEST['cli_endereco']."',
				'".$_REQUEST['cli_complemento']."',
				'".$_REQUEST['cli_bairro']."',
				'".$_REQUEST['cli_cidade']."',
				'".$_REQUEST['cli_numero']."',
				'".$_REQUEST['cli_uf']."',
				'".$_REQUEST['cli_telfixo']."',
				'".$_REQUEST['cli_telnome']."',
				'".$_REQUEST['cli_telcel']."',
				'".$_REQUEST['cli_obs']."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cliente cadastrado com sucesso! "+$_REQUEST['cli_img']);
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu cliente!");
						return false;
				}
		}
		
		
		function totalDeClientesCadastrados(){
			$sql = "select COUNT(*) as TOTALCLIENTES from tbl_clientes";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALCLIENTES;
		}
	}
?>