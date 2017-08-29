$(function(){
	var atual_fs, next_fs, prev_fs;

	function next(elem){
		atual_fs = $(elem).parent();
		next_fs = $(elem).parent().next();

		$('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');

		atual_fs.hide(800);
		next_fs.show(800);

	};

	$('.prev').click(function(){
		atual_fs = $(this).parent();
		prev_fs = $(this).parent().prev();

		$('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');

		atual_fs.hide(800);
		prev_fs.show(800);

	});

	$('button[name=next1]').click(function(){

		var nome_paciente 		= $("#nome_paciente").val();
		var data_nasc 			= $("#data-nasc_paciente").val();
		var condicao_moradia 	= $("#condicao-moradia_paciente").val();
		var sexo_paciente		= $("#sexo_paciente").val();
		var perfil_paciente 	= $("#perfil_paciente").val();
		var religiao_paciente 	= $("#religiao_paciente").val();
		var estado_civi			= $("#estado-civi_paciente").val();
		var endereco_paciente	= $("#endereco_paciente").val();
		var numero_casa 		= $("#numero-casa_paciente").val();
		var cep_paciente 		= $("#cep_paciente").val();
		var uf_paciente 		= $("#uf_paciente").val();

		if(nome_paciente == ""){
			$("#nome_paciente").addClass("alert-danger");
		}else{
			$("#nome_paciente").removeClass("alert alert-danger");
		}
		if(data_nasc == ""){
			$("#data-nasc_paciente").addClass("alert-danger");
		}else{
			$("#data-nasc_paciente").removeClass("alert alert-danger");
		}
		if(condicao_moradia == null){
			$("#condicao-moradia_paciente").addClass("alert-danger");
		}else{
			$("#condicao-moradia_paciente").removeClass("alert alert-danger");
		}
		if(sexo_paciente == null){
			$("#sexo_paciente").addClass("alert-danger");
		}else{
			$("#sexo_paciente").removeClass("alert alert-danger");
		}
		if(perfil_paciente == null){
			$("#perfil_paciente").addClass("alert-danger");
		}else{
			$("#perfil_paciente").removeClass("alert alert-danger");
		}
		if(religiao_paciente == null){
			$("#religiao_paciente").addClass("alert-danger");
		}else{
			$("#religiao_paciente").removeClass("alert alert-danger");
		}
		if(estado_civi == null){
			$("#estado-civi_paciente").addClass("alert-danger");
		}else{
			$("#estado-civi_paciente").removeClass("alert alert-danger");
		}
		if(endereco_paciente == ""){
			$("#endereco_paciente").addClass("alert-danger");
		}else{
			$("#endereco_paciente").removeClass("alert alert-danger");
		}
		if(numero_casa == ""){
			$("#numero-casa_paciente").addClass("alert-danger");
		}else{
			$("#numero-casa_paciente").removeClass("alert alert-danger");
		}
		if(cep_paciente == ""){
			$("#cep_paciente").addClass("alert-danger");
		}else{
			$("#cep_paciente").removeClass("alert alert-danger");
		}
		if(uf_paciente == null){
			$("#uf_paciente").addClass("alert-danger");
		}else{
			$("#uf_paciente").removeClass("alert alert-danger");
		}
		
		if(nome_paciente == "" || data_nasc == "" || condicao_moradia == null ||
			sexo_paciente == null || perfil_paciente == null || religiao_paciente == null ||
			estado_civi == null || endereco_paciente == "" || numero_casa == "" ||
			cep_paciente == "" || uf_paciente == null){
				$('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
		}else{
			$('.error-fieldset').html("");
			next($(this));
		}
	});
});