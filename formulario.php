<?php
include 'global/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TETL</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Juan Perez</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/1.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experiencia</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Habilidades</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#trabajos">Trabajos</a></li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h2 class="mb-0">
                    
                    Ingresa los datos para ponernos en contacto contigo y ofrecerte una cotizacion <span class="text-primary">Gratis</span>

                </h2>
                <div class="subheading mb-5">
                    Direccion
                    <a href="mailto:name@email.com">correo@email.com</a>
                </div>
            </div>

    </div>
    </section>
    <section class="resume-section" id="interests" ">
    <div class="resume-section-content" style="width: 100%;">
    <h2 class="mb-5">Contacto</h2><br>
    <h3>Si desea obtener mayor informacion y cotizacion sobre algun proyecto
                contactenos sin ningun costo y nosotros le hacemos un presupuesto  </h3>
    </div>
        <div class="resume-section-content" style="border-style: solid; width: 50%;">
        <div>
           
                <form method="POST" enctype="multipart/form-data">
                <h4>Nombre</h4>
                <input type="text" name="nombre">
                <h4>Correo</h4>
                <input type="text" name="correo">
                <h4>Numero de telefono</h4>
                <input type="text" name="numero">
                <div class="float-right">
                <h4>Fotografia</h4>
                <input type="file" name="imagen">
                </div>
                
                </div>
</div>
                <div>
                <input type="submit" name="guardar" class="btn btn-info" value="Enviar" style="position: absolute; right: auto; width: 100px;">
                </div>
                </form>
                      <?php
                      include "enviar.php";
                      ?>
      
        
    </section>

    <section class="resume-section" id="interests" style="background-color:cadetblue;">
        <div class="resume-section-content">
            <h2 class="mb-5">Contacto</h2>
            <p style="color: black;" class="mb-0">Chabacano 51, San Juan Xalpa, Iztapalapa, 09850 Ciudad de México,
                CDMX. <br>
                Telefono: 5532372673 <br>
                Correo: correo@gmail.com<br>
            </p>
            <h3>Si desea obtener mayor informacion y cotizacion sobre algun proyecto
                contactenos sin ningun costo y nosotros le hacemos un presupuesto</h3>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>