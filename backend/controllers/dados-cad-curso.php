<?php 
	require_once 'dbconexao.php';
	session_start();
	if(isset($_REQUEST['salvar'])){
		if($_FILES["banner"]["name"] != "" || $_FILES['curso']['name'] != ""){
			$allowed = array("jpg","jpeg","png");
			$ext = pathinfo($_FILES["banner"]["name"], PATHINFO_EXTENSION);
			$temp = $_FILES['banner']['tmp_name'];
			$new_url = "uploads/foto/".$_FILES['banner']['name'];
			if(in_array($ext, $allowed)){
				$titulo = mysqli_escape_string($conexao, $_REQUEST['titulo']);
				$estado = mysqli_escape_string($conexao, $_REQUEST['estado']);
				$nivel = mysqli_escape_string($conexao, $_REQUEST['nivel']);
				$descricao = mysqli_escape_string($conexao, $_REQUEST['descricao']);
				$autor = mysqli_escape_string($conexao, $_REQUEST['autor']);

				echo "<br>titulo: $titulo";
				echo "<br>estado: $estado";
				echo "<br>nivel: $nivel";
				echo "<br>descricao: $descricao";
				echo "<br>autor: $autor";
	 
				if()
			}else{
				echo "<p>este formato de imagem não é permitido!</p>";
				//header("Location: ../../pages-plataforma/professor/meus-cursos.php");
				return;
			}

		}
	}
 ?>