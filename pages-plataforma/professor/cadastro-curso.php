<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Cursos Inscritos | Professor";
	$url_css = "../assets/css/prof/cursos.css";
	$url_js1 = "../assets/js/jquery.js";
	$url_js2 = "../assets/js/curso.js";
	require_once "../templates/head.php";
?>

<div id="box-spin">
	<div id="spin"></div>
</div>
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
				<li><a href="cursos-disponiveis.php">Disponiveis</a></li>
				<li><a href="meus-cursos.php">Meus</a></li>
				<li><a href="inscritos.php">Inscritos</a></li>
				<li class="item-ativo"><a href="cadastro-curso.php">criar</a></li>
				<li><a href="guardados.php">Guardados</a></li>
			</ul>
		</nav>
	</section>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section class="content-mk-curso">
			<form id="mkForm" class="form form-criacao" action="../../backend/controllers/dados-cad-curso.php" method="post" enctype="multipart/form-data">
				<fieldset class="fieldset-main flex-column center just-b">
					<legend><h1>Painel de Criação de Curso</h1></legend>
					<fieldset class="flex-row center just-b">
						<label for="titulo">Título do Curso:
							<input type="text" id="titulo" name="titulo" maxlength="80"  placeholder="Digite o título do curso">
						</label>
						<div class="banner flex-row center just-b">
							<label for="banner">Banner do Curso
								<input type="file" id="banner" name="banner" accept="image/*" hidden>
							</label>
						</div>
						<div class="videos flex-row center just-b">
							<label for="videos" class="upload-videos">
								<img src="../assets/img/icons/pasta.png">
								<span>Adicionar Vídeos</span>
								<input type="file" name="videos[]" id="videos" multiple accept="video/*" hidden>
							</label>
						</div>
					</fieldset>
					<!-- Título do Curso e Upload de Vídeos -->
					<!--<div class="flex-row center just-b" style="width:600px">
					<label for="titulo">Título do Curso:
						<input type="text" id="titulo" name="titulo" maxlength="80"  placeholder="Digite o título do curso">
					</label>
						<div class="banner flex-row center just-b">
					<label for="banner">Banner do Curso
						<input type="file" id="banner" name="banner" accept="image/*" hidden>
					</label>
					</div>
					<div class="videos flex-row center just-b">
					<label for="videos" class="upload-videos">
						<img src="../assets/img/icons/pasta.png">
						<span>Adicionar Vídeos</span>
						<input type="file" name="videos[]" id="videos" multiple accept="video/*" hidden>
					</label>
					</div>-->

					<!-- Estado, Acesso e Tipo -->
					<fieldset class="fds-2 flex-row center just-b">
					<div class="flex-column center just-b">
					<label for="estado">Estado:
						<select id="estado" name="estado" >
						<option value="selecione" disabled selected>Selecione</option>
						<option value="completo">Completo</option>
						<option value="em andamenti">Em andamento</option>
						</select>
					</label>

					<label for="acesso">Acesso:
						<select id="acesso" name="acesso" >
						<option value="selecione" disabled selected>Selecione</option>
						<option value="publico">Público</option>
						<option value="privado">Privado</option>
						<option value="restrito">Restrito</option>
						</select>
					</label>

					<label for="tipo">Tipo:
						<select id="tipo" name="tipo" onchange="document.getElementById('preco').classList.toggle('oculto', this.value !== 'pago')">
							<option value="selecione" disabled selected>Selecione</option>
						<option value="gratis">Grátis</option>
						<option value="pago">Pago</option>
						</select>
					</label>

					<input type="number" class="preco oculto" id="preco" name="preco" step="0.01" min="0" value="0.00" placeholder="Preço do curso">
					</div>

					<!-- Descrição e Autoria -->
					<div class="flex-column">
					<label for="desc" class="lbl-desc">Descrição do Curso:</label>
					<textarea name="desc" id="desc" placeholder="Dê uma boa descrição do seu curso para atrair alunos" rows="6" cols="30"></textarea>

					<!--<label for="autor">Autor do Curso:
						<select name="autor" id="autor" onchange="document.getElementById('autores').classList.toggle('oculto', this.value !== 'escrever')">
						<option value="eu" selected>Eu sou o autor</option>
						<option value="escrever">Escrever outro(s)</option>
						</select>
					</label>

					<input class="autores oculto" name="autores" id="autores" placeholder="Separe os autores por vírgula">
					</div>-->

					<!-- Botão de Envio -->
					<div class="form-actions">
					<button type="submit" name="salvar" id="salvar">Salvar Curso</button>
					</div>
				</fieldset>
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
		
	</section>
</section>
	<div id="modal-err" class="modal-err">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Erro no formulario</h2>
            <p id="erro">aguardando um texto informativo...</p>
        </div>
    </div>
</body>
</html>