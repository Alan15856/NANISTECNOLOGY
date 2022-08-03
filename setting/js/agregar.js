function agregar() {
    var nombre = document.getElementById('agregar_nombre').value;
    var email = document.getElementById('email').value;
    var contrasena = document.getElementById('pwd').value;
    var datos = new FormData();
    datos.append("nombre", nombre)
    datos.append("email", email)
    datos.append("contrasena", contrasena)

    Swal.fire({
        title: 'Atencion! ',
        text: "Desea agregar el usuario " + email,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            alert("Usuario Agregado")
            $.ajax({
                url: "../../controller/agregar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atencion! ',
                            text: "El usuario " + email + " ha sido añadido correctamente ",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            window.location.replace("login");





                        })
                    }

                }
            })



        }
    })
}