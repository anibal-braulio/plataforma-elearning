<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Tela Inicial | Professor";
	$url_css = "../assets/css/prof/cursos.css";
	$url_js1 = "../assets/js/cadastro.js";
	$url_js1 = "../assets/js/cadastro.js";
	require_once "../templates/head.php";
?>
    <div id="modalCriar" class="modalCriar">
		<h2>Cadastro de Curso</h2>
		<form action="../../backend/dados_curso.php" method="post" enctype="multipart/form-data">
			<label for="titulo">Título:</label>
			<input type="text" id="titulo" name="titulo" maxlength="80" required>

            <label for="videos"><img src="../assets/img/icons/pasta.png" alt=""></label>
            <input type="file" name="videos[]" id="videos" multiple accept="video/*">

			<label for="descricao">Descrição:</label>
			<textarea id="descricao" name="descricao" maxlength="500" required></textarea>

			<label for="estado">Estado:</label>
			<select id="estado" name="estado">
				<option value="completo">Completo</option>
				<option value="em progresso">Em Progresso</option>
			</select>

			<label for="nivelAcesso">Nível de Acesso:</label>
			<select id="nivelAcesso" name="nivelAcesso">
				<option value="selecione" selected>selecione</option>
				<option value="privado">Privado</option>
				<option value="publico">Público</option>
				<option value="restrito">Restrito</option>
			</select>

			<label for="tipo">Tipo:</label>
			<select id="tipo" name="tipo" required>
				<option value="gratis">Grátis</option>
				<option value="pago">Pago</option>
			</select>

			<label for="preco">Preço:</label>
			<input type="number" id="preco" name="preco" step="0.01" value="0.00">

			<button type="submit">Salvar Curso</button>
		</form>
	</div>
</body>
</html>
