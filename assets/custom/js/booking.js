jQuery(document ).ready(function() {
    $("body").on('click', '.register', function(){
       var id_event = $(this).val();
       var baseUrl = window.location.origin;
       $("#view_page").load(baseUrl+"/booking/booking/register/"+id_event), function(){

       } 
    })
});