<?php
    $descricao_pagina = "tela de detalhes do curso";
	$titulo = "Cursos Criados por mim | Professor";
	$url_css = "../assets/css/prof/prof-home.css";
	$url_js1 = "../assets/js/cadastro-curso.js";
	require_once "../templates/head.php";
    $idCurso = $_GET['id'];
    // Verifica se o ID do curso foi fornecido
    if (!isset($idCurso) || empty($idCurso)) {
        header("Location: home.php?error=1");
        exit;
    }
    $sql = "SELECT * FROM cursos WHERE idcurso = '$idCurso'";
    $rs = mysqli_query($conexao, $sql);
    // Verifica se a consulta retornou resultados
    // mysqli_stmt_bind_param($rs, $idCurso);
    // mysqli_stmt_execute($rs);
    // $resultado = mysqli_stmt_get_result($rs);
    $curso = mysqli_fetch_assoc($rs);
    if(mysqli_num_rows($rs) <= 0){
        header("Location: home.php?error=2");
        $_SESSION['erro'] = "Video não está disponovel na plataforma no momento!";
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
                <?php echo "<h1>".$curso['titulo']."</h1>" ?>

                <section id="container1">

                    <div class="img_capa">
                        <?php echo "<img src='".$curso['url_banner']."'>"; ?>
                    </div>
                    <br>
                    <h4><?php echo $curso['titulo']?></h4>
                    </div> 
                    <div class="conte"> <strong class="str">Historia:</strong> 
                    Nesse anime acompanhamos a história de um garodo que mora no interior e decide sair de seu 
    habitar natural junto com seus dois amigos para conseguir dinheiro e ajudar o seu vilarejo , no entanto acabam descobrindo que a cidade
não é um mar de estrelas</div>
                    <h3>Lista das Aulas</h3>
                    <?php
                    $curso = mysqli_fetch_assoc($rs);
                    $sql = "SELECT * FROM aulas WHERE curso = '$idCurso'";
                    $rs = mysqli_query($conexao, $sql);
                    if(mysqli_num_rows($rs) > 0){
                        While($aulas = mysqli_fetch_assoc($rs)){
                            echo "<ul><li class='link'><a>".$aulas['nome']."</a></li></ul>";
                        }  
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