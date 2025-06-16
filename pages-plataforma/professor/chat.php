<?php 
	$descricao_pagina = "chat de conversas privadas entre usuarios";
	$titulo = "Conversas | Professor";
	$url_css = "../assets/css/prof/chat.css";
	$url_js1 = "../assets/js/jquery.js";
	$url_js2 = "../assets/js/cha.js";
	require_once "../templates/head.php";
?>
<section class="body flex-row">
	<section class="conteudo">
		<?php require_once "../templates/header.php"?>
		<section class="chat-container">
			<section class="chat-header">Conversa Privada com o Professor (Curso: )
				<span id="notificacao" style="float:right;color:red"></span>
			</section>
			<section class="chat-body" id="chat-body"></section>
			<section class="chat-footer">
				<input type="text" id="mensagem" name="mensagem" placeholder="Digite sua mensagem...">
				<button onclick="enviarMensagem()">Enviar</button>
				<button onclick="gravarAudio()">🎤</button>
			</section>
		</section>
</body>
</html>