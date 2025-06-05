<?php 
	$descricao_pagina = "chat de conversas privadas entre usuarios";
	$titulo = "Conversas | Professor";
	$url_css = "../assets/css/prof/chat.css";
	$url_js1 = "../assets/js/cadastro.js";
	$url_js1 = "../assets/js/cadastro.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section>
        <section class="ctt-footer ctt-conversas flex-column center">
					<div class="box-1 box-sms flex-row center just-b">
						<h2>Conversas</h2>
						<form class="flex-row center just-b" method="get">
							<div class="form-busca flex-row center" id="form" action="dados-busca.php" method="get">
								<input type="search" name="search" id="search" placeholder="o que quer aprender?">
								<button class="center" name="buscar" id="buscar" type="submit">
								<img loading="lazy" src="../assets/img/icons/lupa.png"></button>
							</div>
							<select>
								<option>todas</option>
								<option>não lidas</option>
								<option>favoritos</option>
							</select>
						</form>
					</div>
					<div class="div-ss flex-column center just-b">
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
						<section class="ss-user-sms flex-row center just-b">
							<figure>
								<img loading="lazy" src="../../assets/img/icons/user@1.png">
							</figure>		
							<div class="flex-column center just-b">
								<h4>Nome de usuario</h4>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum neque</p>
							</div>
							<ul class="flex-row center just-b">
								<li><img loading="lazy" src="../../assets/img/icons/edit.png" alt=""></li>
								<li><img loading="lazy" src="../../assets/img/icons/eyes.png" alt=""></li>
							</ul>
							</li>
						</section>
					</div>
				</section>
        </section>
    </section>
</section>
</body>
</html>