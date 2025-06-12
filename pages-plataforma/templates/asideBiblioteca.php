<section class="aside">
		<div class="box-user flex-column center">
			<figure>
				<?php echo "<img loading='lazy' src='../../".$dados['foto_perfil']."'>"?>
			</figure>
			<figcaption>Olá, <?php echo $dados['nome']?></figcaption>
			<?php echo "<p>".$dados['email']."</p>" ?>
		</div>
		<nav>
            <ul class="menu-hd flex-column center">
				<li><a href="cadastro-biblioteca.php">Disponiveis</a></li>
                <li><a href="cadastro-biblioteca.php">Publicar</a></li>
				<li><a href="meus-cursos.php">Que publiquei</a></li>
				<li><a href="inscritos.php">Guardados</a></li>
				<li><a href="assitidos.php">A ler</a></li>
			</ul>
		</nav>
	</section>