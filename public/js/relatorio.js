$(document).ready(function() {
   var oTable = $('#order_data').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
        },
        dom: 'frtBp',
        buttons: [
            'pdf', 'print'
        ]
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