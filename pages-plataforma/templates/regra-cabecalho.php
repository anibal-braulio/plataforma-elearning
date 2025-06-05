<?php 
	require_once '../../backend/controllers/dbconexao.php';
	session_start();
	if(isset($_SESSION['logado'])){
		$id = $_SESSION['id'];
		$sql = "SELECT * from usuarios WHERE iduser = '$id'";
		$rs = mysqli_query($conexao,
        $sql);
		$dados = mysqli_fetch_assoc($rs);
	}else{
		header("Location: ../../pages/cadastro.php");
	}
 ?>