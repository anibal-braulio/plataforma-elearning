<?php
    $descricao_pagina = "tela de detalhes do curso";
	$titulo = "Reprodução dos videos | Professor";
	$url_css = "../assets/css/prof/playAula.css";
	$url_js1 = "../assets/js/jquery.js";
	$url_js2 = "../assets/js/playAula.js";
	require_once "../templates/head.php";
    $idCurso = $_GET['idcurso'];
    $idAula = $_GET['idaula'];
    // Verifica se o ID do curso foi fornecido
    if (!isset($idCurso) || empty($idCurso)) {
        if(!isset($idAula) || empty($idCurso)){
            header("Location: home.php?error=1");
            exit;
        }
    }
    $rsa = mysqli_query($conexao, "SELECT * FROM aulas JOIN cursos on aulas.curso = cursos.idcurso WHERE aulas.curso = '$idCurso'");
	$rs = mysqli_query($conexao, "SELECT * FROM cursos where idcurso='$idCurso'");
    // Verifica se a consulta retornou resultados
    // mysqli_stmt_bind_param($rs, $idCurso);
    // mysqli_stmt_execute($rs);
    // $resultado = mysqli_stmt_get_result($rs);
    
    if(mysqli_num_rows($rs) > 0 && mysqli_num_rows($rsa) > 0){
		$curso = mysqli_fetch_assoc($rs);
		$aula = mysqli_fetch_assoc($rsa);
    }else{
		header("Location: home.php?error=3");
        $_SESSION['erro'] = "caminho de reprodução invalida!";
	}
    
    // Aqui você pode adicionar a lógica para verificar se o curso existe e se o usuário tem permissão para acessá-lo.
    // Por exemplo, você pode consultar o banco de dados para verificar se o curso existe e
    // se o usuário é o professor do curso ou tem permissão para visualizar a playlist.
    // Exemplo de verificação (pseudocódigo):
    // $curso = buscarCursoPorId($idCurso);

    // Aqui você pode adicionar a lógica para exibir a playlist do curso
    // Por exemplo, buscar os vídeos do curso com base no ID fornecido
    // e exibi-los em uma lista ou player de vídeo.
    // Lembre-se de validar o ID e garantir que o usuário tenha permissão para acessar a playlist.
    // Exemplo de como você poderia buscar os vídeos (pseudocódigo):
    // $idCurso = $_GET['id'];
    // $videos = buscarVideosDoCurso($idCurso);
    // Função fictícia para buscar vídeos do curso
    // function buscarVideosDoCurso($idCurso) {
    //     // Aqui você implementaria a lógica para buscar os vídeos do curso no banco de dados
    //     // e retornaria um array ou lista de vídeos.

    // Certifique-se de que o ID do curso é válido e que o usuário tem permissão para acessar a playlist.
    // Você pode usar a função de conexão com o banco de dados para buscar os vídeos do
    // curso correspondente ao ID fornecido.
    // Exemplo de conexão com o banco de dados:
    // $conexao 
