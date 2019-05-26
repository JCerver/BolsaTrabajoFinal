<?php
include("../../Modelo/GestorCandidatoBD.php");

    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["email"];
    $username=$_POST["uname"];
    $pass=$_POST["psw"];
    $usr_tipo='Candidato';
    $est_curriculum='0';

    $resultado = addCandidato($nombre,$apellidos,$telefono,$correo,$username,$pass,$usr_tipo,$est_curriculum);

    if ($resultado) {
        //echo "insertado correctamente";
        header("location:../../index.php");
    }else{
        echo "Ocurrio un error";
    }
	
	
	if(isset($_POST['btnModificar'])){
        //echo "Se oprimio el boton";
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["email"];
        $username=$_POST["uname"];

        $rs = updateCandidato($nombre,$apellidos,$telefono,$correo,$username,$pass);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Vacante Actualizada Correctamente</div>";
            header("Location: ../../Vista/modificarCandidato.php");
        }
	}
?>