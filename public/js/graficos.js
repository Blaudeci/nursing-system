$(function(){
    $('#search').click(function(){
        var st_date = $('#start_date').val();
            var start_date = ;
            
            var en_date = $('#end_date').val();
           // var end_date = en_date[9]+en_date[8]+en_date[7]+en_date[6]+en_date[4]+en_date[3]+en_date[1]+en_date[0];

        alert(start_date);
      //  alert(end_date);


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
            $(".graficos").css("visibility", "hidden");
        }else{
            if(start_date > end_date){
                $('.error-fieldset').html('<div class="alert alert-danger"><p>A Data Inicial não pode ser maior que a Data Final!</p></div>');
                $("#start_date").addClass("inputError");
                $("label[for=start_date]").addClass("labelError");
                $("#end_date").addClass("inputError");
                $("label[for=end_date]").addClass("labelError");
                $(".graficos").css("visibility", "hidden");
            }else{
                $('.error-fieldset').html('');
                $("#start_date").removeClass("inputError");
                $("label[for=start_date]").removeClass("labelError");
                $("#end_date").removeClass("inputError");
                $("label[for=end_date]").removeClass("labelError");
                $(".graficos").css("visibility", "visible");
            }
        }
    });
});