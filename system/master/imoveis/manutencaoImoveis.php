<?php
	class manutencaoImoveis{
		var $resultado;
		var $registros;

		function manutencaoImoveis(){
			$this->con = new conexao();
		}

		function listarImoveis(){
			$sql = "select * FROM tbl_imoveis WHERE CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function listarAcervo(){
			$sql = "SELECT * FROM tbl_acervos WHERE IMO_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarOutrosImoveisdoMesmoCliente(){
			$sql = "select * FROM tbl_imoveis WHERE CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function listarClientes(){
			$sql = "select * FROM tbl_clientes ORDER BY CLI_NOME ASC";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		function listarImagens(){
			$sql = "SELECT * FROM tbl_imagens WHERE IMO_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		//
		function listarProcessos(){
			$sql = "select * FROM tbl_tarefas 
			WHERE TAR_IMOVEL_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function listarTarefasServicos(){
			$sql = "select * FROM tbl_tarefas 
			WHERE TAR_IMOVEL_CODIGO =".$_REQUEST['imocod']." 
			AND TAR_PROCESSO_CODIGO =".$_REQUEST['nprocesso'];
			$this->resultado = $this->con->banco->Execute($sql);
		}		
		
		function listarTarefasProcessos(){
			$sql = "select * FROM tbl_tarefasProcessos  
			WHERE TAR_IMOVEL_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function excluirImoveis(){
			$sql = "delete from tbl_imoveis where IMO_CODIGO =".$_REQUEST['imocod'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Imovel excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o imovel!");
						return false;
				}
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
		

		function formularioAlterarImoveis(){
			$sql = "select * from tbl_imoveis where IMO_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function formularioAlterarFotoImoveis(){
			$sql = "select * from tbl_imoveis where IMO_CODIGO =".$_REQUEST['imocod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesImoveis(){
			$sql = "select * from tbl_imoveis where IMO_CODIGO =".$_REQUEST['imocod']." AND CLI_CODIGO =".$_REQUEST['clicod'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function gravarAlteracaoImoveis(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";

			$sql = "update tbl_imoveis set 
			IMO_REF = '".$_POST['imo_ref']."',
			IMO_RFBITR = '".$_POST['imo_rfbitr']."',
			IMO_INCRACCIR = '".$_POST['imo_incraccir']."',
			IMO_CNPJFILIAL = '".$_POST['imo_cnpjfilial']."',
			IMO_PROPIMOVEL = '".$_POST['imo_propimovel']."',
			IMO_LOCACAO = '".$_POST['imo_locacao']."',
			IMO_NOME = '".$_POST['imo_nome']."',
			IMO_CEP = '".$_POST['imo_cep']."',
			IMO_ENDERECO = '".$_POST['imo_endereco']."',
			IMO_BAIRRO = '".$_POST['imo_bairro']."',
			IMO_NUMERO = '".$_POST['imo_numero']."',
			IMO_COMPLEMENTO = '".$_POST['imo_complemento']."',
			IMO_CIDADE = '".$_POST['imo_cidade']."',
			IMO_UF = '".$_POST['imo_uf']."',
			IMO_TELNOME = '".$_POST['imo_telnome']."',
			IMO_TEL = '".$_POST['imo_tel']."',
			IMO_FAX = '".$_POST['imo_fax']."',
			IMO_EMAIL = '".$_POST['imo_email']."',
			IMO_OBS = '".$_POST['imo_obs']."',
			IMO_TERRENO_IPTU = '".$_POST['imo_terreno_iptu']."',
			IMO_TERRENO_REGISTRO_IMOVEIS = '".$_POST['imo_terreno_registro_imoveis']."',
			IMO_TERRENO_TOPOGRAFIA = '".$_POST['imo_terreno_topografia']."',
			IMO_TERRENO_CONTIBUINTES = '".$_POST['imo_terreno_contibuintes']."',
			IMO_TERRENO_USO = '".$_POST['imo_terreno_uso']."',
			IMO_AREA_CONSTRUIDA_PROJETO_APROVADO = '".$_POST['imo_area_construida_projeto_aprovado']."',
			IMO_AREA_CONSTRUIDA_AVERBADA = '".$_POST['imo_area_construida_averbada']."',
			IMO_AREA_CONSTRUIDA_IPTU = '".$_POST['imo_area_construida_iptu']."',
			IMO_AREA_CONSTRUIDA_MATRICULA = '".$_POST['imo_area_construida_matricula']."',
			IMO_AREA_CONSTRUIDA_TOMB_HISTORICO = '".$_POST['imo_area_construida_tomb_historico']."',
			IMO_AREA_CONSTRUIDA_TOMB_HISTORICO = '".$_POST['imo_area_construida_tomb_historico']."',
			
			IMO_DTALT = '".$data_hora."'

			where IMO_CODIGO = ".$_POST['imocod'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Imovel alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar o seu Imovel!");
					return false;
			}
		}
		
		function gravarAlteracaoFotoImoveis(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['imo_img']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['imo_img']['tmp_name'],"images/imoveis/".$arquivo)){

				$sql = "update tbl_imoveis set 
						IMO_IMG = '".$arquivo."',
						IMO_DTALT = '".$data_hora."'		
						
						where IMO_CODIGO = ".$_POST['imocod'];
						if($this->resultado = $this->con->banco->Execute($sql)){
							alerta("Foto do imovel cadastrada com sucesso!");
								return true;
						}
						else{
							alerta("Ocorreu um erro ao tentar cadastrar a foto do Imovel!");
								return false;
						}
			
				}
			}
		}		

		function gravarDadosImoveis(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";

			$sql = "insert into tbl_imoveis
				(
					CLI_NOME,
					CLI_CODIGO,
					IMO_REF,
					IMO_RFBITR,
					IMO_INCRACCIR,
					IMO_CNPJFILIAL,
					IMO_PROPIMOVEL,
					IMO_LOCACAO,
					IMO_NOME,
					IMO_CEP,
					IMO_ENDERECO,
					IMO_BAIRRO,
					IMO_NUMERO,
					IMO_COMPLEMENTO,
					IMO_CIDADE,
					IMO_UF,
					IMO_TELNOME,
					IMO_TEL,
					IMO_OBS,
					IMO_FAX,
					IMO_EMAIL,
					IMO_TERRENO_IPTU,
					IMO_TERRENO_REGISTRO_IMOVEIS,
					IMO_TERRENO_TOPOGRAFIA,
					IMO_TERRENO_CONTIBUINTES,
					IMO_TERRENO_USO,
					IMO_AREA_CONSTRUIDA_PROJETO_APROVADO,
					IMO_AREA_CONSTRUIDA_AVERBADA,
					IMO_AREA_CONSTRUIDA_IPTU,
					IMO_AREA_CONSTRUIDA_MATRICULA,
					IMO_AREA_CONSTRUIDA_TOMB_HISTORICO,
					
					IMO_DTCAD
				)	
				values 	
				(
				'".$_REQUEST['cli_nome']."',
				'".$_REQUEST['clicod']."',
				'".$_REQUEST['imo_ref']."',
				'".$_REQUEST['imo_rfbitr']."',
				'".$_REQUEST['imo_incraccir']."',
				'".$_REQUEST['imo_cnpjfilial']."',
				'".$_REQUEST['imo_propimovel']."',				
				'".$_REQUEST['imo_locacao']."',				
				'".$_REQUEST['imo_nome']."',
				'".$_REQUEST['imo_cep']."',
				'".$_REQUEST['imo_endereco']."',
				'".$_REQUEST['imo_bairro']."',
				'".$_REQUEST['imo_numero']."',
				'".$_REQUEST['imo_complemento']."',
				'".$_REQUEST['imo_cidade']."',
				'".$_REQUEST['imo_uf']."',
				'".$_REQUEST['imo_telnome']."',
				'".$_REQUEST['imo_tel']."',
				'".$_REQUEST['imo_obs']."',
				'".$_REQUEST['imo_fax']."',
				'".$_REQUEST['imo_email']."',
				'".$_REQUEST['imo_terreno_iptu']."',
				'".$_REQUEST['imo_terreno_registro_imoveis']."',
				'".$_REQUEST['imo_terreno_topografia']."',
				'".$_REQUEST['imo_terreno_contibuintes']."',
				'".$_REQUEST['imo_terreno_uso']."',
				'".$_REQUEST['imo_area_construida_projeto_aprovado']."',
				'".$_REQUEST['imo_area_construida_averbada']."',
				'".$_REQUEST['imo_area_construida_iptu']."',
				'".$_REQUEST['imo_area_construida_matricula']."',
				'".$_REQUEST['imo_area_construida_tomb_historico']."',
				'".$data_hora."'
				)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Dados imovel cadastrados com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar os dados do Imovel!");
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

			where TAR_CODIGO = ".$_REQUEST['tarcodigo'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				alerta("Tarefa concluida com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar concluir a sua tarefa!");
					return false;
			}
		}	

		function totalDeImoveisCadastrados(){
			$sql = "select COUNT(*) as TOTALIMOVEIS from tbl_imoveis";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALIMOVEIS;
		}
		
		function totalDeTarefasConcluidas(){
			$sql = "select SUM(TAR_STATUS2) as TOTALTAREFASCONCLUIDAS from tbl_tarefas";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
			return $this->registros->TOTALTAREFASCONCLUIDAS;
		}		
		
		function gravarImagens(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/imagens/".$arquivo)){

					$sql = "insert into tbl_imagens
					(
						IMG_DESCRICAO,
						IMO_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$arquivo."',
					'".$_REQUEST['imocod']."',
					'".$data_hora."'
					)";

					if($this->resultado = $this->con->banco->Execute($sql)){
						alerta("Imagem cadastrado com sucesso!");
							return true;
					}
					else{
						alerta("Ocorreu um erro ao tentar cadastrar a imagem!");
							return false;
					}
				
				}
			}
		}

		function gravarAcervo(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			//$data_hora = "$dt - $hr";
			$data_hora = "$dt";
			
			$extencao = array(".jpg",".JPG",".png",".PNG",".gif",".GIF",".PDF",".pdf",);
			$arquivo = $_FILES['img_descricao']['name'];
			$tipo = strrchr($arquivo,".");
			if(in_array($tipo,$extencao)){
				if(move_uploaded_file($_FILES['img_descricao']['tmp_name'],"images/acervo/".$arquivo)){

					$sql = "insert into tbl_acervos
					(
						ACERVO_DESCRICAO,
						ACERVO_NUMERO,
						ACERVO_DTVENCIMENTO,
						IMG_DESCRICAO,
						IMO_CODIGO,
						CLI_CODIGO,
						IMG_DTCAD
					)	
					values 	
					(
					'".$_REQUEST['acervo_descricao']."',
					'".$_REQUEST['acervo_numero']."',
					'".$_REQUEST['acervo_dtvencimento']."',
					'".$arquivo."',
					".$_REQUEST['imocod'].",
					".$_REQUEST['clicod'].",
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
	}
?>