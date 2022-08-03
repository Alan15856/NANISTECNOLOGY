<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <body>
        ba
unogrk</body>


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preload" href="css/inicio.css" as="style">
        <link rel="stylesheet" href="css/inicio.css">


        <title>Ñañis Technology</title>
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

        <!-- <body style=background:linear-gradient(90deg,rgba(2,0,36,1)0%,rgba(86,9,121,1)100%,rgba(0,212,255,1)100%)>-->
    </body>

    <div class="icono">
        <div class="moneda">
        </div>
    </div>

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
                        <a class="nav-link" href="#section1">INICIO</a>

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


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <!--<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>-->
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">


            <div class="carousel-item active">
                <img src="http://ofertaseninternet.net/wp-content/uploads/2019/10/officemax-oferta-laptops-hp-y-lenovo-1024x391.jpg"
                    alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://media.pasionmovil.com/2017/07/ofertas-tablets-laptops-geebuying.jpg" alt="Chicago"
                    class="d-block" style="width:100%">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item">
                <img src="equipos2.png" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <br>
    <div class="container">
        <span class="text1">Bienvenido</span>
        <span class="text2">Nos da gusto de tenerte aqui</span>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container1">
        <h1>Variedades que tenemos para ti!</h1>
        <div class="container">
            <div class="card-deck mt-3">
                <div class="card" style="width: 18rem;">
                    <center><img style="max-height: 200px; max-width: 200px;"
                            src="https://www.cyberpuerta.mx/img/product/M/CP-SAMSUNG-LU32J590UQLXZX-1.jpg"
                            class="card-img-top" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">Monitores</h5>
                        <p class="card-text"></p>

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <center><img style="max-height: 200px; max-width: 295px;"
                            src="https://www.cyberpuerta.mx/img/product/M/CP-GAMEFACTOR-KBG400-RD-1.jpg"
                            class="card-img-top" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">Teclados</h5>
                        <p class="card-text"></p>

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <center><img style="max-height: 200px; max-width: 150px;"
                            src="https://www.cyberpuerta.mx/img/product/M/CP-XPG-AX4U32008G16A-ST60-1.jpg"
                            class="card-img-top" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">Ram</h5>
                        <p class="card-text"></p>

                    </div>
                </div>

            </div>





        </div>
    </div>

    <section class="knowledge">
        <div class="knowledge__container container">
            <div class="knowledege__texts">
                <br>
                <br>
                <h2 class="subtitle">No nos detenemos ante nada</h2>
                <p class="knowledge__paragraph">Hay más en nuestra tecnología de lo que se ve a simple vista. Tenemos
                    belleza y tenemos ideas, pero no nos detuvimos allí. No nos detenemos ante nada para que usted
                    pueda
                    lograr de todo.
                </p>

            </div>
        </div>
    </section>

    <img class="mediana"
        src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/macbook-air-gallery3-20201110?wid=4000&hei=3072&fmt=jpeg&qlt=90&.v=1632937845000">
    <br>

  

    <div class="card bg-dark text-white">
        <img src="https://img.freepik.com/vector-gratis/grafico-tierra-3d-que-simboliza-ilustracion-comercio-mundial_456031-125.jpg?t=st=1658621783~exp=1658622383~hmac=040998284eb8d29053e3bd1497852d8f37d0653a8bb85be9d6c2f0d315b4811f&w=826"
            class="card-img" alt="...">
        <div class="card-img-overlay">
            <h5 class="card-title" style="text-align:center">Servicios</h5>
            <p class="card-text" style="text-align:center">Acelere el viaje digital con los servicios modernizados
                Nuestros técnicos expertos y las opciones de autoservicio ofrecen todas sus necesidades de hardware y
                software desde el hogar hasta el trabajo, los centros de datos de TI y la nube.</p>


            <div class="container-card">
                <div class="card-deck mt-3">
                    <div class="card-primera" style="width: 18rem;">
                        <img src="https://www.dell.com/content/dam/web-resources/cross-project/images/backgrounds/services-for-home-blue.svg"
                            class="card-img-top" alt="...">
                        <div class="card-bodyprimera">
                            <h1>Servicios para el Hogar</h1>
                            <p class="card-text">Aproveche al máximo su PC con orientación especializada, monitoreo
                                proactivo de problemas y reparaciones rápidas durante todo el ciclo de vida.</p>
                        </div>
                    </div>

                    <div class="card-segunda" style="width: 18rem;">
                        <img src="https://www.dell.com/content/dam/web-resources/cross-project/images/backgrounds/small-business-services-blue.svg"
                            class="card-img-top" alt="...">
                        <div class="card-bodysegunda">
                            <h1>Pequeñas Empresas</h1>
                            <p class="card-text">No tratamos a las pequeñas empresas como si fueran pequeñas. Construya
                                más y mejor con nuestros servicios integrales y monitoreo de rendimiento.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3 style="text-align:center">Ofertas Exclusivas solo para ti</h3>
    <img class="pequeña" src="https://i.dell.com/sites/csimages/Premier_Imagery/all/BannerSMB1W12.png">


    <div class="container">
        <div class="card-deck mt-3">

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/71gav-YLl-L._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Laptop Azus</h5>
                    <p class="card-text">Vivobook Laptop de 15.6 pulgadas - Intel 10ª generación i3 - Memoria de 8 GB - SSD de 256 GB - Intel UHD - Ventana 10 - Nuevo Asus X515</p>
                    
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51atwYOZToL.__AC_SX300_SY300_QL70_ML2_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Laptop HP</h5>
                    <p class="card-text">Stream 14-cb174wm brilliant black 14", Intel Celeron N4000 4GB de RAM 64GB SSD, Intel UHD Graphics 600 1366x768px Windows 10 Home.</p>
                    
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/81WnGXJXIIL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">HP All-in-One</h5>
                    <p class="card-text">Intel Celeron J4025 4GB RAM 1TB DD.</p>
                   
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51qzbB7Pg4L.__AC_SX300_SY300_QL70_ML2_.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Computadora Lenovo</h5>
                    <p class="card-text">All In One Ideacentre 3 24ARE05 AMD Ryzen 3 23.8'' 1TB HDD 8GB RAM Negro.</p>
                   
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="card-deck mt-3">

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/41q9Z+NJAUL._AC_SY300_SX300_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Computadora All in One Hp </h5>
                    <p class="card-text">Resolución 1920 * 1080, Relación de Aspecto 16:9.  
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/71a7JRudFjL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Huawei Display</h5>
                    <p class="card-text">
