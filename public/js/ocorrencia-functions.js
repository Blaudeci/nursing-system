$(function(){

	var atual_fs, next_fs, prev_fs;
	//Fomulario Ocorrência - Avançar
	function next(elem){
		atual_fs = $(elem).parent();
		next_fs = $(elem).parent().next();

		$('#progress li').eq($('fieldset').index(next_fs)).addClass('active');

 		atual_fs.hide(800);
		next_fs.show(800);
	};
	
	//Fomulario Ocorrência - Voltar
	$('.prev').click(function(){
		atual_fs = $(this).parent();
		prev_fs = $(this).parent().prev();

		$('#progress li').eq($('fieldset').index(atual_fs)).removeClass('active');

		atual_fs.hide(800);
		prev_fs.show(800);

		$('.error-fieldset').html("");
	});

	$('button[name=next1]').click(function(){
		next($(this));
	});

	$('button[name=next2]').click(function(){
		
		var tipo_queixa 	= $("#tipo_queixa").val();
		var motivo_consulta = $("#motivo_consulta").val();
		
		if(tipo_queixa == "" || tipo_queixa == null){
			$("#tipo_queixa").addClass("inputError");
			$("label[for=tipo_queixa]").addClass("labelError");
		}else{
			$("#tipo_queixa").removeClass("inputError");
			$("label[for=tipo_queixa]").removeClass("labelError");
		}
		
		if(motivo_consulta == "" || motivo_consulta == null){
			$("#motivo_consulta").addClass("inputError");
			$("label[for=motivo_consulta]").addClass("labelError");
		}else{
			$("#motivo_consulta").removeClass("inputError");
			$("label[for=motivo_consulta]").removeClass("labelError");
		}
		
		if(tipo_queixa == "" || motivo_consulta == ""){
			$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			next($(this));
		}
	});

	$('button[name=next3]').click(function(){

		var peso 	= $("#peso").val();
		var altura 	= $("#altura").val();

		if(peso == ""){
			$("#peso").addClass("inputError");
			$("label[for=peso]").addClass("labelError");
		}else{
			$("#peso").removeClass("inputError");
			$("label[for=peso]").removeClass("labelError");
		}

		if(altura == ""){
			$("#altura").addClass("inputError");
			$("label[for=altura]").addClass("labelError");
		}else{
			$("#altura").addClass("inputError");
			$("label[for=altura]").addClass("labelError");
		}

		if(peso == "" || altura == ""){
			$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			next($(this));
		}
	});

	$(".btn-register__ocorrencia").click(function(event){

		var tipo_queixa 		= $("#tipo_queixa").val();
		var anotacao_enfermagem = $("#anotacao_enfermagem").val();

		if(tipo_queixa == ""){
			$("#tipo_queixa").addClass("inputError");
			$("label[for=tipo_queixa]").addClass("labelError");
		}else{
			$("#tipo_queixa").addClass("inputError");
			$("label[for=tipo_queixa]").addClass("labelError");
		}

		if(anotacao_enfermagem == ""){
			$("#anotacao_enfermagem").addClass("inputError");
			$("label[for=anotacao_enfermagem]").addClass("labelError");
		}else{
			$("#anotacao_enfermagem").addClass("inputError");
			$("label[for=anotacao_enfermagem]").addClass("labelError");
		}

		if(tipo_queixa == "" || anotacao_enfermagem == ""){
			$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			return true;
		}

		event.preventDefault();
	});
});