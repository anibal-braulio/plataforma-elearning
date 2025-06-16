<?php
$conn = new mysqli("localhost", "root", "", "elearning");
$curso_id = $_POST['curso_id'];
$de = $_POST['de_usuario'];
$para = $_POST['para_usuario'];
$tipo = $_POST['tipo'];
$conteudo = $_POST['conteudo'];
$data_envio = date('Y-m-d H:i:s');
$conn->query("INSERT INTO mensagens_privadas (curso_id, de_usuario, para_usuario, tipo, conteudo, data_envio) VALUES ('$curso_id', '$de', '$para', '$tipo', '$conteudo', '$data_envio')");
echo 'ok';
?>