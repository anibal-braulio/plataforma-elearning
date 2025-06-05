<?php 
	$descricao_pagina = "tela inicial de boas vindas ao professor da plataforma elearning";
	$titulo = "Biblioteca de artigos da plataforma| Professor";
	$url_css = "../assets/css/prof/biblioteca.css";
	$url_js1 = "../assets/js/cadastro.js";
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
    </section>
</section>

<?php require_once "../templates/end-page.php"?>