?>
<section class="body flex-row">
	<div id="box-spin">
		<div id="spin"></div>
	</div>
	<section class="aside">
		<div class="box-user flex-column center">
			<figure>
				<?php echo "<img loading='lazy' src='../../".$dados['foto_perfil']."'>"?>
			</figure>
			<figcaption>Olá, <?php echo $dados['nome']?></figcaption>
			<?php echo "<p>".$dados['email']."</p>" ?>
		</div>
		<nav>
			<ul class="flex-column center menu-header">
				<li><a href="home.php">
					<figure>
						<img  class="voc" src="../assets/img/icons/home.png" alt="icone de para acessar a tela principal">
						<figcaption>Pagina Inicial</figcaption>
					</figure>
				</a></li>
				<li><a href="#">
					<figure>
						<img  class="voc" src="../assets/img/icons/dashboard.png" alt="icone de para acessar perfil">
						<figcaption>dashboard</figcaption>
					</figure>
				</a></li>
				<li><a href="meus-cursos.php">
					<figure>
						<img src="../assets/img/icons/play@1.png" alt="icone de para acessar perfil">
						<figcaption>cursos</figcaption>
					</figure>
				</a></li>
				<li><a href="chat.php">
					<figure>
						<img src="../assets/img/icons/chat@50.png" alt="icone de para acessar perfil" loading="lazy">
						<figcaption>chat</figcaption>
					</figure>
				</a></li>
				<li><a href="biblioteca.php">
					<figure>
						<img id="agenda" src="../assets/img/icons/artigo.png" alt="icone de para acessar agenda" loading="lazy">
						<figcaption>biblioteca</figcaption>
					</figure>
				</a></li>
				<li><a href="#">
					<figure>
						<img id="chat" src="../assets/img/icons/aval.png" alt="icone de para acessar chat" loanding="lazy">
						<figcaption>avaliação</figcaption>
					</figure>
				</a></li>
				<li><a href="#">
					<figure>
						<img src="../assets/img/icons/status.png" alt="icone de para acessar ajuda">
						<figcaption>status</figcaption>
					</figure>
				</a></li>
			</ul>
		</nav>
		<form class="form-logout" action="../../backend/controllers/logout.php" method="post">
			<button class="flex-row center" id="logout" type="submit" name="logout">
				<img src="../assets/img/icons/logout.png">sair
			</button>
		</form>
	</section>
	<section class="conteudo">
		<section class="ctt content-1">
		    <header class="flex-row center header-content">
			<div class="header-title">
				<h3>Pagina Inicial</h3>
				<?php echo "<span>".date('d-m-Y')."<span>"?>
			</div>
			<form class="form-busca flex-row center" id="form" action="dados-busca.php" method="get">
		 		<input type="search" name="search" id="search" placeholder="o que quer aprender?">
		 		<button class="center" name="buscar" id="buscar" type="submit">
		 		<img loading="lazy" src="../assets/img/icons/lupa.png"></button>
		 	</form>
		 	<nav>
		 		<ul class="item-menu flex-row">
		 			<li><a href="">
		 				<figure>
		 					<img loading="lazy" src="../../assets/img/icons/chat@50.png">
		 				</figure>
		 			</a></li>
		 			<li><a href="">
		 				<figure>
		 					<img loading="lazy" src="../../assets/img/icons/notify.png">
		 				</figure>
		 			</a></li>
		 			<li><a href="">
		 				<figure>
		 					<img loading="lazy" src="../../assets/img/icons/config.png">
		 				</figure>
		 			</a></li>
		 		</ul>
		 	</nav>
		</header>
		<section class="container-cursos flex-column just-b">
			<section class="ranking flex-column center just-b">
				<article>
					<h2>Meus Pontos</h2>
					<p>0</p>
				</article>
				<article>
					<h2>Meus Alunos</h2>
					<p>0</p>
				</article>
				<article>
					<h2>Cursos Criados</h2>
					<p>0</p>
				</article>
				<article>
					<h2>Cursos Inscritos</h2>
					<p>0</p>
				</article>
			</section>
			<main>
                <section id="container">
				<?php
					$likes = 128;

	// Simulando comentários do banco
					$comentarios = [
					["usuario" => "Ana", "mensagem" => "A aula foi muito clara, obrigada!"],
					["usuario" => "Carlos", "mensagem" => "Gostei da parte sobre media queries!"],
					];
				?>
				<div class="video-box">
				<h2 class="curso-nome"><?= $curso['titulo'] ?></h2>
				<h3 class="titulo-video"><?= $aula['nome'] ?></h3>

				<div class="video-wrapper">
					<video id="videoPlayer" src="../../<?= $aula['url_aula']?>" controls controlsList="nodownload noplaybackrate"></video>
				</div>

				<div class="botoes">
					<button id="likeBtn">👍 <span id="likeCount"><?= $likes ?></span></button>
					<button id="saveBtn">💾 Guardar para depois</button>
					<a href="../../<?= $aula['url_aula']?>" download class="btn-download">⬇️ Baixar</a>
					<button id="pipBtn">🖼️ PiP</button>
					<button><figure class="flex-row center just-b">
						<img src="../assets/img/icons/chat@50.png" alt="">
						<figcaption>chat privado</figcaption>
					</figure>
					</button>
				</div>
				<p class="descricao"><strong>Descrição do Video: </strong><?= $aula['descricao'] ?></p>
				<div class="comentarios">
					<h4>Comentários</h4>
					<?php foreach ($comentarios as $c): ?>
					<div class="comentario">
						<strong><?= $c['usuario'] ?>:</strong>
						<p><?= $c['mensagem'] ?></p>
					</div>
					<?php endforeach; ?>

					<form action="enviar_comentario.php" method="POST" class="form-comentario">
					<textarea name="mensagem" required placeholder="Escreva um comentário..."></textarea>
					<input type="hidden" name="curso" value="<?= $curso ?>">
					<button type="submit">Enviar</button>
					</form>
				</div>
				</div>
				<br>
				<h3>Lista das Aulas</h3>
				<?php
				$curso = mysqli_fetch_assoc($rs);
				$sql = "SELECT * FROM aulas WHERE curso = '$idCurso'";
				$rs = mysqli_query($conexao, $sql);
				if(mysqli_num_rows($rs) > 0){
					echo "<ul class='menu-reproducao'>";
					While($aulas = mysqli_fetch_assoc($rs)){
						echo "<li class='link'><a href='playAula.php?idcurso=".$idCurso."&idaula=".$aulas['idaula']."'>".$aulas['nome']."</a></li>";
					}  
					echo "</ul>"; 
				}else{
					header("Location: home.php?error=3");
					return;
					$_SESSION['erro'] = "Curso não tem aulas cadastradas!";
				}

				?>
			</main>
            </section>
        <section>
    </section>
<?php require_once '../templates/end-page.php'; ?>