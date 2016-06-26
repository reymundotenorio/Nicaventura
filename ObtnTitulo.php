<?php    

  $ID_Foto = $_POST["F"];
 $Departament = $_POST["G"];
       
      if(!empty($ID_Foto)) {
            comprobar($ID_Foto, $Departament);
      }
       
      function comprobar($b,$c) {
           
          include_once("Conectar.php"); new Conexion();
          $sql= mysql_query("SELECT Descripcion from Descripcion_Foto WHERE (ID_Foto = '$b') and (Departamento = '$c')");
           
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
              
            }else{

                $row = mysql_fetch_array($sql);

                echo $row["Descripcion"];
               
            }
      }
?>