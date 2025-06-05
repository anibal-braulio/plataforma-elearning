<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Cursos Inscritos | Professor";
	$url_css = "../assets/css/prof/inscritos.css";
	$url_js1 = "../assets/js/cadastro.js";
	$url_js2 = "../assets/js/jquery.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<?php require_once "../templates/asideCurso.php"?>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section class="content-mk-curso">
			<form id="mkForm" class="form-criacao" action="" method="post" enctype="multipart/form-data">
				<fieldset>
					<h1>Cadastrar Curso</h1>
					<div class="box flex-row">
						<label class="arrow" for="banner">Imagem do curso</label>
						<input type="file" name="banner" id="banner">
						<div class="box-1">
							<label for="titulo">Titulo
								<input type="text" name="titulo" id="titulo">
							</label>
							<label>Estado
								<select name="Estado">
								<option value="terminado">Terminado</option>
								<option value="em curso">Em curso</option>
							</select></label>

							<label>Nivel acesso
								<select name="nivel">
								<option value="privado">Privado</option>
								<option value="Publico">Publico</option>
								<option value="restrito">Restrito</option>
							</select></label>
						</div>
					</div>
					<div class="flex-row">
						<label>descrição
							<textarea placeholder="dê uma boa descrição do seu curso para que os alunos possam escollhe-los" name="desc" id="desc"></textarea>
						</label>
						<label class="arrow" for="curso">Carregar meu curso</label>
						<input type="file" name="curso" id="curso">
					</div>
					<label for="autor">Autor do Curso
						<select name="autor" id="autor">
							<option value="Eu">Eu sou, Autor</option>
							<option value="escrever">Escrever</option>
						</select><br>
						<textarea name="autores" id="autores" placeholder="os autores devem ser separados por virgula"></textarea>
					</label>
					<button type="submit" name="salvar" id="salvar">salvar</button>
				</fieldset>
			</form>
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