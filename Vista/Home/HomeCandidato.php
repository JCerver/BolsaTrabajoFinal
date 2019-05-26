<?php 
    include ("../../Modelo/GestorVacanteBD.php");
   // include ("../../Modelo/ConexionBD.php");
    
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
                            <li><a href="../Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="a.html">Mi perfil de candidato</a></li>
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


    <div class="container-fluid">

          <div class="row">

            <div class="col-md-2">

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Filtros</h2>
  </div>
  <div class="panel-body">
   <p><span class="glyphicon glyphicon-log-in"></span>  Palabra clave</p>
   <input type="text" name="txtNombreEmpresa" class="form-control" placeholder="Ej:Desarrollador">
   <br>


   <div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-home"></span> Por Empresas</h2>
  </div>
  <div class="panel-body">

  </div>


</div>




<br>


   <div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-briefcase"></span> Por Categoria</h2>
  </div>
  <div class="panel-body">

  </div>


</div>

<br>


   <div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-usd"></span> Por Salario</h2>
  </div>
  <div class="panel-body">
    
  </div>


</div>

  </div>
  <div class="panel-footer">  <button type="button" class="btn btn-danger">Filtrar</button></div>


</div>


             </div>   

             <div class="col-md-8">

        <?php 
         $resultado= getAllVacantes();
        //$row=$resultado->fetch_assoc();

          while ($row=$resultado->fetch_assoc()) {
         ?>
       

             <div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo "{$row["vac_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
   <p><?php echo "{$row["emp_nombre"]}"." - "."{$row["emp_ciudad"]}"; ?> </p> 
    <p><b><i>Requisitos:</i></b> <?php echo "{$row["vac_requisitos"]}"; ?> </p>
     <p><b><i>Descripci&oacute;n:</i></b> <?php echo "{$row["vac_descripcion"]}"; ?> </p>

      <form action="../informacionVacante.php" method="POST">
      <input type="hidden" name="idVacante" value="<?php echo "{$row["id_vacante"]}"; ?>">
     <button type="submit" class="btn btn-primary">M&aacute;s informaci&oacute;n</button>
     </form>
     
  </div>
  <div class="panel-footer"> <?php echo "{$row["vac_fechaPublicado"]}"; ?> </div>


</div>


<?php  }
         ?>

        </div>

          <div class="col-md-2">

             </div>  

        </div>
        

    </div>





    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
