<?php
    


include("ExpirarSesion.php");

if (empty($_SESSION["ID_Usuario"])){
   header('Location:Index.php');
   exit;    
    }

include_once("Conectar.php"); new Conexion();



if (!empty($_SESSION["ID_Usuario"]) &&
    !empty($_POST["FotoName"]) &&
    !empty($_POST["Depart"])) {



$ID_Usuario = $_SESSION["ID_Usuario"];
$ID_Foto = $_POST["FotoName"];
$Ruta =  $_POST["Ruta"];
$Departament = $_POST["Depart"];

   $sql3= mysql_query("SELECT * from MeGusta_Video where (ID_Usuario = '$ID_Usuario') and (ID_Video = '$ID_Foto') and (Departamento = '$Departament') and (Estado = 'Activo')");

   $contar = mysql_num_rows($sql3);
             
            if($contar == 0){
               
            }else{
               echo "<script type=\"text/javascript\">
           alert('Ya Le Ha Dado Me Gusta Anteriormente');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";
       exit;
            }

             $sql4= mysql_query("SELECT * from NoMeGusta_Video where (ID_Usuario = '$ID_Usuario') and (ID_Video = '$ID_Foto') and (Departamento = '$Departament')");

   $contar4 = mysql_num_rows($sql4);
             
            if($contar4 == 0){
               
            }else{
              $Query2 = "Update NoMeGusta_Video Set Estado = 'Inactivo' where (ID_Usuario = '$ID_Usuario') and (ID_Video = '$ID_Foto') and (Departamento = '$Departament')";
                 $sql1 = mysql_query($Query2);
            }

$Query = "INSERT INTO MeGusta_Video
(
ID_Usuario,
Departamento,
ID_Video,
Estado)
VALUES
('$ID_Usuario', '$Departament', '$ID_Foto', 'Activo')";

$sql = mysql_query($Query);


if ($sql){
echo "<script type=\"text/javascript\">
          // alert('Me Gusta Guardado');
           location.href = '$Ruta';
        //  history.go(-1);
       </script>";

       exit;
}
else{
echo "<script type=\"text/javascript\">
           alert('Me Gusta No Guardado');
           history.go(-1);
       </script>"; 

       exit;
}

   
    

}else{
    echo "<script type=\"text/javascript\">
           alert('Error Al Guardar Me Gusta');
          history.go(-1);
       </script>";
     exit;
      
}


?>

