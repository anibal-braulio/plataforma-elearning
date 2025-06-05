<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Biblioteca de artigos da plataforma| Professor";
	$url_css = "../assets/css/prof/biblioteca.css";
	$url_js1 = "../assets/js/cadastro-artigo.js";
	$url_js2 = "../assets/js/jquery.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<?php require_once "../templates/asideBiblioteca.php"?>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
	<main>
		<h1>Cursos disponiveis para si!</h1>
		<?php 
			echo "a caminho!...";
		?>
	</main>
	<button class="btnCadastrar">
		<img src="../assets/img/icons/seta-cima.png" alt="">enviar
	</button>
</section>
 <div id="modalCriar" class="modalCriar">
	<form class="modal-content" action="../../backend/controllers/dados-artigo.php" method="post">
		<span class="close">&times;</span>
		<p>Enviar um material</p>
		<input type="text" name="titulo" id="titulo" placeholder="de um titulo ao seu arquivo" max-length="90">
		<label for="arquivo"><img src="../assets/img/icons/arquivo.png" alt=""></label>
		<input type="file" name="arquivo" id="arquivo">
		<label for="desc">Descrição</label>
		<textarea name="desc" id="desc"></textarea>
		<button type="submit">enviar</button>
	</form>
</div>
<?php require_once "../templates/end-page.php"?>