
var id_user = 0;
var new_name = "";
var new_user = 0;

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

   
    
    $('#btn-pengenalan').click(function() {
        $('#name-form').show();
        $('#anggota-baru-slide').hide();

    });

    $('#save-register').click(function() {
        $('#selamat-bergabung').show();
        
        $('#name-form').hide();
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
        if (pin.length === 6) {
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
        
        if (pin.length === 6) {
            $.ajax({
                url: 'controllers/Login/auth.php',
                method: 'POST',
                data: {pin: pin},
                dataType: 'json',
                success: function(response) {
                    // Handle response from the server
                    if (response.success) {
                        new_user = response.new_user;
                        console.log
                        // Redirect to the dashboard or desired page
                        if(new_user == 1){
                            $('#ok-beres-login').click(function() {
                                $('#login').hide();
                                $('#anggota-baru-slide').show();
                            });
                        
                        } else {
                            console.log(id_user)
                            $('#ok-beres-login').click(function() {
                                $('#login').hide();
                                $('#app-utama').show();
                        
                            });
                        
                        }
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

    $('#btn-ubah-pin-action').click(function() {
        console.log('ok')
        var pin = $('#smscode').val();
        if (pin.length === 6) {
            $.ajax({
                url: 'controllers/Login/changepin.php',
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


     $('#btn-ubah-pin').click(function() {
        // Membuka modal
        $('#DialogUbahPin').modal('show');
        $('#btn-ubah-lain-kali').hide();
        $('#btn-ubah-pin').hide();
      });
    
      $('#batal-ubah-pin').click(function(){
        $('#btn-ubah-lain-kali').show();
        $('#btn-ubah-pin').show();
      });
      // Menutup modal ketika tombol "CLOSE" diklik
      $('.btn-text-secondary').click(function() {
        // Menutup modal
        $('#DialogUbahPin').modal('hide');
      });
    
      // Menutup modal ketika di luar modal diklik
      $(window).click(function(event) {
        if ($(event.target).is('#DialogUbahPin')) {
          // Menutup modal
          $('#DialogUbahPin').modal('hide');
        }
     });
  
   
});
