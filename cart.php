<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/car.css">
    

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
	<br>
	<br>
	<br>
	<br>
	<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Carrito</h1>
                <a href="tienda" class="btn btn-default">Productos</a>
                <br><br>
                <?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from product");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
                <table class="table table-bordered">
                    <thead>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                        <th></th>
                    </thead>
                    <?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from product where id=$c[product_id]");
$r = $products->fetch_object();
	?>
                    <tr>
                        <th><?php echo $c["q"];?></th>
                        <td><?php echo $r->name;?></td>
                        <td>$ <?php echo $r->price; ?></td>
                        <td>$ <?php echo $c["q"]*$r->price; ?></td>
                        <td style="width:260px;">
                            <?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}
	?>
                            <a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>

                <form class="form-horizontal" method="post" action="./php/process.php">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email del cliente</label>
                        <div class="col-sm-5">
                            <input type="email" name="email" required class="form-control" id="inputEmail3"
                                placeholder="Email del cliente">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Procesar Venta</button>
                        </div>
                    </div>
                </form>


                <?php else:?>
                <p class="alert alert-warning">El carrito esta vacio.</p>
                <?php endif;?>
                <br><br>
                <hr>
                <p>Powered by <a href="http://evilnapsis.com/" target="_blank">Evilnapsis</a></p>

            </div>
        </div>
    </div>
</body>

</html>