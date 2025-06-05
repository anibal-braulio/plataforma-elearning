$(function(){
	const parametros = new URLSearchParams(window.location.search);
	let resultado = {};

	parametros.forEach((valor, chave) =>{
	resultado[chave] = valor;
	console.log(resultado);

		if (resultado[chave] == "cadastro"){
			$('.container-login').fadeOut();
			$('.main-container').css({background: '#183059', display:'block'});
			$('.container-cad').fadeIn().css({display: 'flex'});
		}else{
			$('.main-container').css({background: '#fffb42', display:'block'});
		}
	});

	$('#toogle-log').click(function(){
		$('.container-login').fadeOut();
		$('.main-container').css('background','#183059');
		$('.container-cad').fadeIn().css({display: 'flex'});
	});

	$('#toogle-cad').click(function(){
		$('.container-cad').fadeOut();
		$('.main-container').css('background','#fffb42');
		$('.container-login').fadeIn().css('display','flex');
	});
});