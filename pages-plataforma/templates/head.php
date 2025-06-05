<!DOCTYPE html>
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
<html lang="pt-br">
<head>
	<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $descricao_pagina?>">
	<link type="text/css" rel="stylesheet" href="<?php echo $url_css?>">
	<title><?php $titulo?></title>
	<script type="text/javascript" src="<?php echo $url_js1?>" defer></script>
	<script type="text/javascript" src="<?php echo $url_js2?>" defer></script>
</head>
<body>