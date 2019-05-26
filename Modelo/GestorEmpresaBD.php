<?php 
include ("ConexionBD.php");

function addEmpresa($emp_nombre, $emp_rfc,$emp_direccion,$emp_ciudad,$emp_telefono,$emp_giro,$emp_descripcion,$emp_email,$emp_username,$emp_contrasena,$usr_tipo){
    $query = "call insertarEmpresa('$emp_nombre','$emp_rfc','$emp_direccion','$emp_ciudad','$emp_telefono','$emp_giro','$emp_descripcion','$emp_email','$emp_username','$emp_contrasena','$usr_tipo');";
    global $conexion; /*Está fuera de este método */
    $resultado =  $conexion->query($query);
    return $resultado; /*Devuelve solo si se ejecuto bien o no */
}

function getEmpresa($id){
	$query="select *from tbl_empresa where id_empresa='$id';";
	global $conexion;
	 $rsCandidato =  $conexion->query($query);
    return $rsCandidato;
}



 

 ?>
