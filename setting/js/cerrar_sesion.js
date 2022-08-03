function cerrar() {

    Swal.fire({
        title: 'Atencion!!',
        text: 'deseas cerrar sesion?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controller/cerrar_sesion.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: "ok=" + "ok",
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        window.location.replace("login")

                    }

                }
            })

        }
    })

}