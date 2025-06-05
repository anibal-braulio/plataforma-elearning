$(function(){
	const formLogin = document.querySelector('#formLogin');
	const dialog = document.querySelector('dialog');
	const campoErro = document.querySelector('dialog #erro');
	const btnClose = document.querySelector('dialog button');
	const regexText = /^[A-Za-zÀ-ÿ\s]{3,}$/;
	const regexTextS = /^[A-Za-z0-9\s]+[-,ªº]*$/;
	const regexEscola = /^[\w]$/;
	const regexTelefone =/^[0-9]{9}$/;
	const regexEmail = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
	const regexSenha = /^[^\s]+$/;
	
	//eventos
	$('dialog button').click(function(){
		dialog.close();
	});

	//validação do login
	formLogin.addEventListener("submit",function(e){
		e.preventDefault();
		if(emailLogin.value === "" || !regexEmail.test(emailLogin.value)){
			campoErro.textContent = "informe um email valido 'exemple@gmail.com'";
			dialog.showModal();
			emailLogin.classList.add('erro-campo');
			return;
		}else{
			emailLogin.classList.remove('erro-campo');
		}

		if((!regexSenha.test(senhaLogin.value)) || senhaLogin.value === ""){
			campoErro.textContent = "informe uma senha valida: senha1234";
			dialog.showModal();
			senhaLogin.classList.add('erro-campo');
			return;
		}else{
			senhaLogin.classList.remove('erro-campo');
		}
		formLogin.submit();
	});


	//validação cadastro
	formCad.addEventListener("submit",function(e){
		e.preventDefault();
		if(!regexText.test(nome.value.trim())){
			campoErro.textContent = "informe um nome valido com inicial maiscula";
			dialog.showModal();
			nome.classList.add('erro-campo');
			return;
		}else{
			nome.classList.remove('erro-campo');
		}
		if(!regexEmail.test(email.value.trim())){
			campoErro.textContent = "informe um email valido 'exemple@gmail.com'";
			dialog.showModal();
			email.classList.add('erro-campo');
			return;
		}else{
			email.classList.remove('erro-campo');
		}
		if(senha.value === "" || !regexSenha.test(senha.value)){
			campoErro.textContent = "informe um senha valida: senha1234";
			dialog.showModal();
			senha.classList.add('erro-campo');
			return;
		}else{
			senha.classList.remove('erro-campo');
		}
		if(!regexText.test(profissao.value.trim())){
			campoErro.textContent = "informe uma descrição valida sem caracteres especiais(#,^,&,{},...)";
			dialog.showModal();
			profissao.classList.add('erro-campo');
			return;
		}else{
			profissao.classList.remove('erro-campo');
		}
		if(!regexTextS.test(morada.value.trim())){
			campoErro.textContent = "informe uma morada valida com no minimo 100 caracteres";
			dialog.showModal();
			morada.classList.add('erro-campo');
			return;
		}else{
			morada.classList.remove('erro-campo');
		}
		if(!regexTextS.test(escolaridade.value.trim())){
			campoErro.textContent = "informe uma escolaridade valida: XXºª";
			dialog.showModal();
			escolaridade.classList.add('erro-campo');
			return;
		}else{
			escolaridade.classList.remove('erro-campo');
		}
		if(!regexTelefone.test(telefone.value.trim())){
			campoErro.textContent = "informe um número de telefone valido sem simbolos estranhos e com apenas 9 digitos";
			dialog.showModal();
			telefone.classList.add('erro-campo');
			return;
		}else{
			telefone.classList.remove('erro-campo');
		}
		if(!regexTextS.test(obs.value.trim())){
			campoErro.textContent = "informe uma observação valida";
			dialog.showModal();
			obs.classList.add('erro-campo');
			return;
		}else{
			obs.classList.remove('erro-campo');
		}
	});
		
	//funcoes 
	function validarInputs(...inputs){
		inputs.forEach(input =>{
			if(input.value.trim() === ""){
				campoErro.textContent = "você não terminou de preencher os campos";
				dialog.showModal();
				input.classList.add('erro-campo');
				input.focus();
			}else{
				input.classList.remove('erro-campo');
			}
		});
	}
	/**function validarIp(input, input2){
		tempSeletor = input.id;
		if(input.value === "" || input2.value === ""){
			campoErro.textContent = "você não terminou de preencher os campos"
			dialog.showModal();
			input.classList.add('erro-campo');
			return;
		}
	}*/
});