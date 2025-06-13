	var ctn_login = document.querySelector(".ctn-login");
	var modalErr = document.querySelector('.modal-err');
	const campoErro = document.querySelector('.modal-err #erro');

	document.querySelector('.close').addEventListener("click",function(){
		modalErr.style.display = "none";
	});
	
  	document.querySelector('#videos').addEventListener('change', function () {
    const files = this.files;

    if (files.length != 0) {
      const spanVid = document.querySelector(".upload-videos span");
		spanVid.textContent = "Vídeos adicionados";
		spanVid.style.color = "#4caf50";
      return;
    }if(files.length === 0){
		spanVid.textContent = "Adicionar Vídeos";
		spanVid.style.border = "1px solid #4caf50";
		return;
	}

    let apenasVideos = true;

    for (let i = 0; i < files.length; i++) {
      if (!files[i].type.startsWith('video/')) {
        apenasVideos = false;
        break;
      }
    }

    if (apenasVideos) {
      alert('Todos os arquivos são vídeos!');
    } else {
      alert('Alguns arquivos selecionados não são vídeos!');
    }
  });
	const regexText = /^[A-Za-zÀ-ÿ\s]{3,}$/;
	const regexTextS = /^[A-Za-z0-9\s]+$/;
	const regexNormal = /^[aA-Zz\s]+$/;
	const regexEscola = /^[\w]$/;
	const regexTelefone =/^[0-9]{9}$/;
	const regexEmail = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
	const regexSenha = /^[^\s]+$/;

	mkForm.addEventListener("submit",function(e){
		e.preventDefault();
		if(titulo.value === ""){
			campoErro.textContent = "insira um titulo mais explicativo para o curso valido";
			modalErr.style.display = "block";
			titulo.classList.add("erro-campo");
			return;
		}
		if(videos.length === 0){
			campoErro.textContent = "selecione os videos do curso";
			modalErr.style.display = "block";
			return;
		}
		if(estado.value == "selecione"){
			campoErro.textContent = "insira o estado do seu curso!";
			modalErr.style.display = "block";
			estado.classList.add("erro-campo");
			return;
		}
		if(nivel.value == "selecione"){
			campoErro.textContent = "insira o nivel de acesso do seu curso!";
			modalErr.style.display = "block";
			nivel.classList.add("erro-campo");
			return;
		}

		if(descricao.value <= 3 || regexNormal.test(descricao.value)){
			campoErro.textContent = "insira uma descrição boa para o seu curso!";
			modalErr.style.display = "block";
			descricao.classList.add("erro-campo");
			return;
		}
		if(autor.value === "selecione"){
			campoErro.textContent = "informe o autor(es) do curso!";
			modalErr.style.display = "block";
			document.querySelector("label[for='autor']").classList.add("erro-campo");
			return;
		}
		mkForm.submit();
		
	});