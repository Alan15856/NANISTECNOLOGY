function modificar(id, producto) {
    var datos = new FormData();
    datos.append("id", id)
    datos.append("producto", producto)

    Swal.fire({
        title: 'Atencion! ',
        text: "Desea modificar el producto?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            alert("Producto modificdo correctamente")
            $.ajax({
                url: "../../controller/modificar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atencion! ',
                            text: "El producto " + producto + " ha sido modificado correctamente",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            location.reload();



                        })
                    }

                }
            })



        }
    })
}