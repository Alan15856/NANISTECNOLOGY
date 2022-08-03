<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widtloginnitial-scale=1">
    <link rel="stylesheet" href="css/style_login.css" />
    <title>ÑAÑIS TECHNOLOGY</title>
    <link rel="icon" href="css/icono.png">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/7.0.0/d3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    
    <br>
    <br>
  
    


    </div>

    <div class="container">
        <form action="return false" onsubmit="return false">
            <div class="form-group">

                <label for="email">Correo Electronico:</label>
                <br>
                <input type="email" class="form-control" placeholder="Ingresa Correo" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <br>
                <input type="password" class="form-control" placeholder="Ingresa Contraseña" id="pwd">
            </div>
            <button type="submit" onclick="login()" class="btn btn-primary">Ingresar</button>

            <button type="submit" onclick="location.href='registro'"
                class="btn btn-primary">Registrate</button>
        </form>
    </div>

    <script src="../setting/js/login.js"></script>

</body>

</html>