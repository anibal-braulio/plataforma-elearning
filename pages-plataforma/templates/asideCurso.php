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
				<li><a href="cadastro-curso.php">Novo</a></li>
				<li><a href="meus-cursos.php">Criados</a></li>
				<li><a href="inscritos.php">Inscritos</a></li>
				<li><a href="assitidos.php">Assitidos</a></li>
				<li><a href="guardados.php">Guardados</a></li>
			</ul>
		</nav>
	</section>