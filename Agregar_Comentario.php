<?php

date_default_timezone_set("America/Managua");

include_once("ExpirarSesion.php");

if (empty($_SESSION["ID_Usuario"]) ){
   header('Location:Index.php');
   exit;    
    }

include_once("Conectar.php"); new Conexion();


if (!empty($_SESSION["ID_Usuario"]) &&
    !empty($_POST["Mensaje"]) &&
    !empty($_POST["FotoName"]) &&
    !empty($_POST["Depart"])) {



$ID_Usuario = $_SESSION["ID_Usuario"];
$Comentario = $_POST["Mensaje"];
$ID_Foto = $_POST["FotoName"];
$Ruta =  $_POST["Ruta"];
$Departament = $_POST["Depart"];



$Query = "INSERT INTO Comentario_Foto
(
ID_Usuario,
Comentario,
Departamento,
ID_Foto,
Estado)
VALUES
('$ID_Usuario', '$Comentario', '$Departament', '$ID_Foto', 'Activo')";

$sql = mysql_query($Query);

if ($sql){
echo "<script type=\"text/javascript\">
         //  alert('Comentario Guardado');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
}
else{
echo "<script type=\"text/javascript\">
           alert('Comentario No Guardado');
           history.go(-1);
       </script>"; 
       exit;
}

   
       
}else{
    echo "<script type=\"text/javascript\">
           alert('Error Al Guardar Comentario');
          history.go(-1);
       </script>";
     exit;    
}



?>

