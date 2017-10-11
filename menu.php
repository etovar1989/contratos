<?php
    session_start();
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    if (!isset($_SESSION["id_usuario"])) {
        header("Location: index.php");
    }

    $idUsuario = $_SESSION['id_usuario'];

    $sql = "SELECT id, nombre FROM usuarios WHERE id = $idUsuario";

    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_assoc();



?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion de Contratos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="assets/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="assets/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo"><span>CECEP</span>S5AE</a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>

                    <li class="dropdown settings">

                            <form class="navbar-form navbar-left" role="search">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Numero de contrato">
                              </div>
                              <button type="submit" class="btn btn-primari">Enviar</button>
                            </form>

                    </li>
                    
                    <li class="profile-photo">
                        <img src="assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo utf8_decode($row['nombre']); ?></a>
                    </li>
                    
                    <li class="dropdown settings">
                        <a href='logout.php'>Cerrar Sesion</a>
                    </li>

                </ul>
                
            </div>
        </header>

        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                   
                   <?php if($_SESSION['tipo_usuario']==1) { ?>
                            
                                
                            
                        
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Paises</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-crosshairs"></i><span>Ciudades</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>
                        </ul>
                    </li>



                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-suitcase"></i><span>Empresas</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-sitemap"></i><span>Sucursales</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-users"></i><span>Empledos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-building-o"></i><span>Selecciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li>
                    
                       <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-building-o"></i><span>Contratos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="#"><i class="fa fa-clipboard"></i><span>Informes</span></a>
                    </li>

                   <?php } ?>


            <?php if($_SESSION['tipo_usuario']==2) { ?>                            
                        
                    
            <?php } ?>



            <?php if($_SESSION['tipo_usuario']==3) { ?>

            <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-sitemap"></i><span>Sucursales</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-users"></i><span>Empledos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>
                        </ul>
                    </li>                         
   
                    
            <?php } ?>





            <?php if($_SESSION['tipo_usuario']==4) { ?>


                   <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-building-o"></i><span>Contratos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li>                            
                        
                    
            <?php } ?>



            <?php if($_SESSION['tipo_usuario']==5) { ?>                            
                        

                   <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-building-o"></i><span>Selecciones</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="#">Crear</a>
                            </li>
                            <li><a href="#">Actualizar</a>
                            </li>
                            <li><a href="#">Consultar</a>
                            </li>


                        </ul>
                    </li> 
                    
            <?php } ?>


             <?php if($_SESSION['tipo_usuario']==6) { ?>                            
                        

                    
            <?php } ?>








                </ul>
            </div>

        </aside>
        <!--sidebar left end-->

        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">


                <!--Contenido de la pagina-->

                <div class="panel-group hide" id="contenido">
                

                <!--tiles start-->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-red">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"> </h1>
                                <p>Proveedores</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-turquoise">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="56" data-speed="2500"> </h1>
                                <p>Comentrios</p>
                            </div>
                            <div class="icon"><i class="fa fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-purple">
                            <div class="content">
                                <h1 class="text-left timer" data-to="105" data-speed="2500"> </h1>
                                <p>Contratos</p>
                            </div>
                            <div class="icon"><i class="fa fa-bar-chart-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tiles end-->
                <!--dashboard charts and map start-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Cantidad de Contratos 2017</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="sales-chart" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ubicacion</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="map" id="map" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--dashboard charts and map end-->
                <!--ToDo start-->
                <div class="row">
                    <div class="col-md-1">
                       

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-solid-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Clima</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="text-center small-thin uppercase">Dia</h3>
                                        <div class="text-center">
                                            <canvas id="clear-day" width="110" height="110"></canvas>
                                            <h4>62°C</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="text-center small-thin uppercase">Noche</h3>
                                        <div class="text-center">
                                            <canvas id="partly-cloudy-night" width="110" height="110"></canvas>
                                            <h4>44°C</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Lunes</h6>
                                        <div class="text-center">
                                            <canvas id="partly-cloudy-day" width="32" height="32"></canvas>
                                            <span>48°C</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Martes</h6>
                                        <div class="text-center">
                                            <canvas id="rain" width="32" height="32"></canvas>
                                            <span>39°C</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Miercoles</h6>
                                        <div class="text-center">
                                            <canvas id="sleet" width="32" height="32"></canvas>
                                            <span>32°C</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Jueves</h6>
                                        <div class="text-center">
                                            <canvas id="snow" width="32" height="32"></canvas>
                                            <span>28°C</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Viernes</h6>
                                        <div class="text-center">
                                            <canvas id="wind" width="32" height="32"></canvas>
                                            <span>40°C</span>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <h6 class="text-center small-thin uppercase">Sabado</h6>
                                        <div class="text-center">
                                            <canvas id="fog" width="32" height="32"></canvas>
                                            <span>42°C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->

        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="assets/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.example.js"></script>
    <!-- Morris  -->
    <script src="assets/plugins/morris/js/morris.min.js"></script>
    <script src="assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="assets/plugins/todo/js/todos.js"></script>
    <!--Load these page level functions-->
    <script>
        $(document).ready(function() {
            app.timer();
            app.map();
            app.weather();
            app.morrisPie();
        });
    </script>
           <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46627904-1', 'authenticgoods.co');
        ga('send', 'pageview');

</script>

</body>

</html>
