$(document).ready(function(){
	$('.toggleInfo').click(function(){
		// $('.hideme').toggle();
		$(this).children('li').slideToggle('slow');
		 $('html, body').animate({
	      scrollTop: $(this).offset().top + $('window').height()
	    }, 1000);
	});

});