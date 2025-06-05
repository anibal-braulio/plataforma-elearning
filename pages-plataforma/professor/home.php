<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Tela Inicial | Professor";
	$url_css = "../assets/css/prof/prof-home.css";
	$url_js1 = "../assets/js/cadastro.js";
	$url_js1 = "../assets/js/cadastro.js";
	require_once "../templates/head.php";
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
		<section class="container-cursos center">
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
			<section class="content flex-column center">
				<section class="flex-column content-2">
					<div class="box-header flex-row center just-b">
						<h2>Seus Cursos</h2>
						<button>ver todos</button>
					</div>
					
					<div class="box-artigo flex-row center">
						<?php
							$sqlc = "SELECT * FROM cursos where autor='$id'";
							$rsc = mysqli_query($conexao, $sqlc);
							if(mysqli_num_rows($rsc) > 0){
								while($curso = mysqli_fetch_assoc($rsc)){
									echo "<article class='curso flex-column center'>";
									echo "<figure>";
									echo "<img src='../../".$curso['url_banner']."'></figure><div>";
									echo "<h3>".$curso['titulo']."</h3>";
									echo "<p>".$curso['descricao']."</p>";
									echo "<ul class='art-box flex-row center just-b'>";
									echo "<li>10.000kz</li>";
									echo "<li>".$curso['classificacao']." estrelas</li></ul>";
									echo "<ul class='flex-row just-b'>";
									echo "<li><a id='btnComprar' href=''>comprar</a></li>";
									echo "<li><a id='btnDetalhes' href=''>detalhes</a></li>";
									echo "</ul></div></article>";
								}
							}else{
								echo "<h4>Você ainda não tem nenhum curso criado!</h4>";
								echo "<p><a href='meus-cursos.php?painel=mk-curso'>clique aqui<a> para criar um curso!";
							}
						?>
					</div>
				</section>
			</section>
			<main class="">
				<div>
					<figure>
			 			<img src="#">
			 		</figure>
			 		<p>Nome do usuario</p>
				</div>
		</section>
		<section class="flex-column center just-b">
			<article>
				<h3>A Universidade Tocoista</h3>
				<figure>
					<img src="universidade.jpg">
				</figure>
				<h3>Universidade Tocoista, <a href="">visite o site</a></h3>
				<h3>A igreja Tocoista, <a href="">visite o site</a></h3>
				<h3>A historia por tras de tudo isso, <a href="">visite o site</a></h3>
			</article>
			<footer class="ctn-conversas flex-row center just-b">
				<section class="ctt-footer ctt-conversas flex-column center">
					<div class="box-1 box-sms flex-row center just-b">
						<h2>Conversas</h2>
						<form class="flex-row center just-b" method="get">
							<div class="form-busca flex-row center" id="form" action="dados-busca.php" method="get">
								<input type="search" name="search" id="search" placeholder="o que quer aprender?">
								<button class="center" name="buscar" id="buscar" type="submit">
								<img loading="lazy" src="../assets/img/icons/lupa.png"></button>
							</div>
							<select>
								<option>todas</option>
								<option>não lidas</option>
								<option>favoritos</option>
							</select>
						</form>
					</div>
					<div class="div-ss flex-column center just-b">
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
					</div>
				</section>
				<section class="ctt-notify flex-column center">
					<div class="box-1 box-notify">
						<h2>Notificações</h2>
					</div>
					<div class="div-ss flex-column center just-b">
					<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/warning.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
					</div>
				</section>
			</footer>
		</section>
	</section>
</section>
</body>
</html>
