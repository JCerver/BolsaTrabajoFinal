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
    						
    						<li><a href=#>Candidatos</a></li>
                            <li><a href=#>Empresas</a></li>
                            <li><a href=#>Salarios</a></li>
                            <li><a href=#>Cursos</a></li>
    					</ul>
    					<ul class="nav navbar-nav navbar-right">
    					
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioAdmin"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="a.html">Mi perfil de administrador</a></li>
                                     <li><a href="a.html">Editar curriculum</a></li>
                                    <li><a href="a.html">Configuraci&oacute;n</a></li>
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