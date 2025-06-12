<?php 
	require_once 'dbconexao.php';
	session_start();
	echo var_dump($_POST);
	echo "estou aqui";
		if($_FILES['foto']['name'] != ""){
			//$_FILES['foto']['name'];
			$_SESSION['foto'] = true;
			$allowed = array("jpg","jpeg","png");
			$ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
			$temp = $_FILES['foto']['tmp_name'];
			$new_url = "uploads/foto/".$_FILES['foto']['name'];
			if(in_array($ext, $allowed)){
				$nome = mysqli_escape_string($conexao, $_POST['nome']);
				$email = mysqli_escape_string($conexao, $_POST['emailUser']);
				$senha = mysqli_escape_string($conexao, $_POST['senhaUser']);
				$dia = mysqli_real_escape_string($conexao, $_POST['dia']);
				$mes = mysqli_real_escape_string($conexao, $_POST['mes']);
				$ano = mysqli_real_escape_string($conexao, $_POST['ano']);
				$nomeUser = mysqli_real_escape_string($conexao, $_POST['nomeUser']);
				$genero = mysqli_real_escape_string($conexao, $_POST['genero']);
				$tipo = mysqli_real_escape_string($conexao, $_POST['tipoConta']);
				$morada = mysqli_real_escape_string($conexao, $_POST['morada']);
				$escolaridade = mysqli_real_escape_string($conexao, $_POST['escolaridade']);
				$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
				$desc = mysqli_real_escape_string($conexao, $_POST['desc']);
				$rota_foto = "backend/".$new_url;

				if ($genero == "M" || $genero == "Outro"){
					$tipo = str_replace("(a)","",$tipo);
				}else{
					$tipo = str_replace("(a)", "a", $tipo);
				}
				$data = "$dia-$mes-$ano";
				echo "<br>Nome: ".$nome;
				echo "<br>Email: ".$email;
				echo "<br>Senha: ".$senha;
				echo "<br>$dia-$mes-$ano";
				echo "<br>Genero: $genero";
				echo "<br>Tipo de conta: $tipo";
				echo "<br>Morada: $morada";
				echo "<br>Escolaridade: $escolaridade";
				echo "<br>Telefone: $telefone";
				echo "<br>descervacao: $desc";
				echo "<br>minha rota: ".$rota_foto;
				echo "<br>minha rota: ".$temp;
				$sql = "SELECT email FROM usuarios WHERE email='$email'";
				$rs = mysqli_query($conexao, $sql);
				if(mysqli_num_rows($rs) > 0){
					$_SESSION['erro'] = "O email já existe, Crie um outro";
					header("Location: ../../pages/formulario.php");
					return;
				}else{
					$_SESSION['erro'] = null;
					$sqlc = "INSERT INTO usuarios(foto_perfil,nome,genero,morada,telefone,dataNasc,escolaridade,tipo,nomeUser,email,senha,descricao) values('$rota_foto','$nome','$genero','$morada','$telefone','$data','$escolaridade','$tipo','$nomeUser','$email','$senha','$desc')";
					$rs = mysqli_query($conexao, $sqlc);
						/*echo "<h1>Usuario Cadastrado com sucesso!</h1>";
						move_uploaded_file($temp, "../".$new_url);
						echo "upload feito com sucesso";*/
						header("Location: ../../pages/formulario.php");
						return;				
			}
			return;
		}else{
			$_SESSION['erro'] = "formato da imagem não é permitida";
			header("Location: ../../pages/formulario.php");
			return;
		}
	}else{
		$_SESSION['erro'] = "insira uma foto de perfil";
		header("Location: ../../pages/formulario.php");
	}
 ?>