<!DOCTYPE html>
<?php 
		require_once "../backend/controllers/dbconexao.php";
		session_start();
		if(isset($_SESSION['erro'])){
			echo "<div class='erro-php flex-column'>";
			echo "<span>&times;<span>";
			echo "<p>".$_SESSION['erro']."</p>";
			echo "</div>";
		}
	?>
<html>
<head>
	<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
	<meta name="description" content="pagina de cadastro da plataforma Tocolearn">
	<link type="text/css" rel="stylesheet" href="../assets/css/formulario.css">
	<title>Tela de Cadastro</title>
	<script type="text/javascript" src="../assets/js/jquery.js" defer></script>
	<script type="text/javascript" src="../assets/js/cadastro.js" defer></script>
	<header>
		<h1>Instituto Politecnico da Universidade Tocoista</h1>
		<h2>Plataforma de Eleatning</h2>
	</header>
	<section class="container ctn-login box-login">
		<form action="../backend/controllers/dados-login.php" id="formLogin" class="form-login flex-column" method="GET">
			<fieldset><legend>Inicie sua Sessão</legend>
				<label for="emailLogin">seu email ou numero:</label>
				<input type="text" name="emailLogin" id="emailLogin" placeholder="exemple@gmail.com" min-length="3">
				<label for="senhaLogin">sua senha:</label>
				<input type="password" name="senhaLogin" id="senhaLogin" placeholder="senha1234" maxlength="25">
				<a class="forgot" href="forgot-pass" id="forgot-pass">esqueceu a senha</a>
				<button type="submit" name="entrar" id="entrar">Entrar</button>
				<p>Ainda não tenho uma conta, <a class="call-cadastro" href="#ctn-cadastro">criar conta?</a></p>
			</fieldset>
		</form>
	</section>
	<section class="container ctn-cadastro oculto">
		<form action="../backend/controllers/dados-cadastro.php" class="form-cadastro" method="POST" enctype="multipart/form-data">
			<fieldset class="box-cadastro-um">
			<div class="box box-1">
				<legend>Cadastre-se no sistema</legend>
				<label for="nome">Nome Completo:</label>
				 <input type="text" name="nome" id="nome" placeholder="nome sobrenome" required>
				<br>
				<label for="morada">Endereço:</label>
				<input type="text" name="morada" id="morada" placeholder="onde você vive" required>
				<br>
				<label class="lbl" for="telefone">Telefone:</label>
				<input type="tel" name="telefone" id="telefone" placeholder="9XX XXX XXX" required>
			</div>
			<div class="dados">
				<label class="dataNasc">Data de Nascimento: <select id="dia" name="dia">
						<option value="dia">dia</option>
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
						<option value="12" >12</option>
						<option value="13" >13</option>
						<option value="14" >14</option>
						<option value="15" >15</option>
						<option value="16" >16</option>
						<option value="17" >17</option>
						<option value="18" >18</option>
						<option value="19" >19</option>
						<option value="20" >20</option>
					</select>
					<select name="mes" id="mes">
						<option value="mês" selected>mês</option>
						<option value="janeiro">Janeiro</option>
						<option value="Fevereiro">Fevereiro</option>
						<option value="Março" >Março</option>
						<option value="Abril" >Abril</option>
					</select>
					<select name="ano" id="ano">
						<option value="ano">ano</option>
						<option value="2000" >2000</option>
						<option value="2001" >2001</option>
						<option value="2002" >2002</option>
						<option value="2003" >2003</option>
					</select></label>
				
					<label class="genero">Genero
					<br>
					<label>M <input type="radio" name="genero" value="M" ></label>
					<label>F <input type="radio" name="genero" value="F" ></label>
					</label>
					<label for="tipoConta" class="tipo">Tipo de Conta: <select name="tipoConta" id="tipoConta">
						<option value="Professor">Professor</option>
						<option value="Estudante">Estudante</option>
					</select></label>
				</div>
				<div class="box dados dados-3">
					<label>Escolaridade:</label>
					<input type="text" id="escolaridade" name="escolaridade"><br>
					<div class="form-footer flex-row">
						<p>< <a href="" class="a-ativo">1 </a> / 2 ></p>
						<button class="btn btnNext">proxima -></button>
					</div>
				</div>
			</fieldset>
			<fieldset class="box-user oculto">
				<div class="flex-row">
					<label for="foto" id="lbl-foto">foto</label>
					<input type="file" name="foto" id="foto">
					<div class="box-dados-user flex-column">
						<label for="nomeUser">Nome de Usuario</label>
						<input type="text" name="nomeUser" id="nomeUser" placeholder="crie uma nome de Usuario">

						<label for="senha">Sua senha</label>
						<input type="password" name="senhaUser" id="senhaUser" placeholder="crie uma senha">

						<label for="email">Seu email</label>
						<input type="email" name="emailUser" id="emailUser" placeholder="informe seu email">	
					</div>
				</div>
				
				<label for="desc" id="lbl-desc">Descrição(opcional)</label>
				<textarea name="desc" id="desc" placeholder="fale um pouco sobre si aqui"></textarea>
				<div class="form-footer flex-row">
					<p>< <a href="" class="a-ativo">2 </a> / 2 ></p>
					<button type="submit" name="btnCad" class="btn">cadastrar</button>
				</div>
			</fieldset>
		</form>
	</section>
	</section>
	<div id="modal-err" class="modal-err">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Erro no formulario</h2>
            <p id="erro">aguardando um texto informativo...</p>
        </div>
    </div>
</body>
</html>