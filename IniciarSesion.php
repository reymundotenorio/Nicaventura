<?php
 
include_once("Conectar.php"); new Conexion(); new Conexion();new Conexion();



$UserName = $_POST["Username"];
$Contra = $_POST["Password"];

$UserName = strtolower($UserName);


//mysql_real_escape_string
 //  print "jaja".$Check;
    
 $UserNameF = mysql_real_escape_string($UserName);
 $ContraF= mysql_real_escape_string($Contra);
 $ContraFMD5 =  md5($ContraF);


 /*$consulta = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($usuario),
            mysql_real_escape_string($contraseña));
            mysql_real_escape_string($contraseña));*/

$result = mysql_query("SELECT ID_Usuario, NombreUsuario, Correo, Contrasena, Estado, Rol FROM Usuario WHERE ((Correo = '$UserName') or (NombreUsuario = '$UserName'))");

$row = mysql_fetch_array($result);


//echo "contrasena:", $row["Contrasena"];
if((($row["Correo"]==$UserName) or ($row["NombreUsuario"]==$UserName)) && ($row["Contrasena"]==$ContraFMD5) && ($row["Estado"]=="Inactivo")){

header('Location:Formulario.php?Activar=XXX');    
exit;
}


if((($row["Correo"]==$UserName) or ($row["NombreUsuario"]==$UserName)) && ($row["Contrasena"]==$ContraFMD5) && ($row["Estado"]=="Activo")){

//if($row["Email"]==$UserName && $row["Contrasena"]==$Contra){
   

      session_start();

   $UsuarioSesion = $row["NombreUsuario"];
   $IDSesion = $row["ID_Usuario"];

   $_SESSION["ID_Usuario"] = $IDSesion;
       
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$_SESSION["usuario"]=$UsuarioSesion;
       
         if(isset($_POST['Keeplog'])){ 
             unset($_SESSION["expire"]); 
            }   
            else{  
                $_SESSION["expire"] = time();       
          }

          if(($row["Rol"]=='Administrador')){
             $_SESSION["Privilegio"]='Admin'; 
          }
       

          
$Query = "INSERT INTO Inicio_Sesion
(
ID_Usuario,
Estado)
VALUES
('$IDSesion', 'Activo')";


$sql = mysql_query($Query);

$result3 = mysql_query("Select Max(ID_InicioSesion) as Last from Inicio_Sesion");

$row3 = mysql_fetch_array($result3);

$LastSesion = $row3["Last"];
$_SESSION["Last_Sesion"] = $LastSesion;

         
   
    //  echo "<script languaje='javascript'>alert('Usuario Conectado')</script>";
     header('Location:Index.php?Valor=XXX');    
    
     exit;
      
        //<a href="javascript:history.go(-1)">Atrás </a>

 
//set_time_limit(0);
}

else{
     
      echo "<script type=\"text/javascript\">
         //  alert('Usuario y/o Contraseña Erronea');
           location.href = 'Formulario.php?NoLogin=XXX';
       </script>";

       exit;
    
    // header('Location:Formulario.php');
    // echo "<script languaje='javascript'>alert('Usuario y/o Contraseña Erronea')</script>"; 
    
}


?>
