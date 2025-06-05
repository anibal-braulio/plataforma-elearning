<!DOCTYPE html>
<?php 
		require_once "../backend/controllers/dbconexao.php";
		session_start();
		if(isset($_SESSION['erro'])){
			echo "<div class='erro-php flex-column'>";
			echo "<img src='../assets/img/icons/erro.png' alt='simbolo de  erro'/>";
			echo "<p>".$_SESSION['erro']."</p>";
			echo "</div>";
		}
	?>
<html>
<head>
	<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
	<meta name="description" content="pagina de cadastro da plataforma Tocolearn">
	<link type="text/css" rel="stylesheet" href="../assets/css/estilo-cad.css">
	<title>Tela de Cadastro</title>
	<script type="text/javascript" src="jquery.js" defer></script>
	<script type="text/javascript" src="cad.js" defer></script>
	<style type="text/css">
		.erro-php{
			z-index: 40;
			position: absolute;
			top: 0%;
			width: 100%;
			background-color: red;
			color: white;
			padding: 5px;
			display: flex;
			flex-flow: column nowrap;
			align-items: center;
			align-content: center;
			border: none;
		}
		.erro-php img{
			width: 45px;
			height: 45px;
			border-radius: 50%;
			border: none;
			padding: 5px;
		}
		.erro-php p{
			width: 100%;
			text-align: center;
			font-size: 18px;
			font-weight: bold;
			padding: 5px;
		}
	</style>
<body>
	
	<header>
		<nav class="flex-row center">
 			<ul class="flex-row just-center">
 				<li><a href="home.html"class="menu tela-ativa">pagina inicial</a></li>
 		</nav>
	</header>

	<section class="container flex-row center">
		<div class="content-1 center">
			<main>
				<h1>Cadastre-se</h1>
				<p>Prenche devidamente os seus dados, e faça este processo tranquilamente porque <small><cite>o que foi feito rapido não quer dizer que foi bem feito!</cite></small>. Fique avontade</p>
				<a href="#boxCadastro"></a>
			</main>
			<fieldset>
				<legend>OU JA TEM UMA CONTA</legend>
				<form action="../backend/controllers/dados-login.php" id="formLogin" class="form-login" method="GET">
					<h2>Faça seu Login</h2>
					<input type="text" id="emailLogin" name="emailLogin" placeholder="email ou numero" unique>
					<br>
					<input type="password" id="senhaLogin" name="senhaLogin" placeholder="sua senha">
					<br>
					<input id="login" name="enviar" type="submit" value="enviar">
				</form>
			</fieldset>
		</div>
		<form action="../backend/controllers/dados-cadastro.php" id="formCad" class="formulario flex-column center" method="POST" enctype="multipart/form-data">
			<fieldset>
				<fieldset class="box-1 flex-row center">
					<legend>Preencha os dados</legend>
					<label for="arquivo" class="box-foto">
						<?php 
							if(isset($_SESSION['foto'])){
								echo "foto selecionada";
							}else{
								echo "selecione uma foto";
							}
						 ?>
					</label><input class="oculto" id="arquivo" name="arquivo" type="file">
					<div>
						<input type="text" name="nome" id="nome" size="35" min-lenght="3" placeholder="nome completo">
						<span></span><br>
						<input type="email" name="email" id="email" size="35"placeholder="email ou numero" ><br>
						<input type="password" name="senha" id="senha" size="35" placeholder="crie uma senha" >
					</div>
				</fieldset>
				
				<fieldset class="dados">
					<label class="titulo">Data de Nascimento: 
						<br>
						<select id="dia" name="dia">
							<option value="01"  selected>01</option>
							<option value="02" >02</option>
							<option value="03" >03</option>
							<option value="04" >04</option>
							<option value="05" >05</option>
							<option value="06" >06</option>
							<option value="07" >07</option>
							<option value="08" >08</option>
							<option value="09" >09</option>
							<option value="10" >10</option>
							<option value="12" >22</option>
							<option value="13" >13</option>
							<option value="14" >14</option>
							<option value="15" >15</option>
							<option value="16" >16</option>
							<option value="17" >17</option>
							<option value="18" >18</option>
							<option value="19" >19</option>
							<option value="20" >20</option>
							<option value="21" >21</option>
							<option value="22" >22</option>
						</select>
						<select name="mes" id="mes">
							<option value="janeiro" selected>Janeiro</option>
							<option value="Fevereiro">Fevereiro</option>
							<option value="Março" >Março</option>
							<option value="Abril" >Abril</option>
						</select>
						<select name="ano" id="ano">
							<option value="2000" >2000</option>
							<option value="2001" >2001</option>
							<option value="2002" >2002</option>
							<option value="2003" >2003</option>
						</select>
					</label>
					<label class="genero">Genero
						<br>
						<label>M <input type="radio" name="genero" value="M" ></label>
						<label>F <input type="radio" name="genero" value="F" ></label>
						<label>Outro <input type="radio" name="genero" value="outro" ></label>
					</label>
				</fieldset>
				<fieldset class="dados-2">
					<label for="tipoConta">Tipo de Conta</label>
					<select name="tipoConta" id="tipoConta">
						<option value="Estudante" selected>Estudante</option>
						<option value="Professor(a)">Professor(a)</option>
						<option value="Administrador(a)">Administrador(a)</option>
					</select>
				</fieldset>
				<fieldset class="dados-3">
					<label>Morada: 
						<input type="text" id="morada" name="morada" size="46" >
					</label><br>
					<label>Escolaridade: 
						<input type="text" id="escolaridade" name="escolaridade" >
					</label><br>
					<label>Telefone: 
						<input type="text" id="telefone" name="telefone" >
					</label>
					<div class="form-footer">
						<label class="obs" for="obs">Observações</label><br>
						<textarea id="obs" name="obs" id="obs" placeholder="doença, situações"></textarea><br>
						<button id="btnCad" name="cad-btn" type="submit">cadastar agora --></button>
					</div>
				</fieldset>
		</form>
	</section>
	<dialog>
		<h3>Erro no formulario</h3>
		<p>O formulario não pode ser enviado porque há erro no seu preenchimento, leia com atenção os textos em cada campo para preencher devidamente e fazer o seu cadastro sem complicações</p>
		<p id="erro">aguardando um texto informativo...</p>
		<button>OK</button>
	</dialog>
</body>
</html>