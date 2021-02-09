
  function messageEmployee() {
    $("#sendMessage").on("submit", function (e) {
      e.preventDefault();
      var parametros = $(this).serialize();
      $.ajax({
        type: "post",
        url: $(this).attr("action"),
        datatype: "json",
        data: parametros,
        success: function (datos) {
          if (datos == 1) {
            $(location).attr("href", "");
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
    messageEmployee();
  });
  