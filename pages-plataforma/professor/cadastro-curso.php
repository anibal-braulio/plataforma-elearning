<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Cursos Inscritos | Professor";
	$url_css = "../assets/css/prof/cursos.css";
	$url_js1 = "../assets/js/cadastro.js";
	$url_js2 = "../assets/js/jquery.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<?php require_once "../templates/asideCurso.php"?>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section class="content-mk-curso">
			<form id="mkForm" class="form-criacao" action="../../backend/controllers/dados-cad-curso.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend><h1>Painel de Criação de Curso</h1></legend>

					<!-- Título do Curso e Upload de Vídeos -->
					<div class="flex-row center just-b" style="width:600px">
					<label for="titulo">Título do Curso:
						<input type="text" id="titulo" name="titulo" maxlength="80" required placeholder="Digite o título do curso">
					</label>

					<label for="videos" class="upload-videos">
						<img src="../assets/img/icons/pasta.png" alt="Upload Vídeos">
						<span>Adicionar Vídeos</span>
						<input type="file" name="videos[]" id="videos" multiple accept="video/*" hidden>
					</label>
					</div>

					<!-- Upload de Banner -->
					<div class="banner flex-row center just-b">
					<label for="banner">Banner do Curso
						<input type="file" id="banner" name="banner" accept="image/*" required>
					</label>
					</div>

					<!-- Estado, Acesso e Tipo -->
					<div class="flex-column center just-b">
					<label for="estado">Estado:
						<select id="estado" name="estado" required>
						<option value="" disabled selected>Selecione</option>
						<option value="terminado">Terminado</option>
						<option value="em curso">Em curso</option>
						</select>
					</label>

					<label for="acesso">Acesso:
						<select id="acesso" name="acesso" required>
						<option value="publico" selected>Público</option>
						<option value="privado">Privado</option>
						<option value="restrito">Restrito</option>
						</select>
					</label>

					<label for="tipo">Tipo:
						<select id="tipo" name="tipo" onchange="document.getElementById('preco').classList.toggle('oculto', this.value !== 'pago')">
						<option value="gratis" selected>Grátis</option>
						<option value="pago">Pago</option>
						</select>
					</label>

					<input type="number" class="preco oculto" id="preco" name="preco" step="0.01" min="0" value="0.00" placeholder="Preço do curso">
					</div>

					<!-- Descrição e Autoria -->
					<div class="flex-column">
					<label for="desc">Descrição do Curso:</label>
					<textarea name="desc" id="desc" placeholder="Dê uma boa descrição do seu curso para atrair alunos" rows="4" required></textarea>

					<label for="autor">Autor do Curso:
						<select name="autor" id="autor" onchange="document.getElementById('autores').classList.toggle('oculto', this.value !== 'escrever')">
						<option value="eu" selected>Eu sou o autor</option>
						<option value="escrever">Escrever outro(s)</option>
						</select>
					</label>

					<input class="autores oculto" name="autores" id="autores" placeholder="Separe os autores por vírgula">
					</div>

					<!-- Botão de Envio -->
					<div class="form-actions">
					<button type="submit" name="salvar" id="salvar">Salvar Curso</button>
					</div>
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