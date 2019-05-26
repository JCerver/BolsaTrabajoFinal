<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../../css/bootstrap.min.css" rel="stylesheet">
          <link href="../../css/EstiloHome.css" rel="stylesheet">

            
</head>
<body>

   <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            

                            <li class="dropdown">
                                <a href="·" class="dropdown-toggle" data-toggle="dropdown" role="button"> Ofertas de trabajo <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="../registroVacante.php"><span class=" glyphicon glyphicon-plus"></span> Agregar un nueva vacante</a></li>
                                     <li><a href="#"><span class="glyphicon glyphicon-inbox"></span> Vacantes publicadas</a></li>
                                     <li class="divider"></li>
                                     <li><a href="../consultaVacantes.php"><span class="glyphicon glyphicon-cog"></span>  Administraci&oacute;n de vacantes</a></li>

                                 </ul>
                             </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Cursos <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="../registroCurso.php"><span class=" glyphicon glyphicon-plus"></span> Agregar un nuevo curso</a></li>
                                     <li><a href="#"><span class="glyphicon glyphicon-inbox"></span> Cursos publicados</a></li>
                                     <li class="divider"></li>
                                     <li><a href="../consultaCursos.php"><span class="glyphicon glyphicon-cog"></span>  Administraci&oacute;n de cursos</a></li>

                                 </ul>
                             </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioEmp"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="#">Mi perfil de empresa</a></li>
                                     <li><a href="#">Editar informaci&oacute;n</a></li>
                                    <li><a href="#">Configuraci&oacute;n</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div> 
                </div>
            </nav>
        </header>

    </div>



    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
