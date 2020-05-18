$(function() {// o $ é uma keyword especifica do jquery utilizado tanto para funções quanto para seleção de elementos HTML
	//Aqui vei todo codigo javascript.
	$('nav.mobile').click(function() {
		var listaMenu = $('nav.mobile ul');

		/*if (listaMenu.is(':hidden') == true)
			listaMenu.fadeIn();
		else
			listaMenu.fadeOut();*/

		//listaMenu.slideToggle();

		if (listaMenu.is(':hidden') == true) {
			var icone = $('.botao-menu-mobile i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		} else {
			var icone = $('.botao-menu-mobile i');
			icone.addClass('fa-bars');
			icone.removeClass('fa-times');
			listaMenu.slideToggle();
		}
	})
	alert("Página carregada!");

	if ($("target").length > 0) {
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html, body').animate({
			"scrollTop": divScroll
		})
	}

	carregarDinamico();
	function carregarDinamico() {
		$('[realtime]').click(function() {
			var pagina = $(this).attr('realtime');

			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php');
			
			setTimeout(function() {
				initialize();
				addMarker(-27.609959, -48.576585, '', "Minha Casa", undefined, false);	
			}, 1000);

			$('.container-principal').fadeIn(1000);

			return false
		})
	}
})