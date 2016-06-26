<?php
    
date_default_timezone_set("America/Managua");

include("ExpirarSesion.php");

?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Nicaventura - Videos Diriamba</title>
       <link rel="shortcut icon" type="image/x-icon" href="css/images/Nicaragua-Ico.ico" />


<link href="css/nbs.css" rel="stylesheet" type="text/css" media="screen">
 
        <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: "https://www.nowtalk.com", widget_url: "https://www.nowtalk.com/chat", chat_id: "53e39bafe084e", debug: false }; document.write(unescape("%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E")); </script>

            <link href="http://vjs.zencdn.net/4.6/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.6/video.js"></script>
<style type="text/css">
  .vjs-default-skin { color: #f0dddd; }
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #479197 }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(223, 219, 66, 0.70) }
  .vjs-default-skin .vjs-slider { background: rgba(153,150,36,0.2333333333333333) }
  .vjs-default-skin .vjs-control-bar { font-size: 100% }
</style>
        

         <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">

          
<script type="text/javascript">

    function Rey() {

        $(document).ready(function () {


                $(document).delegate('#fancybox-close,#fancybox-overlay', 'click', function () {
                FancyBoxClosed();
            });
            $(document).keyup(function (e) {
                if (e.keyCode == 27) {
                    if ($('#fancybox-overlay').css('display') != 'none')
                        FancyBoxClosed();
                }
            });

            function FancyBoxClosed() {
                location.reload(true);
            }

            $.fancybox({
                   afterClose : function(){
                     location.reload(true);
                         },
                /* 'padding': 0,
                'width': 800,
                'height': 600,*/
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '90%',
                height: '90%',
                autoSize: true,
                closeClick: false,
                openEffect: 'elastic',
                closeEffect: 'fade',
                'content': $("#FR").show()
            });



        });

    }


    function Erick() {

        $(document).ready(function () {


                $(document).delegate('#fancybox-close,#fancybox-overlay', 'click', function () {
                FancyBoxClosed();
            });
            $(document).keyup(function (e) {
                if (e.keyCode == 27) {
                    if ($('#fancybox-overlay').css('display') != 'none')
                        FancyBoxClosed();
                }
            });

            function FancyBoxClosed() {
                location.reload(true);
            }

            $.fancybox({
                   afterClose : function(){
                     location.reload(true);
                         },
                /* 'padding': 0,
                'width': 800,
                'height': 600,*/
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '90%',
                height: '90%',
                autoSize: true,
                closeClick: false,
                openEffect: 'elastic',
                closeEffect: 'fade',
                'content': $("#FE").show()
            });



        });

    }

</script>

    </head>


    <body onload="document.body.style.zoom='110%'">

             <!-- wrapper -->
	<div  id="wrapper">
		<!-- header -->
		<header>
			<div class="shell">
				<h1 id="Logotipo"><a href="Index.php">Nicaventura</a></h1>
                <hgroup> 
                <h1 id="TituloG">Nicaventura</h1>
                <h2 id="TituloP">Una Ruta Hacia El Paraiso</h2>
                </hgroup>
				<div class="contact">
                    
                    <?php

    
	//comprobar la existencia del usuario
	if (!empty($_SESSION["usuario"]) ){


    $Nombre = $_SESSION["usuario"];
   echo "<p>Bienvenid@ $Nombre</p>";

   ?>
  
   <p class="Exit-ico"><span class="Salir"></span><a  onclick="if(confirm('Desea Finalizar La Sesión?'))
     { 
    location.href = 'Index.php?End=XXX';
    }
    ">Cerrar Sesión</a></p>   
                     <?php   
	 
}
    else{
     ?>
          	<p class="ico phone-ico"><span class="Registrar"></span><a href="Formulario.php">Acceder</a></p>             
   <?php }
?>
				
                    
<p><a href="https://www.facebook.com/nicaventuraweb" target="_blank">
                    <img src="css/images/FacebookLogo.png" alt="FB" style="height: 70px; width: 85px; margin-top: -20px;" />
                    </a></p> 
				<!--	<p class="ico phone-ico"><span class="Ingresar"></span><a href="#">Ingresar</a></p>-->
				</div>
			</div>	
		</header>
		<!-- end of header -->

         <!-- navigation -->
		<nav id="navigation">
			<div class="shell">
				<ul class="drop_menu">
					<li ><a href="Index.php" ><span></span>Inicio</a></li>
					<li><a href="DepartamentosInfo.php" style="margin-left: 25px;"><span class="bottom-arr" ></span>Ciudades</a>
                   <ul>
              <li ><a href="GranadaInfo.php">Granada</a></li>
              <li><a href="DiriambaInfo.php">Diriamba</a></li>
            <!--  <li><a href="#">Bluefields</a></li> -->
            <!--  <li><a href="#">Managua</a></li> -->
                  </ul>
                    </li>
					<li><a href="GaleriaDepartamento.php" style="margin-left: 40px;"><span class="bottom-arr"></span>Fotos</a>
                        <ul>
              <li><a href="GaleriaGranada.php">Granada</a></li>
              <li><a href="GaleriaDiriamba.php">Diriamba</a></li>
            <!--  <li><a href="#">Bluefields</a></li> -->
            <!--  <li><a href="#">Managua</a></li> -->
                  </ul>
                    </li>
					<li class="active"><a href="DepartamentosVideo.php" style="margin-left: 30px;"><span class="bottom-arr"></span>Videos</a> 
                         <ul>
              <li><a href="GranadaVideo.php">Granada</a></li>
              <li><a href="DiriambaVideo.php">Diriamba</a></li>
            <!--  <li><a href="#">Bluefields</a></li> -->
            <!--  <li><a href="#">Managua</a></li> -->
                  </ul>
                    </li>
					<li><a href="Contactenos.php"><span class="bottom-arr"></span>Contáctenos</a></li>
				</ul>
			</div>	
		</nav>
        
		<!-- end of navigation -->

          
        
        <div class="main">
			<div class="shell">
               

                 <div class="Videos">                       
   <video id="Diriamba01" class="video-js vjs-default-skin" controls
 preload="auto" width="640" height="320" poster="Fotografias/Diriamba/P1010106.JPG"
 data-setup="{}">
 <source src="Video/Diriamba01.mp4" type='video/mp4'/>
 <!-- <source src="MY_VIDEO.webm" type='video/webm'/> -->
 <p class="vjs-no-js">Para Ver Este Video Habilite JavaScript, y Actualice a Un Navegador que<a href="http://videojs.com/html5-video-support/" target="_blank">Soporte Video en HTML</a></p>
</video>
</div>


<section>    
<?php
   


         

include_once("Conectar.php"); new Conexion();
$IDFoto3 = 'Diriamba01.mp4';

$datos3 = mysql_query("SELECT Descripcion FROM Descripcion_Video where (ID_Video = '$IDFoto3') and (Departamento = 'Diriamba') ");
 $contar3 = mysql_num_rows($datos3);


 if($contar3 == 0){
    
 }else{
 

while ($reg3=mysql_fetch_array($datos3)) {

?>

<article class="Descripcion">
    

    <textarea readonly class="Descrip" rows="auto" cols="90" maxlength="200"><?php echo utf8_encode($reg3['Descripcion']);?></textarea>
   
   <!--  <p class="Fecha"> <time datetime="2014-06-04" pubdate class="Fecha">Publicado 04-06-2014</time></p> -->

</article>

<?php  
   } 
   
   
    }
    
?>
        
  
      </section> 



        <?php  
  

  	if (!empty($_SESSION["usuario"]) ){  ?>
      
                
                
                   <?php if(!empty($_SESSION["Privilegio"])){
 if($_SESSION["Privilegio"]='Admin'){?>
        <section>  
     
          <form method="post" action="BorrarComent_V.php"> 
         <input type="hidden" value="Diriamba01.mp4" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="text" size="50" style="height:30px; text-align: justify; font-size: 20px;" placeholder=" Escriba el Nombre del Usuario a Eliminar" name="UsuarioBorrar">
        <input type="submit" name="Borrar" value="Borrar Por Usuario" id="Borrar" class ="Gusta" />
           </form>

             <form method="post" action="BorrarTodoComent_V.php"> 
         <input type="hidden" value="Diriamba01.mp4" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="BorrarTodo" value="Borrar Todo" id="BorrarTodo" class ="NoGusta" />
           </form>
            </section>
        <?php }}?>

                         

                           
<section>  
     
          <form method="post" action="MeGustaV.php"> 
         <input type="hidden" value="<?php echo 'Diriamba01.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="Gusta" value="Me Gusta" id="Gusta" class ="Gusta" />
                  <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto = 'Diriamba01.mp4';
$result = mysql_query("SELECT Count(ID_MeGustaV) as Contador from MeGusta_Video where (ID_Video = '$ID_Foto')  and (Departamento = 'Diriamba') and (Estado = 'Activo') ");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> Me Gusta</label>
           </form>
       
  
  
         <form method="post" action="NoMeGustaV.php"> 
            <input type="hidden" value="<?php echo 'Diriamba01.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
         <input type="submit" name="NoGusta" value="No Me Gusta" id="Boton" class ="NoGusta"/>
              <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto = 'Diriamba01.mp4';
$result = mysql_query("SELECT Count(ID_NoMeGustaV) as Contador from NoMeGusta_Video where (ID_Video = '$ID_Foto')  and (Departamento = 'Diriamba') and (Estado = 'Activo')");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> No Me Gusta</label>
         
             </form>
     
  </section> 

      

<section class="Comentar" > 
   
    <form method="post" action="Agregar_Comentario_V.php" name="Plantilla" id="Plantilla"> 

        <input type="hidden" value="<?php echo 'Diriamba01.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        
       
       <article class="ComentBox" style="width: 80%;">
        <textarea class="AddComent" title="Ingrese Su Comentario" name="Mensaje" id = "Mensaje" required="required" rows="auto" cols="90" maxlength="150" placeholder="Escriba Su Comentario..."></textarea>
           </article>
  
 <section><input type="submit" name="Comentar" value="Comentar" id="Boton" class="BtnComentar"/> </section> 
  </form>
        
</section> 

  <section>  
<?php

include_once("Conectar.php"); new Conexion();
$IDFoto7 = 'Diriamba01.mp4';


if(!empty($_GET['Ver'])){
$datos8 = mysql_query("SELECT * FROM ComentV_View where (ID_Video = '$IDFoto7') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentV DESC");
}
else{
$datos8 = mysql_query("SELECT * FROM ComentV_View where (ID_Video = '$IDFoto7') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentV DESC 
LIMIT 3");
}
 $contar = mysql_num_rows($datos8);

 if($contar == 0){
    
 }else{
 

while ($reg=mysql_fetch_array($datos8)) {



?>

<article class="Caja" style="width: 80%;">
 
      <form method="post" action="BorrarUnComentV.php"> 
     
    <header class="NombresComent"><h2 class="Nombre"><?php echo htmlspecialchars(nl2br($reg['NombreUsuario'])); ?></h2>
    </header>
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
       
     <input type="hidden" value="<?php echo $reg['ID_ComentV'];?>" name="ID_ComentV" />
       <input type="submit" value="X" style="float: right; background-color:#b61111; margin-right: 10px; color: #fff; 
           font-weight: bold; font-size: 20px;"/>
    </form>
    <textarea readonly class="Comentario" rows="auto" cols="80" maxlength="150"><?php echo $reg['Comentario'];?></textarea>

    <p style=" color: rgba(240, 243, 6, 0.84);
    margin-right: 25px;
    font-weight: bold;
    font-size: 15px;
    text-align: right;
    margin-bottom: -10px;
    font-style: italic;"><?php  

//echo date("F j, Y - h:m:s A" ,strtotime($reg['Fecha']));

$diae = date("w", strtotime($reg['Fecha'])); 
$dias = array ("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",); 
$ndia = $dias[$diae]; 
$dia = date ("d",strtotime($reg['Fecha'])); 
$mese = date ("n",strtotime($reg['Fecha'])); 
$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
$mes = $meses[$mese]; 
$año = date ("Y",strtotime($reg['Fecha'])); 
$Hora = date("h:m:s A" ,strtotime($reg['Fecha']));
$fecha = $ndia.", ".$dia." de ".$mes." del ".$año." - ".$Hora; 
echo $fecha; 

  ?></p>

</article>


<?php  
   }  
if(empty($_GET['Ver'])){
    ?>
   <p class="VerComents" style="margin: 0 auto; text-align: center; padding-top: 15px;"><a class ="Link" href="VerTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=Videos";?>">Ver Todos Los Comentarios</a></p>
   
 <?php 
}
 else{ ?>
   <p class="VerComents" style="margin: 0 auto; text-align: center; padding-top: 15px;"><a class ="Link" href="OcultarTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=Videos";?>">Ocultar Todos Los Comentarios</a></p>   

 <?php  }
 
  }
    }
   else{ 
       
         ?>
       
<p class="VerComents">Para Comentar, Votar y Ver Los Comentarios, Por Favor <a class ="Link" href="Formulario.php">Inicie Sesión o Regístrese</a></p>
 <?php  } 
  
  ?>
        
  
      </section> 

       
<!-- Start Video2 -->
               
                <div style="margin-top: 30px; padding-top: 30px;"></div>


                  <div class="Videos">                       
   <video id="Diriamba02" class="video-js vjs-default-skin" controls
 preload="auto" width="640" height="320" poster="Fotografias/Diriamba/P1010184.JPG"
 data-setup="{}">
 <source src="Video/Diriamba02.mp4" type='video/mp4'/>
 <!-- <source src="MY_VIDEO.webm" type='video/webm'/> -->
 <p class="vjs-no-js">Para Ver Este Video Habilite JavaScript, y Actualice a Un Navegador que<a href="http://videojs.com/html5-video-support/" target="_blank">Soporte Video en HTML</a></p>
</video>
</div>


<section>    
<?php
   


         

include_once("Conectar.php"); new Conexion();
$IDFoto3 = 'Diriamba02.mp4';

$datos3 = mysql_query("SELECT Descripcion FROM Descripcion_Video where (ID_Video = '$IDFoto3') and (Departamento = 'Diriamba') ");
 $contar3 = mysql_num_rows($datos3);


 if($contar3 == 0){
    
 }else{
 

while ($reg3=mysql_fetch_array($datos3)) {

?>

<article class="Descripcion">
    

    <textarea readonly class="Descrip" rows="auto" cols="90" maxlength="200"><?php echo utf8_encode($reg3['Descripcion']);?></textarea>
   
   <!--  <p class="Fecha"> <time datetime="2014-06-04" pubdate class="Fecha">Publicado 04-06-2014</time></p> -->

</article>

<?php  
   } 
   
   
    }
    
?>
        
  
      </section> 



        <?php  
  

  	if (!empty($_SESSION["usuario"]) ){  ?>
          
                
                     
                   <?php if(!empty($_SESSION["Privilegio"])){
 if($_SESSION["Privilegio"]='Admin'){?>
        <section>  
     
          <form method="post" action="BorrarComent_V.php"> 
         <input type="hidden" value="Diriamba02.mp4" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="text" size="50" style="height:30px; text-align: justify; font-size: 20px;" placeholder=" Escriba el Nombre del Usuario a Eliminar" name="UsuarioBorrar">
        <input type="submit" name="Borrar" value="Borrar Por Usuario" id="Borrar" class ="Gusta" />
           </form>

             <form method="post" action="BorrarTodoComent_V.php"> 
         <input type="hidden" value="Diriamba02.mp4" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="BorrarTodo" value="Borrar Todo" id="BorrarTodo" class ="NoGusta" />
           </form>
            </section>
        <?php }}?>
                       
<section>  
     
          <form method="post" action="MeGustaV.php"> 
         <input type="hidden" value="<?php echo 'Diriamba02.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="Gusta" value="Me Gusta" id="Gusta" class ="Gusta" />
                  <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto = 'Diriamba02.mp4';
$result = mysql_query("SELECT Count(ID_MeGustaV) as Contador from MeGusta_Video where (ID_Video = '$ID_Foto')  and (Departamento = 'Diriamba') and (Estado = 'Activo') ");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> Me Gusta</label>
           </form>
       
  
  
         <form method="post" action="NoMeGustaV.php"> 
            <input type="hidden" value="<?php echo 'Diriamba02.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
         <input type="submit" name="NoGusta" value="No Me Gusta" id="Boton" class ="NoGusta"/>
              <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto = 'Diriamba02.mp4';
$result = mysql_query("SELECT Count(ID_NoMeGustaV) as Contador from NoMeGusta_Video where (ID_Video = '$ID_Foto')  and (Departamento = 'Diriamba') and (Estado = 'Activo')");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> No Me Gusta</label>
         
             </form>
     
  </section> 

      

<section class="Comentar" > 
   
    <form method="post" action="Agregar_Comentario_V.php" name="Plantilla" id="Plantilla"> 

        <input type="hidden" value="<?php echo 'Diriamba02.mp4';?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        
       
       <article class="ComentBox" style="width: 80%;">
        <textarea class="AddComent" title="Ingrese Su Comentario" name="Mensaje" id = "Mensaje" required="required" rows="auto" cols="90" maxlength="150" placeholder="Escriba Su Comentario..."></textarea>
           </article>
  
 <section><input type="submit" name="Comentar" value="Comentar" id="Boton" class="BtnComentar"/> </section> 
  </form>
        
</section> 

  <section>  
<?php

include_once("Conectar.php"); new Conexion();
$IDFoto7 = 'Diriamba02.mp4';


if(!empty($_GET['Ver'])){
$datos8 = mysql_query("SELECT * FROM ComentV_View where (ID_Video = '$IDFoto7') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentV DESC");
}
else{
$datos8 = mysql_query("SELECT * FROM ComentV_View where (ID_Video = '$IDFoto7') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentV DESC 
LIMIT 3");
}
 $contar = mysql_num_rows($datos8);

 if($contar == 0){
    
 }else{
 

while ($reg=mysql_fetch_array($datos8)) {



?>

<article class="Caja" style="width: 80%;">
 
      <form method="post" action="BorrarUnComentV.php"> 
     
    <header class="NombresComent"><h2 class="Nombre"><?php echo htmlspecialchars(nl2br($reg['NombreUsuario'])); ?></h2>
    </header>
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
       
     <input type="hidden" value="<?php echo $reg['ID_ComentV'];?>" name="ID_ComentV" />
       <input type="submit" value="X" style="float: right; background-color:#b61111; margin-right: 10px; color: #fff; 
           font-weight: bold; font-size: 20px;"/>
    </form>
    <textarea readonly class="Comentario" rows="auto" cols="80" maxlength="150"><?php echo $reg['Comentario'];?></textarea>

    <p style=" color: rgba(240, 243, 6, 0.84);
    margin-right: 25px;
    font-weight: bold;
    font-size: 15px;
    text-align: right;
    margin-bottom: -10px;
    font-style: italic;"><?php  

//echo date("F j, Y - h:m:s A" ,strtotime($reg['Fecha']));

$diae = date("w", strtotime($reg['Fecha'])); 
$dias = array ("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",); 
$ndia = $dias[$diae]; 
$dia = date ("d",strtotime($reg['Fecha'])); 
$mese = date ("n",strtotime($reg['Fecha'])); 
$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
$mes = $meses[$mese]; 
$año = date ("Y",strtotime($reg['Fecha'])); 
$Hora = date("h:m:s A" ,strtotime($reg['Fecha']));
$fecha = $ndia.", ".$dia." de ".$mes." del ".$año." - ".$Hora; 
echo $fecha; 

  ?></p>

</article>


<?php  
   }  
if(empty($_GET['Ver'])){
    ?>
   <p class="VerComents" style="margin: 0 auto; text-align: center; padding-top: 15px;"><a class ="Link" href="VerTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=Videos";?>">Ver Todos Los Comentarios</a></p>
   
 <?php 
}
 else{ ?>
   <p class="VerComents" style="margin: 0 auto; text-align: center; padding-top: 15px;"><a class ="Link" href="OcultarTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=Videos";?>">Ocultar Todos Los Comentarios</a></p>   

 <?php  }
 
  }
    }
   else{ 
       
         ?>
       
<p class="VerComents">Para Comentar, Votar y Ver Los Comentarios, Por Favor <a class ="Link" href="Formulario.php">Inicie Sesión o Regístrese</a></p>
 <?php  } 
  
  ?>
        
  
      </section> 

	<!-- end video2 -->

             
				<section class="Youtube" >
				<!-- content -->
                    
					<div class="content" style="width: 80%;">
						<h2>Videos en Youtube</h2>
					
					</div>
					<!-- end of content -->
                    </section>

                <!-- services -->
        <section class="services1" >
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1" >
						<a class="various fancybox.iframe" href="//Es considerado, después de la Basílica menor de San Sebastián, el segundo icono de la ciudad." onclick="document.body.style.zoom='100%';">
							<img src="Fotografias/Diriamba/P1010029.JPG" alt="Diriamba, Nic" style="width: 300px; height: 180px;"/>
							<h3>Diriamba, Nicaragua - NicaSpanish</h3>
						</a>

              
                        <a class="various fancybox.iframe" href="//www.youtube.com/embed/TmVArhWEfI0" onclick="document.body.style.zoom='100%';">
							<img src="Fotografias/Diriamba/P1010045.JPG" alt="Diriamba, Nic" style="width: 300px; height: 180px;"/>
							<h3>Fiestas Patronales - Cámara Matizona</h3>
						</a>

					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->
 

                <div style="margin-bottom: 20px;
                     padding-bottom: 20px;"></div>

                

    
</div>



         </div>

          </div>


     
        <div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="Index.php">Inicio</a>
				<a href="DepartamentosInfo.php">Ciudades</a>
				<a href="GaleriaDepartamento.php">Fotos</a>
				<a href="DepartamentosVideo.php"   class="active">Videos</a>
				<a href="Contactenos.php">Contáctenos</a>
			</nav>
			<p class="copy">Derechos Reservados &copy; 2014 Diseñado Por <a id="FbRey" onclick="document.body.style.zoom='100%'; Rey();">Reymundo Tenorio</a> & <a  id="FbErick" onclick="document.body.style.zoom='100%';Erick();">Erick Lara</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>

     
         <div style="display: none;">
             <div id="FR">  <!-- Facebook Badge START --><a href="https://www.facebook.com/djrex10" title="Reymundo Tenorio Quiroz" style="font-family:
    &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" target="_TOP">Reymundo Tenorio Quiroz</a><span style="font-family: &#039;lucida grande&#039;,tahoma,verdana,arial,sans-serif;font-size: 11px;line-height: 16px;font-variant: normal;font-style: normal;font-weight: normal;color: #555555;text-decoration: none;">&nbsp;|&nbsp;</span><a href="https://www.facebook.com/badges/" title="Crea tu propia insignia" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" target="_TOP"></a><br /><a href="https://www.facebook.com/djrex10" title="Reymundo Tenorio Quiroz" target="_TOP"><img class="img" src="https://badge.facebook.com/badge/1376602813.2190.1752507320.png" style="border: 0px;" alt="Reymundo" /></a><!-- Facebook Badge END --></div> </div>

         <div style="display: none;">
                <div id="FE"> 
                    <!-- Facebook Badge START --><a href="https://www.facebook.com/erickfrancisco.lararomero" title="Erick Francisco Lara Romero" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" target="_TOP">Erick Francisco Lara Romero</a><br /><a href="https://www.facebook.com/erickfrancisco.lararomero" title="Erick Francisco Lara Romero" target="_TOP"><img class="img" src="https://badge.facebook.com/badge/100002379130047.738.840236584.png" style="border: 0px;" alt="" /></a><br /><a href="https://www.facebook.com/badges/" title="Crea tu propia insignia" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" target="_TOP"></a><!-- Facebook Badge END -->
                     </div>

             </div>

          
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>  
       
        
	<!-- FancyBox -->
		<script src="js/fancybox/jquery.fancybox.js"></script>
		<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
		<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
        <script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
		<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
        
        <script type="text/javascript">
	$(document).ready(function() {

        
            $(document).delegate('#fancybox-close,#fancybox-overlay', 'click', function () {
                FancyBoxClosed();
            });
            $(document).keyup(function (e) {
                if (e.keyCode == 27) {
                    if ($('#fancybox-overlay').css('display') != 'none')
                        FancyBoxClosed();
                }
            });

            function FancyBoxClosed() {
                location.reload(true);
            }


		$(".fancybox").fancybox({
		        afterClose : function(){
            location.reload(true);
           }
		});



	});
</script>
        

        
        <script type="text/javascript">
        	$(document).ready(function() {


				$(".various").fancybox({
				
                    fitToView: false,
                    width: '90%',
                    height: '90%',
                    autoSize: true,
                    closeClick: false,
                    openEffect: 'elastic',
                    closeEffect: 'fade',
                     
                     afterClose : function(){
                     location.reload(true);
                         }
                    
				});
			});
		</script>

       
        
    
        </body>
</html>

