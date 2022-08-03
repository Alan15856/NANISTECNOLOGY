function enviar_correo() {
    var correo = document.getElementById('correo').value;

    $.ajax({
        url: "../../model/enviar_correo.php",
        type: "POST",
        data: "correo=" + correo,
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            if (respuesta.status == "1") {
                alert("correo enviado exitosamente")
            } else {
                alert("error al enviar correo electrónico")
            }

        }
    });
}