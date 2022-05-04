jQuery(document ).ready(function() {
    $("body").on('click', '.register', function(){
       var id_event = $(this).val();
       var baseUrl = window.location.origin;
       $("#view_page").load(baseUrl+"/booking/booking/register/"+id_event), function(){

       } 
    })

    $("body").on("change", "#fakultas", function(){
        var id_fakultas = $("option:selected", this).val();
        console.log(id_fakultas);
        var baseUrl = window.location.origin;
        $.ajax({
            method: "POST",
            url: baseUrl+"/booking/api/prodi/getprodi",
            data: {'id_fakultas': id_fakultas},
            success: function(retData) {
                $("#prodi").children('option:not(:first)').remove();
                // console.log(retData.length);
                $.each(retData.prodi, function(key, value){
                    $('#prodi').append($("<option></option>").attr("value",value.id_prodi).text(value.nama_prodi));
                });
            }
    
        })
    });
});