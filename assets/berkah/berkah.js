$(document).ready(function() {
    console.log('OK')
    $('#DialogIconedDanger').modal('show');
    
    // jquery klik button mulai
    $('#btnMulai').click(function() {
        $('#splash-screen').hide();
        $('#login').show();
    });

    $('#btn-back-login').click(function() {
        console.log("asdasd")
        $('#splash-screen').show();
        $('#login').hide();
    });

    $('#ok-beres-login').click(function() {
        $('#login').hide();
        $('#app-utama').show();

    });
    
    $('#scan-button').click(function() {
        console.log('masuk')
        $('#dialogCameraOrFiles').show();

    });

    $('#using-kamera').click(function() {
        // Mengklik input file saat tombol "using-kamera" diklik
        $('#upload-kamera').click();
    });

    $('#using-files').click(function() {
        // Mengklik input file saat tombol "using-file" diklik
        $('#upload-files').click();
    });


    // Jquery Verifikasi
    $('#verifikasiBtn').click(function() {
        
        
        var pin = $('#smscode').val();
        if (pin.length === 4) {
            $.ajax({
                url: 'controllers/Login/auth.php',
                method: 'POST',
                data: {pin: pin},
                dataType: 'json',
                success: function(response) {
                    // Handle response from the server
                    if (response.success) {
                        // Redirect to the dashboard or desired page
                        $('#modalSuccess').modal('show');
                        $('#login').hidden();
                    } else {
                        // Show error message or handle the error
                        $('#modalError').modal('show');
                        console.log("error");
                    }
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function() {
                    $('#modalError').modal('show');
                }
            });
        } else {
            $('#modalInfo').modal('show');
        }
    });

    // jquery verifikasi input
    $('#smscode').on('input', function() {
        var pin = $(this).val();
        var maxAttempts = 3;
        
        if (pin.length === 4) {
            $.ajax({
                url: 'controllers/Login/auth.php',
                method: 'POST',
                data: {pin: pin},
                dataType: 'json',
                success: function(response) {
                    // Handle response from the server
                    if (response.success) {
                        // Redirect to the dashboard or desired page
                        $('#modalSuccess').modal('show');
                    } else {
                        // Show error message or handle the error
                        $('#smscode').val('');
                        $('#modalError').modal('show');
                        console.log("error");
                    }
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function() {
                    $('#modalError').modal('show');
                }
            });
        } else {
            // Reset modal and loader if the input length is less than 6
            $('#modalSuccess').modal('hide');
            $('#modalError').modal('hide');
            $('#loader').hide();
        }
    });

    $('#scan-button').click(function() {
        // Membuka modal
        $('#DialogBlockButton').modal('show');
      });
    
      // Menutup modal ketika tombol "CLOSE" diklik
      $('.btn-text-secondary').click(function() {
        // Menutup modal
        $('#DialogBlockButton').modal('hide');
      });
    
      // Menutup modal ketika di luar modal diklik
      $(window).click(function(event) {
        if ($(event.target).is('#DialogBlockButton')) {
          // Menutup modal
          $('#DialogBlockButton').modal('hide');
        }
      });
  
   
});
