$(function(){

	var atual_fs, next_fs, prev_fs;
	//Fomulario Paciente - Avançar
	function next(elem){
		atual_fs = $(elem).parent();
		next_fs = $(elem).parent().next();

		$('#progress li').eq($('fieldset').index(next_fs)).addClass('active');

		atual_fs.hide(800);
		next_fs.show(800);
	};
	
	//Fomulario Paciente - Voltar
	$('.prev').click(function(){
		atual_fs = $(this).parent();
		prev_fs = $(this).parent().prev();

		$('#progress li').eq($('fieldset').index(atual_fs)).removeClass('active');

		atual_fs.hide(800);
		prev_fs.show(800);

		$('.error-fieldset').html("");
	});

	$("#perfil").change(function () { 
    	var x = $("#perfil").val();

		if(x == "Técnico" || x == "Superior"){
			$("#course-display").css("display", "block");
		}else{
			$("#course-display").css("display", "none");
			$("#nome_curso").val("");
			$("#semestre_curso").val("");
			$("#periodo_curso").val("");
			$("#moradia_estudantil").val("");

			$("label[for=nome_curso]").removeClass("labelError");
			$("#nome_curso").removeClass("inputError");
			$("label[for=semestre_curso]").removeClass("labelError");
			$("#semestre_curso").removeClass("inputError");
			$("label[for=periodo_curso]").removeClass("labelError");
			$("#periodo_curso").removeClass("inputError");
			$("label[for=moradia_estudantil]").removeClass("labelError");
			$("#moradia_estudantil").removeClass("inputError");
		}
   	});

	$("#perfil").click(function(){
		var x = $("#perfil").val();

		if(x == "Técnico" || x == "Superior"){
			$("#course-display").css("display", "block");
		}else{
			$("#course-display").css("display", "none");
			$("#nome_curso").val("");
			$("#semestre_curso").val("");
			$("#periodo_curso").val("");
			$("#moradia_estudantil").val("");

			$("label[for=nome_curso]").removeClass("labelError");
			$("#nome_curso").removeClass("inputError");
			$("label[for=semestre_curso]").removeClass("labelError");
			$("#semestre_curso").removeClass("inputError");
			$("label[for=periodo_curso]").removeClass("labelError");
			$("#periodo_curso").removeClass("inputError");
			$("label[for=moradia_estudantil]").removeClass("labelError");
			$("#moradia_estudantil").removeClass("inputError");
		}
	});

	//Form Dados Pessoais - Validation
	$('button[name=next1]').click(function(){

		var nome_paciente 		= $("#nome").val();
		var data_nasc 			= $("#data_nasc").val();
		var condicao_moradia 	= $("#condicao_moradia").val();
		var sexo_paciente		= $("#sexo").val();
		var perfil_paciente 	= $("#perfil").val();
		var religiao_paciente 	= $("#religiao").val();
		var estado_civil		= $("#estado_civil").val();
		var endereco_paciente	= $("#endereco").val();
		var numero_casa 		= $("#numero_casa").val();
		var cep_paciente 		= $("#cep").val();
		var uf_paciente 		= $("#uf").val();
		var nome_curso			= $("#nome_curso").val();
		var semestre_curso      = $("#semestre_curso").val();
		var periodo_curso       = $("#periodo_curso").val();
		var moradia_estudantil  = $("#moradia_estudantil").val();

		if(nome_paciente == ""){
			$("#nome").addClass("inputError");
			$("label[for=nome]").addClass("labelError");
		}else{
			$("#nome").removeClass("inputError");
			$("label[for=nome]").removeClass("labelError");
		}
		if(data_nasc == ""){
			$("#data_nasc").addClass("inputError");
			$("label[for=data_nasc]").addClass("labelError");
		}else{
			$("#data_nasc").removeClass("inputError");
			$("label[for=data_nasc]").removeClass("labelError");
		}
		if(condicao_moradia == null || condicao_moradia == ""){
			$("#condicao_moradia").addClass("inputError");
			$("label[for=condicao_moradia]").addClass("labelError");
		}else{
			$("#condicao_moradia").removeClass("inputError");
			$("label[for=condicao_moradia]").removeClass("labelError");
		}
		if(sexo_paciente == null || sexo_paciente == ""){
			$("#sexo").addClass("inputError");
			$("label[for=sexo]").addClass("labelError");
		}else{
			$("#sexo").removeClass("inputError");
			$("label[for=sexo]").removeClass("labelError");
		}
		if(perfil_paciente == null || perfil_paciente == ""){
			$("#perfil").addClass("inputError");
			$("label[for=perfil]").addClass("labelError");
		}else{
			$("#perfil").removeClass("inputError");
			$("label[for=perfil]").removeClass("labelError");
		}
		if(religiao_paciente == null || religiao_paciente == ""){
			$("#religiao").addClass("inputError");
			$("label[for=religiao]").addClass("labelError");
		}else{
			$("#religiao").removeClass("inputError");
			$("label[for=religiao]").removeClass("labelError");
		}
		if(estado_civil == null || estado_civil == ""){
			$("#estado_civil").addClass("inputError");
			$("label[for=estado_civil]").addClass("labelError");
		}else{
			$("#estado_civil").removeClass("inputError");
			$("label[for=estado_civil]").removeClass("labelError");
		}
		if(endereco_paciente == ""){
			$("#endereco").addClass("inputError");
			$("label[for=endereco]").addClass("labelError");
		}else{
			$("#endereco").removeClass("inputError");
			$("label[for=endereco]").removeClass("labelError");
		}
		if(numero_casa == ""){
			$("#numero_casa").addClass("inputError");
			$("label[for=numero_casa]").addClass("labelError");
		}else{
			$("#numero_casa").removeClass("inputError");
			$("label[for=numero_casa]").removeClass("labelError");
		}
		if(cep_paciente == ""){
			$("#cep").addClass("inputError");
			$("label[for=cep]").addClass("labelError");
		}else{
			$("#cep").removeClass("inputError");
			$("label[for=cep]").removeClass("labelError");
		}
		if(uf_paciente == null || uf_paciente == ""){
			$("#uf").addClass("inputError");
			$("label[for=uf]").addClass("labelError");
		}else{
			$("#uf").removeClass("inputError");
			$("label[for=uf]").removeClass("labelError");
		}
		if(perfil_paciente == "Técnico" || perfil_paciente == "Superior"){
			if(nome_curso == ""){
				$("#nome_curso").addClass("inputError");
				$("label[for=nome_curso]").addClass("labelError");
			}else{
				$("#nome_curso").removeClass("inputError");
				$("label[for=nome_curso]").removeClass("labelError");
			}
			if(semestre_curso == ""){
				$("#semestre_curso").addClass("inputError");
				$("label[for=semestre_curso]").addClass("labelError");
			}else{
				$("#semestre_curso").removeClass("inputError");
				$("label[for=semestre_curso]").removeClass("labelError");
			}
			if(periodo_curso == null || periodo_curso == ""){
				$("#periodo_curso").addClass("inputError");
				$("label[for=periodo_curso]").addClass("labelError");
			}else{
				$("#periodo_curso").removeClass("inputError");
				$("label[for=periodo_curso]").removeClass("labelError");
			}
			if(moradia_estudantil == null || moradia_estudantil == ""){
				$("#moradia_estudantil").addClass("inputError");
				$("label[for=moradia_estudantil]").addClass("labelError");
			}else{
				$("#moradia_estudantil").removeClass("inputError");
				$("label[for=moradia_estudantil]").removeClass("labelError");
			}
		}

		if(nome_paciente == "" || data_nasc == "" || condicao_moradia == null || 
			condicao_moradia == "" || sexo_paciente == null || sexo_paciente == "" ||
			perfil_paciente == null || perfil_paciente == "" || religiao_paciente == null ||
			religiao_paciente == "" || estado_civil == null || estado_civil == "" || 
			endereco_paciente == "" || numero_casa == "" || cep_paciente == "" || 
			uf_paciente == null || uf_paciente == ""){
				$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			if(perfil_paciente == "Técnico" || perfil_paciente == "Superior"){
				if(nome_curso == "" || semestre_curso == "" || periodo_curso == null ||
				periodo_curso == "" || moradia_estudantil == null || moradia_estudantil == ""){
					$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
				}else{
					$('.error-fieldset').html("");
					next($(this));
				}
			}else{
				$('.error-fieldset').html("");
				next($(this));
			}
		}
	});

	//Form Contato
	$('button[name=next2]').click(function(){

		var nome_resp_one = $("#nome_resp_one").val();
		var parentesco_resp_one = $("#parentesco_resp_one").val();
		var cel_resp_one = $("#cel_resp_one").val();

		if(nome_resp_one == ""){
			$("#nome_resp_one").addClass("inputError");
			$("label[for=nome_resp_one]").addClass("labelError");
		}else{
			$("#nome_resp_one").removeClass("inputError");
			$("label[for=nome_resp_one]").removeClass("labelError");
		}
		if(parentesco_resp_one == ""){
			$("#parentesco_resp_one").addClass("inputError");
			$("label[for=parentesco_resp_one]").addClass("labelError");
		}else{
			$("#parentesco_resp_one").removeClass("inputError");
			$("label[for=parentesco_resp_one]").removeClass("labelError");
		}
		if(cel_resp_one == ""){
			$("#cel_resp_one").addClass("inputError");
			$("label[for=cel_resp_one]").addClass("labelError");
		}else{
			$("#cel_resp_one").removeClass("inputError");
			$("label[for=cel_resp_one]").removeClass("labelError");
		}

		if(nome_resp_one == "" || parentesco_resp_one == "" || cel_resp_one == ""){
			$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			next($(this));
		}
	});

	//Form Eventos Fisiologicos
	$('button[name=next3]').click(function(){
		next($(this));
	});

	//Form História Mórbida Pregressa
	$('button[name=next4]').click(function(){

		var sono_repouso 		= $("#sono_repouso").val();
		var atividade_fisica	= $("#atividade_fisica").val();

		if(sono_repouso == "Alterado"){
			$("#horas-sono__display").css("display", "block");
		}else{
			$("#horas-sono__display").css("display", "none");
		}

		if(atividade_fisica == "Sim"){
			$("#qtde-atividade-fisica__display").css("display", "block");
		}else{
			$("#qtde-atividade-fisica__display").css("display", "none");
		}

		next($(this));
	});

	//Form Habitos
	$('button[type=submit]').click(function(event){

		var sono_repouso 			= $("#sono_repouso").val();
		var horas_sono				= $("#horas_sono").val();
		var atividade_fisica		= $("#atividade_fisica").val();
		var qtde_atividade_fisica 	= $("#qtde_atividade_fisica").val();
		
		if(sono_repouso == "Alterado"){
			if(horas_sono == ""){
				$("#horas_sono").addClass("inputError");
				$("label[for=horas_sono]").addClass("labelError");
			}	
		}else{
			$("#horas_sono").removeClass("inputError");
			$("label[for=horas_sono]").removeClass("labelError");
		}

		if(atividade_fisica == "Sim"){
			if(qtde_atividade_fisica == ""){
				$("#qtde_atividade_fisica").addClass("inputError");
				$("label[for=qtde_atividade_fisica]").addClass("labelError");
			}
		}else{
			$("#qtde_atividade_fisica").removeClass("inputError");
			$("label[for=qtde_atividade_fisica]").removeClass("labelError");
		}

		if(sono_repouso == "Alterado" && horas_sono == "" || atividade_fisica == "Sim" && qtde_atividade_fisica == ""){
			$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			return true;
		}

		event.preventDefault();
	});

	$("#sono_repouso").change(function () { 
    	var x = $("#sono_repouso").val();

		if(x == "Alterado" ){
			$("#horas-sono__display").css("display", "block");
		}else{
			$("#qtde_atividade_fisica").val("");
			$("#horas-sono__display").css("display", "none");
			$("#horas_sono").removeClass("inputError");
			$("label[for=horas_sono]").removeClass("labelError");
		}
   	});

	$("#sono_repouso").click(function () { 
    	var x = $("#sono_repouso").val();

		if(x == "Alterado" ){
			$("#horas-sono__display").css("display", "block");
		}else{
			$("#horas_sono").val("");
			$("#horas-sono__display").css("display", "none");
			$("#horas_sono").removeClass("inputError");
			$("label[for=horas_sono]").removeClass("labelError");
		}
   	});

   	$("#atividade_fisica").change(function () { 
    	var x = $("#atividade_fisica").val();

		if(x == "Sim" ){
			$("#qtde-atividade-fisica__display").css("display", "block");

		}else{
			$("#qtde_atividade_fisica").val("");
			$("#qtde-atividade-fisica__display").css("display", "none");
			$("#qtde_atividade_fisica").removeClass("inputError");
			$("label[for=qtde_atividade_fisica]").removeClass("labelError");
		}
   	});

	$("#atividade_fisica").click(function () { 
    	var x = $("#atividade_fisica").val();

		if(x == "Sim" ){
			$("#qtde-atividade-fisica__display").css("display", "block");

		}else{
			$("#qtde_atividade_fisica").val("");
			$("#qtde-atividade-fisica__display").css("display", "none");
			$("#qtde_atividade_fisica").removeClass("inputError");
			$("label[for=qtde_atividade_fisica]").removeClass("labelError");
		}
   	});
});