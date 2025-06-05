<?php 
	require_once 'dbconexao.php';
	session_start();

		$email = mysqli_escape_string($conexao, $_REQUEST['emailLogin']);
		$senha = mysqli_escape_string($conexao, $_REQUEST['senhaLogin']);
			$sql = "SELECT * FROM usuarios where email='$email' AND senha='$senha'";
			$rs = mysqli_query($conexao, $sql);
			var_dump(mysqli_num_rows($rs));
			if(mysqli_num_rows($rs) > 0){
				echo "tudo certo";
				$dados = mysqli_fetch_array($rs);
				// mysqli_close($conexao);
				
				$_SESSION['logado'] = true;
				$_SESSION['id'] = $dados['iduser'];
	//			$_SESSION['nome'] = $dados['nome'];
				$nome = $dados['nome'];
				if($dados['tipo'] == "Estudante"){
					echo "Bem vindo, Estudante $nome";
					header("Location: ../../pages-plataforma/professor/home.php");
					return;
				}
				if($dados['tipo'] == "Professor" || $dados['tipo'] == "Professora"){
					echo "Bem vindo, Professor $nome";
					header("Location: ../../pages-plataforma/professor/home.php");
				}
				if($dados['tipo'] == "Administrador" || $dados['tipo'] == "Administrador"){
					header("Location: ../../pages-plataforma/professor/home.php");
					return;
				}
			}else{
				echo "Usuario inexistente";
			}
 ?>