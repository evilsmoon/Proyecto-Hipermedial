function registerEmployee() {
    $('#registerformEmployee').on('submit', function (e) {
        e.preventDefault();

        var respuesta = $(this).serialize();
        console.log(respuesta)
        $.ajax({
            type:"post",
            url:$(this).attr('action'),
            atatype: "json",
            data:respuesta,
            success: function (datos) {
                console.log(datos)
                if (datos == 1) {
                    $(location).attr('href','Login');
                } else {
                    msj = "Nick o contraseña erroneos";
                    $("#errorLogin").removeAttr("hidden").html(msj);
                    setTimeout(function () {
                      $("#errorLogin").attr("hidden", true);
                    }, 4000);
                }
                
            },
        });

    });
}

function registerClient() {
    $('#registerformClient').on('submit', function (e) {
        e.preventDefault();
        var respuesta = $(this).serialize();
        console.log(respuesta)
        $.ajax({
            type:"post",
            url:$(this).attr('action'),
            atatype: "json",
            data:respuesta,
            success: function (datos) {
                console.log(datos)
                if (datos == 1) {
                    $(location).attr('href','Login');
                } else {
                    msj = "Nick o contraseña erroneos";
                    $("#errorLogin").removeAttr("hidden").html(msj);
                    setTimeout(function () {
                      $("#errorLogin").attr("hidden", true);
                    }, 4000);
                }
                
            },
        });

    });
}

$(document).ready(function () {
    registerEmployee();
    registerClient();
  });
  
