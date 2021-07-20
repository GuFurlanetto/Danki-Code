$(function() {
	var atual = -1;
	var maximo = $('.box-especialidades').length - 1;
	var animacaoDelay = 1.5;
	var timer;

	executarAnimação();
	function executarAnimação(){
		$('.box-especialidades').hide();
		timer = setInterval(logicaAnimacao, animacaoDelay * 1000);
		
		function logicaAnimacao(){
			atual++ ;
			if(atual > maximo){
				clearInterval(timer);
				return false;
			}

			$('.box-especialidades').eq(atual).fadeIn(1000);
		}		
	} 
})