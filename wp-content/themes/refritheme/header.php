<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/icon-r.png" /> 
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_directory');?>/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
    <title><?php bloginfo ('name'); echo " | "; bloginfo ('description');?></title>
    <?php  wp_head(); ?>
  </head>
  <body>  
       
    <section class="section-navbar pl-0"> 
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand pl-lg-5 ml-lg-5" href="#">  <?php the_custom_logo() ;?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <li class="nav-item"> 
                                        <a class="nav-link letter-nav" href="#">Inicio</a>
                                      </li>
                                      <li class="nav-item">
                                            <a class="nav-link letter-nav" href="#">Nosotros</a>
                                      </li>
                                        <li class="nav-item">
                                        <a class="nav-link letter-nav" href="#">Servicio <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle letter-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Productos
                                            </a>
                                            <div class="dropdown-menu border-Bottom" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Aire Acondicionado</a>
                                            <div class="dropdown-divider "></div>
                                            <a class="dropdown-item " href="#">Cristaleria</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link letter-nav" href="#">Repuestos</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link letter-nav" href="#" >Obras</a>
                                            </li>
                                        <li class="nav-item">
                                        <a class="nav-link letter-nav" href="#">Contacto</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link letter-nav" href="#" >Descargas</a>
                                        </li>
                           </ul>
                </div>
              </nav>
    </section>
      