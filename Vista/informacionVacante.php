
<?php 
    include ("../Modelo/GestorVacanteBD.php");


$idVacante = $_POST['idVacante'];
$resultado= getVacantePorID($idVacante);


$row=$resultado->fetch_assoc();

 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/EstiloHome.css" rel="stylesheet">

            
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
                            <li><a href="Cursos.php">Cursos</a></li>
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
                                    <li><a href="../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>


       

             <div class="col-md-8"  >

       

             <div class="panel panel-Info">
  <div class="panel-heading">
   <h2 class="panel-title"><?php echo "{$row["vac_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
  <p><b><i>Puesto:</i></b> <?php echo "{$row["vac_nombre"]}"; ?> </p><br>
  <p><b><i>Horario:</i></b> <?php echo "{$row["vac_horario"]}"; ?> </p><br>
    <p><b><i>Requisitos:</i></b> <?php echo "{$row["vac_requisitos"]}"; ?> </p><br>
     <p><b><i>Descripción:</i></b> <?php echo "{$row["vac_descripcion"]}"; ?> </p><br>
     <p><b><i>Salario: $ </i></b> <?php echo "{$row["vac_salario"]}"; ?> </p><br>

     <button type="button" class="btn btn-primary">Postularme</button>
  </div>
  <div class="panel-footer"> Fecha de publicación: <?php echo "{$row["vac_fechaPublicado"]}"; ?> </div>


</div>



        </div>
        

    <div class="container-fluid">

          <div class="row">

            <div class="col-md-4">

<div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Informaci&oacute;n de la empresa</h2>
  </div>
  <div class="panel-body">
  
 <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-briefcase"></span> Nombre de la empresa</h2>
  </div>
  <div class="panel-body">
          <?php echo "{$row["emp_nombre"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-map-marker"></span> Direcci&oacute;n</h2>
  </div>
  <div class="panel-body">
            <?php echo "{$row["emp_direccion"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-record"></span> Giro</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_giroEmpresarial"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Descripción</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_descripcion"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-earphone"></span> Teléfono</h2>
  </div>
  <div class="panel-body">
     <?php echo "{$row["emp_telefono"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-envelope"></span> E-mail</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_email"]}"; ?>
  </div>


</div>

  </div>
    <div class="panel-footer">  <button type="button" class="btn btn-primary">Postularme</button></div>


    </div>

</div>





    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


