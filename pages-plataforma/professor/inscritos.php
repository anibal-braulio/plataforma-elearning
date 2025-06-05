<?php 
	$descricao_pagina = "tela dos cursos em que o usuario está inscrito plataforma elearning";
	$titulo = "Cursos Inscritos | Professor";
	$url_css = "../assets/css/prof/inscritos.css";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
    <?php require_once "../templates/asideCurso.php"?>
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section class="content flex-column center">
				<section class="flex-column content-2">
					<div class="box-header flex-row center just-b">
						<h2>Seus Inscritos</h2>
						<button>ver todos</button>
					</div>
					
					<div class="box-artigo flex-row center">
                    <?php 
						$sql = "SELECT cursos.* FROM inscricao JOIN cursos ON inscricao.curso = cursos.idcurso WHERE inscricao.inscrito = '$id'";
						$rs = mysqli_query($conexao, $sql);

						if(mysqli_num_rows($rs) > 0){
							while($curso = mysqli_fetch_assoc($rs)){
								echo "<article>";
								echo "<div class='curso'> <figure><img loading='lazy' src='../../".$curso['url_banner']."'/></figure>";
								echo "<ul>";
								echo "<li>".$curso['titulo']."</li>";
								echo "<li>".$curso['autor']."</li>";
								echo "<li>".$curso['classificacao']." estrelas</li>";
								echo "</ul></div>";
								echo "<nav>	<ul class='crud flex-row'>";
								echo "<li>abrir</li><li>editar</li>
								<li>eliminar</li><li>detalhes</li>";
								echo "</ul></nav>";
								echo "</article>";
							}
							echo "</section>";
						}else{
							echo "<p class='none-text'>Você não se inscreveu em nenhum curso!</p>";
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
