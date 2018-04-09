(function($){
	
	$(window).on('scroll', function(){
		var altura = $(".pagina2").find(".top-background-image").find("img").height();
		
		if ( $(window).scrollTop() > altura ){
			$(".pagina2").find('.navbar-fixed-top').addClass('scrollTop');
			$(".pagina2").find('.navbar-fixed-top').css("background-image", "url('" + $(".pagina2").find(".top-background-image").find("img").attr("src") + "')");
			
		} else {
			$(".pagina2").find('.navbar-fixed-top').removeClass('scrollTop');
			$(".pagina2").find('.navbar-fixed-top').css("background-image", "");
		}
	});
 
})(jQuery);