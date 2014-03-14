(function(){
	var indice = 0,
		totalLi = $('.carrossel li').length;

	function animateCarrossel(){
		$('.carrossel ul').animate({marginLeft: 320 * -indice}, 'slow');
	}

	$('.arrow-left').click(function(){
		if(indice === 0) indice = totalLi -1;

		indice--;
		animateCarrossel();
	});

	$('.arrow-right').click(function(){
		if(indice === totalLi -2) indice = -1;

		indice++;
		animateCarrossel();
	});

}());