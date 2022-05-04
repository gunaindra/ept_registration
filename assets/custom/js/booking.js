jQuery(document ).ready(function() {
    var getUrl = window.location;
		var baseUrl = getUrl .protocol + "//" + getUrl.host;
		if (getUrl.pathname.split('/').length > 2){
			baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		}

    $("body").on("change", "#fakultas", function(){
        var id_fakultas = $("option:selected", this).val();
        
        // var baseUrl = window.location.origin;
        console.log(baseUrl);
        $.ajax({
            method: "POST",
            url: baseUrl+"/api/prodi/getprodi",
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

    $("body").on('submit', '#form_registrasi', function(event) {
        event.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: "POST",
            url: baseUrl+"/api/registration/save",
            data: data,
            success: function(retData){
                if(retData.status == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Changed!',
                        text: 'Update Profile Successful.',
                        showConfirmButton: false,
                        timer: 2000
                    }).then((check) => {
                        if (check) {
                            let timerInterval
                            Swal.fire({
                                title: 'Redirect...',
                                html: 'Wait you will be directed in <b></b> milliseconds.',
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                                }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    window.location.href= baseUrl;
                                }
                            });
                        }
                    });
                }
               else{
                alert(retData.title, retData.message, 'failed');
               }
            },
            cache: false,
      contentType: false,
      processData: false,
			dataType: "json"
        });
        // alert(data);
    })
});