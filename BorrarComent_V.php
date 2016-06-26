<?php
    


include("ExpirarSesion.php");

if (empty($_SESSION["ID_Usuario"])){
   header('Location:Index.php');
   exit;    
    }

include_once("Conectar.php"); new Conexion();



if (!empty($_SESSION["ID_Usuario"]) &&
    !empty($_POST["FotoName"]) &&
    !empty($_POST["Depart"])&&
    !empty($_POST["UsuarioBorrar"])&&
    !empty($_SESSION["Privilegio"])) {

        if($_SESSION["Privilegio"]='Admin'){
$ID_Usuario = $_SESSION["ID_Usuario"];
$ID_Foto = $_POST["FotoName"];
$Ruta =  $_POST["Ruta"];
$Departament = $_POST["Depart"];
$UsuarioBorrar = $_POST["UsuarioBorrar"];

   $sql3= mysql_query("SELECT * from Usuario where NombreUsuario = '$UsuarioBorrar'");

   $contar = mysql_num_rows($sql3);
             
            if($contar == 0){
                echo "<script type=\"text/javascript\">
           alert('Usuario No Existe');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
            }

            $row = mysql_fetch_array($sql3);

            $ID_User = $row["ID_Usuario"];


             $sql4= mysql_query("SELECT * from Comentario_Video where (ID_Usuario = '$ID_User') and (ID_Video = '$ID_Foto') and (Departamento = '$Departament') and (Estado = 'Activo')");

   $contar4 = mysql_num_rows($sql4);
             
            if($contar4 == 0){
            echo "<script type=\"text/javascript\">
           alert('Usuario No Ha Hecho Ningun Comentario en La Video');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;   
            }

$Query = "Update Comentario_Video
Set Estado = 'Inactivo' Where (ID_Usuario = '$ID_User') and (ID_Video = '$ID_Foto') and (Departamento = '$Departament')";

$sql = mysql_query($Query);


if ($sql){
echo "<script type=\"text/javascript\">
        //   alert('Comentarios Borrados');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
}


    }

    }
    
?>
