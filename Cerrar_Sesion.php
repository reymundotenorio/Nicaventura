<?php

date_default_timezone_set("America/Managua");

 session_start();

	//comprobar la existencia del usuario
	if (empty($_SESSION["usuario"]) ){
   header('Location:Index.php');    
    }

if (!empty($_SESSION["usuario"]) ){

    $IDSesion = $_SESSION["Last_Sesion"];

 unset($_SESSION["usuario"]); 
 unset($_SESSION["ID_Usuario"]);
 unset($_SESSION["Last_Sesion"]);
 if(!empty($_SESSION["Privilegio"])){
  unset($_SESSION["Privilegio"]);
 }
$Salida = date('Y-m-d h:i:s');

echo $Salida;
echo $IDSesion;

include_once("Conectar.php"); new Conexion(); new Conexion();

$Query = "Update Inicio_Sesion set Salida = '$Salida' where ID_InicioSesion = '$IDSesion'";
 echo $Query;

$sql = mysql_query($Query);

 session_destroy();

 header('Location:Index.php');

 exit;


}
?>
