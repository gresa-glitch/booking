$(document).ready(function(){
    $('#bookingForm').on('submit', function (e) {
        e.preventDefault();
        let name = $('#name').val().trim();
        let phone = $('#phone').val().trim();
        let datebooking = $('#datebooking').val();
        let package = $('#package').val();

        if(name === '' || phone === '' || datebooking === '' || package === ''){
            $('#pesan').html('<p style="color:red;">Semua field wajib diisi.</p>');
          return;
        }

        $.ajax({
            url: 'bookingnow.php',
            contentType: "application/json; charset=utf-8",
             dataType: "json",
            type: 'POST',
            data:{
                name: name,
                phone: phone,
                datebooking: datebooking,
                package: package
            },
            success: function (res) {
                let response = JSON.parse(res);
                if(response.status === 'success'){
                   $('#pesan').html('<p style="color:green;">' + response.message + '</p>');
              $('#bookingForm')[0].reset(); 
                }else{
                    $('#pesan').html('<p style="color:red;">' + response.message + '</p>');
                }
            },
            error: function () {
                 $('#pesan').html('<p style="color:red;">Terjadi kesalahan pada server.</p>');
            }
        })
    })
});