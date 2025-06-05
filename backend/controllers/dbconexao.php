<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "elearning";

	$conexao = mysqli_connect($servername, $username, $password, $dbname);

	if(mysqli_connect_error()):
		echo "falha na conexão".mysqli_connect_error($conexao);
	endif;
 ?>