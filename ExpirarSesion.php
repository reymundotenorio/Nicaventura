<?php

date_default_timezone_set("America/Managua");

$time = 120; //15 mins en mili-segundos

session_start();

// verificamos si existe la sesión 
// el nombre es como ejemplo 

if(!empty($_SESSION["expire"])){
if(!empty($_SESSION["usuario"])) 
{ 
      // verificamos si existe la sesión que se encarga del tiempo 
      // si existe, y el tiempo es mayor que una hora, expiramos la sesión  
      if(isset($_SESSION["expire"]) && time() > $_SESSION["expire"] + $time) 
      { 

           unset($_SESSION["expire"]); 
           unset($_SESSION["usuario"]); 
            unset($_SESSION["Last_Sesion"]);

$Salida = date('Y-m-d h:i:s');

echo $Salida;
echo $IDSesion;

include_once("Conectar.php"); new Conexion(); new Conexion();

$Query = "Update Inicio_Sesion set Salida = '$Salida' where ID_InicioSesion = '$IDSesion'";
 echo $Query;

$sql = mysql_query($Query);

           session_destroy();
           header('Location:Formulario.php?Expire=XXX');
      
      } 
      // si no existe la creamos 
      else 
      { 
        // echo "<script languaje='javascript'>alert('Sigue')</script>";
           $_SESSION["expire"] = time(); 
         
       } 
}
}

?>

