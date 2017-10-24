$(function(){
    $('#button-print__one').click(function(event){
        event.preventDefault();
    });

     $("#search").click(function(event){

		var start_date 		= $("#start_date").val();
		var end_date 		= $("#end_date").val();

		if(start_date == ""){
			$("#start_date").addClass("inputError");
			$("label[for=start_date]").addClass("labelError");
		}else{
			$("#start_date").removeClass("inputError");
			$("label[for=start_date]").removeClass("labelError");
		}
		
		if(end_date == ""){
			$("#end_date").addClass("inputError");
			$("label[for=end_date]").addClass("labelError");
		}else{
			$("#end_date").removeClass("inputError");
			$("label[for=end_date]").removeClass("labelError");
		}

		if(start_date != "" && end_date != ""){
			return true;
		}

		event.preventDefault();
	});
});