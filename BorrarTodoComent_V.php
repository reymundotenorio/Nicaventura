<?php
    
include("ExpirarSesion.php");

if (empty($_SESSION["ID_Usuario"])){
   header('Location:Index.php');
   exit;    
    }

include_once("Conectar.php"); new Conexion();



if (!empty($_SESSION["Privilegio"]) &&
    !empty($_POST["FotoName"]) &&
    !empty($_POST["Depart"])) {

if($_SESSION["Privilegio"]='Admin'){
$ID_Usuario = $_SESSION["ID_Usuario"];
$ID_Foto = $_POST["FotoName"];
$Ruta =  $_POST["Ruta"];
$Departament = $_POST["Depart"];


$Query = "Update Comentario_Video
Set Estado = 'Inactivo' Where (ID_VIdeo = '$ID_Foto') and (Departamento = '$Departament')";

$sql = mysql_query($Query);


if ($sql){
echo "<script type=\"text/javascript\">
        //   alert('Todos Los Comentarios Borrados');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
}


    }
    }

    
?>
