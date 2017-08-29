$(document).ready(function(){
	/*Loading*/
	var intervalo = setInterval(function(){
		clearInterval(intervalo);

		$(".loading").css("display", "none");
		$("#corpo").css("display", "block");
	}, 550);
});