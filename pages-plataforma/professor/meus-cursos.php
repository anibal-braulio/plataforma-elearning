<?php 
	$descricao_pagina = "tela dos cursos criados pelo usuario na plataforma elearning";
	$titulo = "Cursos Criados por mim | Professor";
	$url_css = "../assets/css/prof/cursos.css";
	$url_js1 = "../assets/js/cadastro-curso.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<?php require_once "../templates/asideCurso.php"?>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
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
		<!--<nav>
			<ul>
				<li>gadjet<figure><img src="menu-pop.png"></figure></li>
				<li>
					
				</li>
			</ul>
		</nav>
		<a href="" class="mk-btn" id="mk-btn">criar curso</a>
		<a href="" class="mk-btn" id="mk-btn">criar curso</a>-->
		<!--<section class="container">
			<article>
				<h3>Painel de criação</h3>
				<fieldset class="painel-upload"><legend>Carregue a sua pasta de curso</legend>
					<form id="form-upload">
						<input type="file" name="upload" value="clique para carregar">
						carregue uma imagem/banner para atribuir ao curso
						<button>cancelar</button>
					</form>
				</fieldset>
				
				<fieldset><legend>Dados do Curso</legend>
					<form id="form-cadastro">
					<label>
						<input type="text" name="titulo" id="titulo" placeholder="informe um titulo para o curso">
					</label>
					<label>
						<input type="text" name="descricao" id="descricao" placeholder="descreva seu curso">
						<p>é um curso de que?</p>
						<p>e para que serve esse curso?</p>
						<p>porque devo aprender o que está ensinando aqui?</p>
					</label>

					<label for="autoria">Autoria do Curso</label>
					<select name="autoria" id="autoria">
						<option value="individual">indivividual</option>
						<option value="coletiva">colectiva</option>
					</select>
					<label for="autor">
						<input type="text" name="autor" id="autor" placeholder="separe o nome de cada autor por virgula(,)">
					</label>
				</form>
				</fieldset>
				
			</article>
		</section>-->
	</section>
</section>
	<button class="btnCadastrar">
		<img src="../assets/img/icons/add.png" alt="">
	</button>
</form>
</div>
</body>
</html>
