<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AnywayTrack</title>
    
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    <!-- Morris Graficas -->
    {!! Html::style('css/plugins/morris/morris-0.4.3.min.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}
    
</head>

    <body>

<div id="wrapper">
        
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <span class="clear"><span class="block m-t-xs"><strong class="font-bold">AnywayTrack</strong></span></span>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-line-chart"></i><span class="nav-label">Tendencias</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i><span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="re_uso.html">Uso</a></li>
                            <li><a href="re_detalle.html">Detalle de actividades</a></li>
                            <li><a href="re_notificaciones.html">Notificaciones</a></li>
                            <li><a href="re_observador.html">Observador</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gears"></i><span class="nav-label">Configuración</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="company">Compa&ntilde;&iacute;a</a></li>
                            <li><a href="usuarios">Usuarios</a></li>
                            <li><a href="#">Grupos</a></li>
                            <li><a href="#">Categorías</a></li>
                            <li><a href="#">Alarmas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i><span class="nav-label">Mi cuenta</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cloud-download"></i><span class="nav-label">Descargar agente</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li><span class="m-r-sm text-muted welcome-message">Bienvenido al panel de administración de AnywayTrack</span></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i></a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li><div class="dropdown-messages-box"><a href="#">Alarmas</a></div></li>
                                <li class="divider"></li>
                                <li><div class="dropdown-messages-box"><a href="#">Correos</a></div></li>
                                <li class="divider"></li>
                                <li><div class="dropdown-messages-box"><a href="#">Bloqueos</a></div></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-sign-out"></i>Salir</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                @yield('contenido')
            </div>
            <br>
            
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Anyway &copy; 2015
                </div>
            </div>

        </div> <!-- Page wrapper -->

    </div> <!-- Main Wrapper -->

    <!-- Mainly scripts -->
    {!! Html::script('js/jquery-2.1.1.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    <!-- Custom and plugin javascript -->
    {!! Html::script('js/inspinia.js') !!}
    {!! Html::script('js/plugins/pace/pace.min.js') !!}
    <!-- ChartJS -->
    {!! Html::script('js/plugins/chartJs/Chart.min.js') !!}
    </body>
</html>
