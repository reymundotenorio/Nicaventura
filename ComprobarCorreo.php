<?php    

date_default_timezone_set("America/Managua");

  $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
           
          include_once("Conectar.php"); new Conexion();
          $sql= mysql_query("SELECT NombreUsuario, Correo FROM Usuario WHERE (UPPER(Correo) = UPPER('$b'))");
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo 1;
            }else{
                  echo 0;
            }
      }
?>

