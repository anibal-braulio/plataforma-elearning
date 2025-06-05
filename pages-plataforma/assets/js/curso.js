	const modal = document.querySelector(".dialog-err");
	var campoErro = document.querySelector("dialog #erro");

	const regexText = /^[A-Za-zÀ-ÿ\s]{3,}$/;
	const regexTextS = /^[A-Za-z0-9\s]+$/;
	const regexNormal = /^[aA-Zz\s]+$/;
	const regexEscola = /^[\w]$/;
	const regexTelefone =/^[0-9]{9}$/;
	const regexEmail = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
	const regexSenha = /^[^\s]+$/;

	document.querySelector("dialog button").addEventListener("click",function(){
		modal.close();
	})
	
	mkForm.addEventListener("submit",function(e){
		e.preventDefault();
		if(titulo.value === ""){
			campoErro.innerText = "insira um titulo mais explicativo para o curso valido";
			modal.showModal();
			titulo.classList.add("erro-campo");
			return;
		}
		if(estado.value == "selecione"){
			campoErro.innerText = "insira o estado do seu curso!";
			modal.showModal();
			estado.classList.add("erro-campo");
			return;
		}
		if(nivel.value == "selecione"){
			campoErro.innerText = "insira o nivel de acesso do seu curso!";
			modal.showModal();
			nivel.classList.add("erro-campo");
			return;
		}

		if(descricao.value <= 3 || regexNormal.test(descricao.value)){
			campoErro.innerText = "insira uma descrição boa para o seu curso!";
			modal.showModal();
			descricao.classList.add("erro-campo");
			return;
		}
		if(autor.value === "selecione"){
			campoErro.innerText = "informe o autor(es) do curso!";
			modal.showModal();
			document.querySelector("label[for='autor']").classList.add("erro-campo");
			return;
		}
		//mkForm.submit();
		alert("eviado");
	});