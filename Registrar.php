<?php

include_once("Conectar.php"); new Conexion(); new Conexion();

$UserName = $_POST["Nombre"];
$Email = $_POST["Email"];
$Contrasena = $_POST["Contrasena"];
$Confim = $_POST["Confirm"];

$UserName = strtolower($UserName);
$Email = strtolower($Email);

if (stripos($UserName,' ') !== FALSE ) {    // Si cadena contiene ' '
       header('Location:Formulario.php?Espacio=XXX');
      /*   echo "<script type=\"text/javascript\">
           alert('Nombre de Usuario No Debe Contener Espacios Vacíos');
           history.go(-1);
       </script>";*/
    exit;
   }



  $sql1= mysql_query("SELECT NombreUsuario, Correo FROM Usuario WHERE (NombreUsuario = '$UserName')");
              
            $contar = mysql_num_rows($sql1);
             
            if($contar == 0){
               
            }else{

                header('Location:Formulario.php?NombreUsuario=XXX');
                /*  echo "<script type=\"text/javascript\">
           alert('Nombre Usuario No Disponible');
           history.go(-1);
       </script>";*/
    exit;
                }

             $sql2= mysql_query("SELECT NombreUsuario, Correo FROM Usuario WHERE (Correo = '$Email')");
           
            $contar2 = mysql_num_rows($sql2);
             
            if($contar2 == 0){
              
            }else{
              
                header('Location:Formulario.php?Correo=XXX');
               /*  echo "<script type=\"text/javascript\">
           alert('Correo Electrónico No Disponible');
           history.go(-1);
       </script>";*/
    exit;
            }


            if($Confim!=$Contrasena){
    header('Location:Formulario.php?ConfirmarPass=XXX');
  /*  echo "<script type=\"text/javascript\">
           alert('Contraseña No Coincide');
           history.go(-1);
       </script>";*/
    exit;
}

$Pass = md5($Contrasena);

$Confirmacion = uniqid();

$Query = "INSERT INTO Usuario
(
NombreUsuario,
Correo,
Contrasena,
ID_Confirmacion,
Rol,
Estado)
VALUES
('$UserName', '$Email', '$Pass', '$Confirmacion','Publico', 'Inactivo')";


$sql = mysql_query($Query);



if ($sql){

include_once("Correo.php"); 
EnviarCorreo($UserName,$Email, $Contrasena, $Confirmacion);
  
  echo "<script type=\"text/javascript\">
           //alert('Usuario Registrado Correctamente');
           location.href = 'Index.php?Register=Correct'; 
       </script>"; 
        exit;

}
else{
echo "<script type=\"text/javascript\">
           alert('Error Al Registrar Usuario');
           history.go(-1);
       </script>";
        exit;
}


?>

