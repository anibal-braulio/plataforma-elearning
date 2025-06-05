$(function(){
	var ctn_cadastro = document.querySelector(".ctn-cadastro");
	var ctn_login = document.querySelector(".ctn-login");
	var modalErr = document.querySelector('.modal-err');
	const campoErro = document.querySelector('.modal-err #erro');
	const regexText = /^[A-Za-zÀ-ÿ\s]{3,}$/;
	const regexTextS = /^[A-Za-z0-9\s]+$/;
	const regexEscola = /^[\w]$/;
	const regexTelefone =/^[0-9]{9}$/;
	const regexEmail = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
	const regexSenha = /^[^\s]+$/;
	var tipoUser;

	//modal.showModal();
	document.querySelector(".close").addEventListener("click", function() {
    	modalErr.style.display = "none";
	});
	$("modal-err button").click(function(e){
		modalErr.style.display = "none";
	});
	$(".call-cadastro").click(function(){
		ctn_login.remove();
		ctn_cadastro.classList.remove("oculto");
	});

	$(".btnNext").click(function(event){
		event.preventDefault();
		if(!regexText.test(nome.value)){
			campoErro.textContent = "informe um nome valido com inicial maiuscula";
			modalErr.style.display = "block";
			nome.classList.add("erro-campo");
			return;
		}
		if(morada.value === "" || morada.value.length < 3){
			campoErro.textContent = "informe um morada valido";
			modalErr.style.display = "block";
			enedereco.classList.add("erro-campo");
			return;
		}
		if(!regexTelefone.test(telefone.value)){
			campoErro.textContent = "informe um numero de telefone valido";
			modalErr.style.display = "block";
			telefone.classList.add("erro-campo");
			return;
		}
		if(dia.value == "dia" || mes.value == "mês" || ano.value == "ano"){
			campoErro.textContent = "informe uma data valida";
			modalErr.style.display = "block";
			return;
		}
		if(!document.querySelector("input[name='genero']:checked")){
			campoErro.textContent  = "informe se é um homem ou mulher";
			modalErr.style.display = "block";
			document.querySelector(".genero").style.background = "red";
			return;
		}
		if(tipoConta.value == "selecione"){
			campoErro.textContent  = "informe que tipo de cont será";
			modalErr.style.display = "block";
			document.querySelector(".tipo").style.background = "red";
			return;
		}
		if(!regexText.test(escolaridade.value)){
			campoErro.textContent = "informe uma escolaridade valida";
			modalErr.style.display = "block";
			escolaridade.classList.add("erro-campo");
			return;
		}
		document.querySelector(".box-cadastro-um").classList.add("oculto");
		document.querySelector(".box-user").classList.remove("oculto");
	});

	document.querySelector(".form-cadastro").addEventListener('submit',function(event){
		event.preventDefault();
		if(nomeUser.value === "" || nomeUser.length < 3){
			campoErro.textContent  = "informe um nome e usuario valido 'anibal69'";
			modalErr.style.display = "block";
			nomeUser.classList.add("erro-campo");
			return;
		}
		if(!regexSenha.test(senhaUser.value)){
			campoErro.textContent = "informe uma senha valida 'senha1234'";
			modalErr.style.display = "block";
			senhaUser.classList.add("erro-campo");
		}
		if(!regexEmail.test(emailUser.value)){
			campoErro.textContent  = "informe um nome e email valido";
			modalErr.style.display = "block";
			emailUser.classList.add("erro-campo");
			return;
		}
		
		console.log("tipo de usuario: "+tipoConta);
		console.log("nome: "+nome.value);
		console.log("morada: "+morada.value);
		console.log("telefone: "+telefone.value);
		console.log("data: "+dia.value+" / "+mes.value+" / "+ano.value);
		console.log("genero: "+document.querySelector("input[name='genero']:checked").value);
		console.log("escolaridade: "+escolaridade.value);
		console.log("nome de usuario: "+nomeUser.value);
		console.log("senha de usuario: "+senhaUser.value);
		console.log("email: "+emailUser.value);
		console.log("desc: "+desc.value);
		alert("Seus dados foram obtidos!");
		document.querySelector(".form-cadastro").submit();
	});

	formLogin.addEventListener("submit",function(e){
		e.preventDefault();
		if(emailLogin.value === "" || !regexEmail.test(emailLogin.value)){
			campoErro.textContent = "informe um email valido 'exemple@gmail.com'";
			modalErr.style.display = "block";
			emailLogin.classList.add('erro-campo');
			return;
		}else{
			emailLogin.classList.remove('erro-campo');
		}

		if((!regexSenha.test(senhaLogin.value)) || senhaLogin.value === ""){
			campoErro.textContent = "informe uma senha valida: senha1234";
			modalErr.style.display = "block";
			senhaLogin.classList.add('erro-campo');
			return;
		}else{
			senhaLogin.classList.remove('erro-campo');
		}
		formLogin.submit();
	});


	
});