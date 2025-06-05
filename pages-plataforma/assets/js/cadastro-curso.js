     const modalCriar = document.querySelector(".modalCriar");
     
     document.querySelector(".btnCadastrar").addEventListener("click", function() {
    	modalCriar.style.display = "block";
	});
    
    document.querySelector(".close").addEventListener("click", function() {
    	modalCriar.style.display = "none";
	});