(function($){

	jQuery(document).ready(function(){
	
	jQuery(window).scroll(function(){

		var uporejau = jQuery(window).scrollTop();

		if( uporejau > 50 ){

		jQuery(".amader-designta-sopnopuri").fadeIn();

		}else{
			jQuery(".amader-designta-sopnopuri").fadeOut();
		}


	});

		jQuery(".amader-designta-sopnopuri a").on("click", function(){

			jQuery("html, body").animate({'scrollTop' : 0}, 500);

			return false;

		});

		});

}(jQuery))