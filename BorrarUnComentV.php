
<?php
    


include("ExpirarSesion.php");

if (empty($_SESSION["ID_Usuario"])){
   header('Location:Index.php');
   exit;    
    }

include_once("Conectar.php"); new Conexion();



if (!empty($_SESSION["ID_Usuario"]) &&
    !empty($_POST["ID_ComentV"])&&
    !empty($_SESSION["Privilegio"])) {

        if($_SESSION["Privilegio"]='Admin'){

$ID_Usuario = $_SESSION["ID_Usuario"];
$Ruta =  $_POST["Ruta"];
$UsuarioBorrar = $_POST["ID_ComentV"];

   $sql3= mysql_query("SELECT * from Comentario_Video where ID_ComentV = '$UsuarioBorrar'");

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

            $ID_User = $_POST["ID_ComentV"];



$Query = "Update Comentario_Video
Set Estado = 'Inactivo' Where (ID_ComentV = '$ID_User')";

$sql = mysql_query($Query);


if ($sql){
echo "<script type=\"text/javascript\">
        //   alert('Comentario Borrado');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
}


    }

    }
    
?>
