$(document).ready(function(){
	$('.button-icons-menu').click(function(){
        $('.side-nav').css('display', 'block');
        $('.button-icons-menu').css('display', 'none');
        $('.button-icons-close').css('display', 'block');
    });

    $('.button-icons-close').click(function(){
    	$('.button-icons-close').css('display', 'none');
    	$('.button-icons-menu').css('display', 'block');
    	$('.side-nav').css('display', 'none');
    });
});