$(function(){
	//Aqui vai todo o codigo do Javascript.
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $('nav.mobile ul');
		
		if(listaMenu.is(':hidden') == true){
			//fa fa-close
			//fa fa-navicon
			var icone = $('.botao-menu-mobile ').find('i');
			icone.removeClass('fa-navicon');
			icone.addClass('fa-close');
			listaMenu.slideToggle();
		}
		else{	
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-close');
			icone.addClass('fa-navicon');
			listaMenu.slideToggle();
		}
	});

		if($('target').length >0){
			//O elemento existe, portanto precisamos dar o scroll em algum elemento.
			//attr = pega o atributo do elemento.
			var elemento = '#'+$('target').attr('target');
			var divScroll = $(elemento).offset().top;
			$('html,body').animate({'scrollTop':divScroll});
		}

})

