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

		loadDinamic();
		function loadDinamic(){
			$('[realtime]').click(function(){
				var page = $(this).attr('realtime');
				$('.container-principal').hide();
				$('.container-principal').load(include_path+'pages/'+pagina+'.php');

				setTimeout(function(){
					initialize();
					addMarker(-23.5274,-46.3467,'',"Teste",undefined,false);
					moveMyMap(-23.5274,-46.3467);
				},1000);

				
				$('.container-principal').fadeIn(1000);

				return false;
			})
		}
})

