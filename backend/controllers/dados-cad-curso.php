<?php 
	require_once 'dbconexao.php';
	session_start();
	if(isset($_POST['salvar'])) {
			if(!empty($_FILES['videos']['tmp_name'][0] && $_FILES['banner']['name'])){
				$extImg = pathinfo($_FILES['banner']['name'],PATHINFO_EXTENSION);
				$url_imagem = "../uploads/banners/".basename($_FILES['banner']['name']);
				$tempImg = $_FILES['banner']['tmp_name'];
				$permitidoImg = array("jpg","jpeg","png");
				
				if(in_array($extImg, $permitidoImg)){
					$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
					$estado = mysqli_real_escape_string($conexao, $_POST['estado']);
					$acesso = mysqli_real_escape_string($conexao, $_POST['acesso']);
					$tipo = mysqli_real_escape_string($conexao, $_POST['tipo']);
					$preco = ($_POST['tipo'] == "gratis")? 0.00:$_POST['preco'];
					$desc = mysqli_real_escape_string($conexao, $_POST['desc']);
					/*$autor = ($_POST['autor'] == "eu")? $_SESSION['id']:$_POST['autores'];*/
					$autor = $_SESSION['id'];

					if(move_uploaded_file($tempImg, $url_imagem)){
						$check = mysqli_query($conexao, "SELECT idcurso FROM cursos WHERE titulo = '$titulo'");
						
						if (mysqli_num_rows($check) > 0) {
							echo "Já existe um curso com esse título!";
							exit;
						}
						
						$rsc = mysqli_query($conexao, "INSERT INTO cursos (idcurso,url_banner,titulo,descricao,autor,estado,nivel_acesso,tipo,preco,dataPublicacao,classificacao) values (default, '$url_imagem','$titulo','$desc','$autor','$estado','$acesso','$tipo','$preco',default,1");
						if(!$rsc){
							die ("erro sql: ". mysqli_error($conexao));
						}
						if(mysqli_num_rows($rsc) > 0){
							echo "<br>titulo: $titulo";
							echo "<br>estado: $estado";
							echo "<br>nivel: $acesso";
							echo "<br>url: $url_imagem";
							echo "<br>tipo: $tipo";
							echo "<br>estapreco: $preco";
							echo "<br><br>salvo com sucesso";
						}
					}
				}		
				/*foreach($_FILES['videos']['tmp_name'] as $i => $tmpName){
					$extVid = pathinfo($_FILES["videos"]["name"][$i], PATHINFO_EXTENSION);
					$tempVid = $_FILES['videos']['tmp_name'][$i];
					$permitidoVid = array("mp4","ogg","wav");
					
					if(in_array($extVid, $permitidoVid) && in_array($extImg,$permitidoImg)){
						$titulo = mysqli_escape_string($conexao, $_POST['titulo']);
						$estado = mysqli_escape_string($conexao, $_POST['estado']);
						$nivel = mysqli_escape_string($conexao, $_POST['nivel']);
						$desc = mysqli_escape_string($conexao, $_POST['desc']);
						$autor = ($_POST['autor'] == "eu")? $_SESSION['id']:$_POST['autores'];

						if(move_uploaded_file($tempImg, $url_imagem)){
							$slqc = "INSERT INTO cursos (idcurso,url_banner,titulo,descricao,autor,estado,nivel_acesso,tipo,preco,popularidade,dataPublicacao,classificacao) values (default, $url_imagem,'$titulo','$desc','$nivel',default)";
							echo "<br>titulo: $titulo";
							echo "<br>estado: $estado";
							echo "<br>nivel: $nivel";
							echo "<br>descricao: $desc";
							echo "<br>autor: $autor";
						//};
						
					}else{
						$_SESSION['erro'] = "você alguns arquivos que não estão no formato desejado";
					}
				}*/
			}	
		}else{
			$_SESSION['erro'] = "videos não enviados ou erro ao salvar dados, tente novamente";
			header('Location: ../../pages-plataforma/prof/cadastro-curso?erro=cadastrar curso');
		}
 ?>