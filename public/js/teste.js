/*
    */

    //$('#start_date').datepicker("setDate", new Date());


	/**/

    //$('#end_date').datepicker("setDate", new Date());



    /* $('#search').click(function(){

        var start_date = $('#start_date').val();
        var end_date   = $('#end_date').val();

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

        if(start_date == "" || end_date == ""){
            $('.error-fieldset').html('<div class="alert alert-danger"><p>Preencha todos os campos que são obrigatórios, para prosseguir!</p></div>');
        }else{
            
                $('.error-fieldset').html('');
                $("#start_date").removeClass("inputError");
                $("label[for=start_date]").removeClass("labelError");
                $("#end_date").removeClass("inputError");
                $("label[for=end_date]").removeClass("labelError");

                window.location='/relatorio/ocorrencia/'+ start_date;
        }
    });*/