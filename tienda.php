<?php

session_start();
include "php/conection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tienda.css">
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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">



        <a class="navbar-brand" href="#" style="color:DodgerBlue;">Ñañis Technology</a>



        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Usuario
                            <?php echo $_SESSION['nombre'];?></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <?php echo $_SESSION['nombre'];?></a></li>
                            <li><a class="dropdown-item" href="#" class="btn btn-primary" onclick="cerrar()">Cerrar
                                    secion</a></li>

                            <li>

                        </ul>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="home #section1">INICIO</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tienda">TIENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart"> CARRITO</a>
                    </li>




                </ul>
            </div>
    </nav>
    <br><br>
    <br><br>
    <div class="container sombra">


        <h1>Productos</h1>

        <br><br>
        <div class="grid">


            <?php $products = $con->query("select * from product"); ?>
            <?php while($r=$products->fetch_object()):?>

            <div class="product-box">

                <div class="product">
                    <img src="<?php echo $r->imagen;?>" alt="imgcamisa">
                    <div class="detail-title"><?php echo $r->name;?></div>
                    <br>
                    <br>
                    <!--<div class="detail-description">Ideal para la Carnita Asada </div>-->
                    <div class="detail-price">$<?php echo $r->price; ?></div>



                    <p><?php $found = false;
            if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}} ?>
                        <?php if($found):?>
                    <div class="carrito">
                        <a href="cart.php" class="btn btn-info">Ver En Carrito</a>
                    </div>

                    <?php else:?>
                    <form class="form-inline" method="post" action="../php/addtocart.php">
                        <input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
                        <div class="form-group">
                            <input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control"
                                placeholder="Cantidad">
                        </div>

                        <button type="submit" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-shopping-cart-plus" width="28" height="28"
                                viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="6" cy="19" r="2" />
                                <circle cx="17" cy="19" r="2" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l6.005 .429m7.138 6.573l-.143 .998h-13" />
                                <path d="M15 6h6m-3 -3v6" />
                            </svg><br>Agregar</button>
                    </form>
                    <?php endif; ?>
                    </p>
                </div>


            </div>
            <?php endwhile; ?>
        </div>
    </div>

</body>

</html>