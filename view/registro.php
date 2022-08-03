<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="css/icono.png">
    
    <link rel="stylesheet" href="../css/style_registro.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/7.0.0/d3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body>
    <h1>
        <div class="container mt-3">

            <h1 class="text-ligth text-center">Vamos A Registrarnos!!!</h1>
            <br>
            <br>
            <br>
            <br>    


            <h3>Introduce Tu Nombre</h3>
            <div class=" mb-3">
                <input type="text" placeholder="Ingresa tu Nombre" id="agregar_nombre">

            </div>
            <h3>Introduce tu Email</h3>
            <div class=" mb-3">
                <input type="email" placeholder="Ingresa tu e-mail" id="email">

            </div>

            <div class="mb-2">

                <h3>Introduce tu Contraseña</h3>
                <input type="password" class="form-control" placeholder="Crea tu Contraseña" id="pwd">
            </div>

            <button class="btn btn-primary" onclick="agregar()">Registrarse</button>


        </div>

    </h1>
    <script src="../setting/js/agregar.js"></script>
</body>

</html>