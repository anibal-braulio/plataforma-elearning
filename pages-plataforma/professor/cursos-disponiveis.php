<?php 
	$descricao_pagina = "tela dos cursos criados pelo usuario na plataforma elearning";
	$titulo = "Cursos Criados por mim | Professor";
	$url_css = "../assets/css/prof/cursos.css";
	$url_js1 = "../assets/js/cadastro-curso.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<section class="aside flex-column center">
		<div class="box-user flex-column center">
			<figure>
				<?php echo "<img loading='lazy' src='../../".$dados['foto_perfil']."'>"?>
			</figure>
			<figcaption>Olá, <?php echo $dados['nome']?></figcaption>
			<?php echo "<p>".$dados['email']."</p>" ?>
		</div>
		<nav>
            <ul class="menu-hd flex-column center">
				<li class="item-ativo"><a href="cursos-disponiveis.php">Disponiveis</a></li>
				<li><a href="meus-cursos.php">Meus</a></li>
				<li><a href="inscritos.php">Inscritos</a></li>
				<li><a href="cadastro-curso.php">criar</a></li>
				<li><a href="guardados.php">Guardados</a></li>
			</ul>
		</nav>
	</section>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
			<section class="content flex-column center">
				<section class="flex-column content-2">
					<div class="box-header flex-row center just-b">
						<h2>Cursos Disponiveis</h2>
					</div>
					
					<div class="box-curso flex-row center">
						<?php
							$sqlc = "SELECT * FROM cursos";
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
		<section class="pnl-cursos">
			<h2>Painel de Curso</h2>
			<article>
				<h3>Criados</h3>
				<p>0</p>
			</article>
			<article>
				<h3>Inscritos</h3>
				<p>0</p>
			</article>
			<article>
				<h3>Pontos</h3>
				<p>0</p>
			</article>
		</section>
		<dialog class="dialog-err">
			<h3>Erro no formulario</h3>
			<p>O formulario não pode ser enviado porque há erro no seu preenchimento, leia com atenção os textos em cada campo para preencher devidamente e fazer o seu cadastro sem complicações</p>
			<p id="erro">aguardando um texto informativo...</p>
			<button>OK</button>
		</dialog>
	</section>
</section>
</body>
</html>