Resolución 1920 * 1080, Relación de aspecto, color negro.

</p>
                   
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/61GpY38PAWL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Memoria RAM PATRIOT VIPER</h5>
                    <p class="card-text">Memoria ram ddr4 16gb 4000mhz patriot viper rgb 2x8gb pvr416g400c9k patriot pvr416g400c9k</p>
                   
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/513abyXG5wL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Memoria RAM PATRIOT</h5>
                    <p class="card-text">Memoria Ram ddr4 16gb 4133mhz patriot viper steel 2x8gb pvs416g413c9k patriot pvs416g413c9k</p>
                   
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="card-deck mt-3">

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/81WAMJjNzRL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Disco Duro Adata SSD</h5>
                    <p class="card-text">Disco duro sólido Adata 512 GB Serial ATA III Ultimate SU800 512GB</p>
                  
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/61NlYF7r7kL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Disco Duro Adata</h5>
                    <p class="card-text">Discos duros SSD y almacenamiento Solido Su800 256gb 2.5 Ssd Sata Laptop Pc</p>
                  
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/81gjltwz-qL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">All In One</h5>
                    <p class="card-text">Computadora All In One Hp 205 G3 A4 9125 4gb 1tb Radeon R5 HP 8PB56LT#ABM</p>
                  
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://m.media-amazon.com/images/I/519vr6bsNhL._AC_SX522_.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Disco Duro Portatil Edition</h5>
                    <p class="card-text">Disco Duro Portátil Seagate Game Drive de 2TB Edición Especial Seagate STEA2000431</p>
                    
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="piepagina">

        <p style="text-align:center">Todos los Derechos Reservados. Ñañis Technology&reg; de S.A. de C.V. </p>

    </footer>


    <script src="setting/js/eliminar.js"></script>
    <script src="setting/js/cerrar_sesion.js"></script>
    <script src="setting/js/modificar.js"></script>
    <script src="setting/js/enviar_correo.js"></script>
    <script src="setting/js/carrito.js"></script>

    <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () - > {
            navigator.serviceWorker.register('service-worker.js').then((reg) - > {
                console.log("Service worker registered", reg);
            })
        })
    }
    </script>
</body>

</html>