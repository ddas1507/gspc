<div id='cssmenu'>
	<ul>
	   <li class='active'><a href='index.php'><span>Home</span></a></li>
	   <li class='has-sub'><a href='#'><span>Clientes</span></a>
		  <ul>
			 <li><a href='index.php?tabela=formularioCadastrarClientes&acao=formularioCadastrarClientes'><span>Cadastrar</span></a></li>
			 <li class='last'><a href='index.php?tabela=listarClientes&acao=listarClientes'><span>Consultar</span></a></li>
		  </ul>
	   </li>
		<?php
		$nivel = $_SESSION['sessao_nivel_usuario'];
		if($nivel == 1){?>
		   <li class='has-sub'><a href='#'><span>Unidades</span></a>
			  <ul>
				 <li><a href='index.php?tabela=formularioCadastrarImoveis&acao=formularioCadastrarImoveis'><span>Cadastrar</span></a></li>
			  </ul>
		   </li>
		<?
		}
		else{
		
		}
		?>
		<?php
		$nivel = $_SESSION['sessao_nivel_usuario'];
		if($nivel == 1){?>		
		   <li class='has-sub'><a href='#'><span>Processos</span></a>
			  <ul>
				 <li><a href='#'><span>Cadastrar</span></a>
					<ul>
						<li><a href='index.php?tabela=formularioCadastrarProcessosSetup&acao=formularioCadastrarProcessosSetup'><span>Processos</span></a></li>
						<li><a href='index.php?tabela=formularioCadastrarProcessosSub&acao=formularioCadastrarProcessosSub'><span>Tarefas</span></a></li>
						<!--li><a href='index.php?tabela=formularioCadastrarProcessos&acao=formularioCadastrarProcessos'><span>Processo Completo</span></a></li-->
					</ul>
				 </li>
				 <li><a href='#'><span>Consultar</span></a>
					<ul>
						<li><a href='index.php?tabela=listarProcessosSetup&acao=listarProcessosSetup'><span>Processos</span></a></li>
						<li><a href='index.php?tabela=listarProcessosSub&acao=listarProcessosSub'><span>Tarefas</span></a></li>
						<!--li><a href='index.php?tabela=listarProcessos&acao=listarProcessos'><span>Processo Completo</span></a></li-->
					</ul>
				 </li>
			  </ul>
		   </li>
			<?
			}
			else{
			
			}
			?>
			<?php
			$nivel = $_SESSION['sessao_nivel_usuario'];
			if($nivel == 1){?>
		   <li class='has-sub'><a href='#'><span>Servi&ccedil;os</span></a>
			  <ul>
				 <li><a href='index.php?tabela=form-list-clientes-tarefas&acao=form-list-clientes-tarefas'><span>Cadastrar</span></a></li>
				 <li class='last'><a href='index.php?tabela=listarTarefas&acao=listarTarefas'><span>Consultar</span></a></li>
			  </ul>
		   </li>
			<?
			}
			else{
			
			}
			?>
		   <li class='has-sub last'><a href='#'><span>T&eacute;cnicos</span></a>
			  <ul>
			<?php
			$nivel = $_SESSION['sessao_nivel_usuario'];
			if($nivel == 1){?>
			  <li><a href='index.php?tabela=formularioCadastrarTecnicos&acao=formularioCadastrarTecnicos'><span>Cadastrar</span></a></li>
			<?
			}
			else{
			
			}
			?>
			 <li class='last'><a href='index.php?tabela=listarTecnicos&acao=listarTecnicos'><span>Consultar</span></a></li>
		  </ul>
	   </li>
	</ul>
</div>