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
	});

	$("#perfil").click(function(){
		var x = $("#perfil").val();

		if(x == "Tecnico" || x == "Superior"){
			$("#course-display").css("display", "block");
		}else{
			$("#course-display").css("display", "none");
			$("#nome_curso").val("");
			$("#semestre_curso").val("");
			$("#periodo_curso").val("");
			$("#moradia_estudantil").val("");

			$("#nome_curso").removeClass("alert alert-danger");
			$("#semestre_curso").removeClass("alert alert-danger");
			$("#periodo_curso").removeClass("alert alert-danger");
			$("#moradia_estudantil").removeClass("alert alert-danger");
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
			$("#nome").addClass("alert-danger");
		}else{
			$("#nome").removeClass("alert alert-danger");
		}
		if(data_nasc == ""){
			$("#data_nasc").addClass("alert-danger");
		}else{
			$("#data_nasc").removeClass("alert alert-danger");
		}
		if(condicao_moradia == null || condicao_moradia == ""){
			$("#condicao_moradia").addClass("alert-danger");
		}else{
			$("#condicao_moradia").removeClass("alert alert-danger");
		}
		if(sexo_paciente == null || sexo_paciente == ""){
			$("#sexo").addClass("alert-danger");
		}else{
			$("#sexo").removeClass("alert alert-danger");
		}
		if(perfil_paciente == null || perfil_paciente == ""){
			$("#perfil").addClass("alert-danger");
		}else{
			$("#perfil").removeClass("alert alert-danger");
		}
		if(religiao_paciente == null || religiao_paciente == ""){
			$("#religiao").addClass("alert-danger");
		}else{
			$("#religiao").removeClass("alert alert-danger");
		}
		if(estado_civil == null || estado_civil == ""){
			$("#estado_civil").addClass("alert-danger");
		}else{
			$("#estado_civil").removeClass("alert alert-danger");
		}
		if(endereco_paciente == ""){
			$("#endereco").addClass("alert-danger");
		}else{
			$("#endereco").removeClass("alert alert-danger");
		}
		if(numero_casa == ""){
			$("#numero_casa").addClass("alert-danger");
		}else{
			$("#numero_casa").removeClass("alert alert-danger");
		}
		if(cep_paciente == ""){
			$("#cep").addClass("alert-danger");
		}else{
			$("#cep").removeClass("alert alert-danger");
		}
		if(uf_paciente == null || uf_paciente == ""){
			$("#uf").addClass("alert-danger");
		}else{
			$("#uf").removeClass("alert alert-danger");
		}

		if(perfil_paciente == "Tecnico" || perfil_paciente == "Superior"){
			if(nome_curso == ""){
				$("#nome_curso").addClass("alert-danger");
			}else{
				$("#nome_curso").removeClass("alert alert-danger");
			}

			if(semestre_curso == ""){
				$("#semestre_curso").addClass("alert-danger");
			}else{
				$("#semestre_curso").removeClass("alert alert-danger");
			}

			if(periodo_curso == null || periodo_curso == ""){
				$("#periodo_curso").addClass("alert-danger");
			}else{
				$("#periodo_curso").removeClass("alert alert-danger");
			}

			if(moradia_estudantil == null || moradia_estudantil == ""){
				$("#moradia_estudantil").addClass("alert-danger");
			}else{
				$("#moradia_estudantil").removeClass("alert alert-danger");
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
			if(perfil_paciente == "Tecnico" || perfil_paciente == "Superior"){
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
			$("#nome_resp_one").addClass("alert-danger");
		}else{
			$("#nome_resp_one").removeClass("alert alert-danger");
		}
		if(parentesco_resp_one == ""){
			$("#parentesco_resp_one").addClass("alert-danger");
		}else{
			$("#parentesco_resp_one").removeClass("alert alert-danger");
		}
		if(cel_resp_one == ""){
			$("#cel_resp_one").addClass("alert-danger");
		}else{
			$("#cel_resp_one").removeClass("alert alert-danger");
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
		next($(this));
	});
});