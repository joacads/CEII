	$(document).ready(function(){
		chequeaScroll();
	});

	$(window).scroll(function() {
		chequeaScroll();
	});

	function chequeaScroll() {
		var winTop = $(window).scrollTop();  //qu[e punto de window est[a arriba de todo
		var winHeight = $(window).height();
		$(".slideanim").each(function(){
			var pos = $(this).offset().top;
			//(winTop + winHeight - pos) es cu[anto m[as arriba est[a el elemento del borde inferior
			if (winTop + winHeight - pos > 20) {
				$(this).addClass("slide-h");
			}
		});
	}