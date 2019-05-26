<?php 
session_start();
include ("ConexionBD.php");

if(isset($_SESSION["usuarioID"])){
    $idEmresa = $_SESSION["usuarioID"];
    $idVacante = $_SESSION['idVacante'];
}

    function addVacante($id_empresa, $vac_nombre,$vac_puesto,$vac_salario,$vac_horario,$vac_requisitos,$vac_descripcion,$vac_fechaPublicado){

        $ps = "insert into tbl_vacante(fk_id_empresa,vac_nombre,vac_puesto,vac_salario,vac_horario,vac_requisitos,vac_descripcion,vac_fechaPublicado) values('$id_empresa','$vac_nombre','$vac_puesto','$vac_salario','$vac_horario','$vac_requisitos','$vac_descripcion','$vac_fechaPublicado');";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
}


function getAllVacantes(){ 

    $query = "call getAllVacantes();";
    //$query = "select * from tbl_vacante";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 

    function updateVacante($id_empresa, $vac_nombre,$vac_puesto,$vac_salario,$vac_horario,$vac_requisitos,$vac_descripcion,$vac_fechaPublicado,$id){
        $ps = "UPDATE tbl_vacante SET fk_id_empresa='$id_empresa',vac_nombre='$vac_nombre',vac_puesto='$vac_puesto',vac_salario='$vac_salario',vac_horario='$vac_horario',vac_requisitos='$vac_requisitos',vac_descripcion='$vac_descripcion',vac_fechaPublicado='$vac_fechaPublicado' WHERE id_vacante='$id';";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

    function deleteVacante($id){
        $ps = "DELETE FROM tbl_vacante WHERE id_vacante = '$id'";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }



    
function getVacantePorID($clave){ 

    $query = "call getVacantePorID($clave);";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 



 ?>
