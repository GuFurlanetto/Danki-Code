$(function(){
	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			beforeSend:function(){
				console.log("Enviando");
				$('.overlay-loading').fadeIn();
			},
			url:'ajax/Formularios.php',
			method: 'post',
			dataType: 'json',
			data:form.serialize()
		}).done(function(data){
			if (data.sucesso){
				console.log("Enviado");
				$('.overlay-loading').fadeOut();
				$('.sucesso').fadeIn();
				setTimeout(function(){
					$('.sucesso').fadeOut();
				}, 3000)
			}else{
				console.log("Não foi possível enviar o email");
				$('.overlay-loading').fadeOut();
				$('.erro').fadeIn();
				setTimeout(function(){
					$('.erro').fadeOut();
				}, 3000)
			}
		})
		return false;
	})
})