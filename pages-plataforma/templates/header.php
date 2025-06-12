<header class="flex-column center header">
			<section class="flex-row center just-b hd-content">
				<div class="header-title">
					<h3>Pagina Inicial</h3>
					<?php echo "<span>".date('d-m-Y')."<span>"?>
				</div>
				<form class="form-busca flex-row center" id="form" action="dados-busca.php" method="get">
			 		<input type="search" name="search" id="search" placeholder="o que quer aprender?">
			 		<button class="center" name="buscar" id="buscar" type="submit">
			 		<img loading="lazy" src="../assets/img/icons/lupa.png"></button>
			 	</form>
			 	<nav>
			 		<ul class="item-menu flex-row">
			 			<li><a href="chat.php">
			 				<figure>
			 					<img loading="lazy" src="../../assets/img/icons/chat@50.png">
			 				</figure>
			 			</a></li>
			 			<li><a href="notify.php">
			 				<figure>
			 					<img loading="lazy" src="../../assets/img/icons/notify.png">
			 				</figure>
			 			</a></li>
			 			<li><a href="config.pph">
			 				<figure>
			 					<img loading="lazy" src="../../assets/img/icons/config.png">
			 				</figure>
			 			</a></li>
			 		</ul>
			 	</nav>
		 	</section>
		 	<section class="hd-sub flex-row center">
			 	<nav>
				<ul class=" hd-sub-menu flex-row center just-b">
					<li><a href="../professor/home.php">
						Pagina inicial
					</a></li>
					<li><a href="#">
						Dashboard
					</a></li>
					<li><a href="../professor/meus-cursos.php">
						Cursos
					</a></li>
					<li><a href="../professor/chat.php">
						Chat
					</a></li>
					<li><a href="../professor/Biblioteca.php">
						Biblioteca
					</a></li>
					<li><a href="../professor/avaliacao.php">
						Avaliação
					</a></li>
					<li><a href="../professor/.php">
						Status
					</a></li>
				</ul>
			</nav>
			</section>
		</header>