$(function(){
	//Código Java Script
	$('nav.mobile').click(function(){
		// O que vai acontecer quando clickamos na nav mobile
		var listaMenu = $('nav.mobile ul');

		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-bars');
			icone.addClass('fas fa-times'); 
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fas fa-times');
			icone.addClass('fas fa-bars');
			
			listaMenu.slideToggle();
		}
	});

	if($('target').length > 0){
		// O elemento existe, portanto precisamos dar o scroll em algum elemento
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top; 
		$('html, body').animate({'scrollTop':divScroll});
	}


})