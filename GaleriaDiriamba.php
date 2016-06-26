<?php
    
date_default_timezone_set("America/Managua");

include("ExpirarSesion.php");

?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Nicaventura - Galería Diriamba</title>
       <link rel="shortcut icon" type="image/x-icon" href="css/images/Nicaragua-Ico.ico" />
<!-- 
<script src="js/prototype.js" type="text/javascript"></script>--> 
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>


        <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: "https://www.nowtalk.com", widget_url: "https://www.nowtalk.com/chat", chat_id: "53e39bafe084e", debug: false }; document.write(unescape("%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E")); </script>
         
<link href="css/nbs.css" rel="stylesheet" type="text/css" media="screen">
       
     

         <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">

          
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
<script type="text/javascript">
    ///////////////////////////////////////////////////////////////////
    // Powered By MapsEasy.com Maps Generator                        
    // Please keep the author information as long as the maps in use.
    // You can find the free service at: http://www.MapsEasy.com     
    ///////////////////////////////////////////////////////////////////



    function LoadGmaps(Lat, Lon, Tit) {


        //   var myLatlng = new google.maps.LatLng(11.9200000, -85.9800000);
        var myLatlng = new google.maps.LatLng(Lat, Lon);
        var myOptions = {
            zoom: 16,
            center: myLatlng,
            disableDefaultUI: true,
            panControl: true,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
            },

            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: Tit
        });

    }

    function Fan() {

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

            $("#btn").click(function () {

                
               

                $.fancybox({
                   /* 'padding': 0,
                    'width': 800,
                    'height': 600,*/
                    afterClose : function(){
                     location.reload(true);
                         },
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '90%',
                    height: '90%',
                    autoSize: true,
                    closeClick: false,
                    openEffect: 'elastic',
                    closeEffect: 'fade',
                    'content': $("#MyGmaps").show()
                });



                //   ObtnTitulo();
                //    ObtnLongi();

            });

        });

    }

</script>



          
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



    <body onload="Fan(); document.body.style.zoom='82%'; ">



              
<script type="text/javascript">

    var Longitud;
    var Latitud;
    var Titulo;

    function getUrlVars() { 
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&'); 
    
    for(var i = 0; i < hashes.length; i++) { 
    hash = hashes[i].split('='); 
    vars.push(hash[0]); 
    vars[hash[0]] = hash[1]; 
    } return vars;
    } 

    function ObtnLongi() {

        var ID_Foto = getUrlVars()["Diriamba"];
        //  var ID_Foto = 'DSCN0482.JPG';
        var parametros = { "B": ID_Foto, "C": 'Diriamba' };

      

        $.ajax({

            //  data: "b=" + ID_Foto,
            data: parametros,
            type: "POST",
            url: "ObtLong.php",
            dataType: "html",
            error: function () {
                alert("error petición ajax");
            },
            success: function (data) {

                Longitud = data;
                // alert(Longitud);
                ObtnLati();

            }
        });


    }

    function ObtnLati() {

        var ID_Foto = getUrlVars()["Diriamba"];
        // var ID_Foto = 'DSCN0482.JPG';

        var parametros = { "D": ID_Foto, "E": 'Diriamba' };


        $.ajax({

            data: parametros,
            type: "POST",
            url: "ObtLat.php",
            error: function () {
                alert("error petición ajax");
            },
            success: function (data) {
                Latitud = data;
                ObtnTitulo();

                //alert(Latitud);
            }
        });



    }

    function ObtnTitulo() {

        var ID_Foto = getUrlVars()["Diriamba"];
        //var ID_Foto = 'DSCN0482.JPG';
        var parametros = { "F": ID_Foto, "G": 'Diriamba' };

        $.ajax({

            data: parametros,
            type: "POST",
            url: "ObtnTitulo.php",
            error: function () {
                alert("error petición ajax");
            },
            success: function (data) {
                Titulo = data;

                //  alert(Titulo);
                CrearMapa();

            }
        });


    }



</script>

        <script type="text/javascript">



            function CrearMapa() {
               // alert(Latitud);
                LoadGmaps(Latitud, Longitud, Titulo)

            }
</script>


     

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
					<li class="active"><a href="GaleriaDepartamento.php" style="margin-left: 40px;"><span class="bottom-arr"></span>Fotos</a>
                        <ul>
              <li><a href="GaleriaGranada.php">Granada</a></li>
              <li><a href="GaleriaDiriamba.php">Diriamba</a></li>
            <!--  <li><a href="#">Bluefields</a></li> -->
            <!--  <li><a href="#">Managua</a></li> -->
                  </ul>
                    </li>
					<li><a href="DepartamentosVideo.php" style="margin-left: 30px;"><span class="bottom-arr"></span>Videos</a> 
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

        

     <h1 class="Ima"><a class="Album" href="GaleriaDiriamba.php">Álbum Diriamba</a></h1> 



  
        <div class="clear"></div>   

<!-- Thumbnails -->

<?php
	if (!isset($_GET["Diriamba"]) ){
//Include the Thumbnails, example:
//include_once("thumbnails.php"); php_thumbnails(IMAGES_FOLDER_NAME, THUMBNAILS_FOLDER_NAME, LIHGHTBOX OPTION: lb-on/lb-off;
include_once("Thumbnails.php"); 
php_Thumbnails("Diriamba","DiriambaThumbs","lb-off");
 }
?>
  

<!-- Image -->
<?php

if (isset($_GET["Diriamba"]) ){
//Include the Image, example:
//include_once("thumbnails.php"); php_thumbnails("IMAGES_FOLDER_NAME","THUMBNAILS_FOLDER_NAME;
//If you want to use Lightbox, do not include the image at all!!
include_once("Image.php"); 
php_Image("Diriamba","DiriambaThumbs");
}
?>

 


<div class="clear"></div>

    
<?php
   
     if (isset($_GET["Diriamba"]) ){
 ?>
    
          <input type="button"  value="Ver Mapa"  id="btn" onclick="document.body.style.zoom='100%'; ObtnLongi();" class="Mapa">

 <?php    }
     ?>
        
  <section>    
<?php
   
     if (isset($_GET["Diriamba"]) ){

         

include_once("Conectar.php"); new Conexion();
$IDFoto3 = $_GET["Diriamba"];

$datos3 = mysql_query("SELECT Descripcion FROM Descripcion_Foto where (ID_Foto = '$IDFoto3') and (Departamento = 'Diriamba')");
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
    }
?>
        
  
      </section> 



        <?php  
  
  if (isset($_GET["Diriamba"]) ){
  	if (!empty($_SESSION["usuario"])){  ?>
             

        <?php if(!empty($_SESSION["Privilegio"])){
 if($_SESSION["Privilegio"]='Admin'){?>
        <section>  
     
          <form method="post" action="BorrarComent.php"> 
         <input type="hidden" value="<?php echo $_GET["Diriamba"];?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="text" size="50" style="height:30px; text-align: justify; font-size: 20px;" placeholder=" Escriba el Nombre del Usuario a Eliminar" name="UsuarioBorrar">
        <input type="submit" name="Borrar" value="Borrar Por Usuario" id="Borrar" class ="Gusta" />
           </form>

             <form method="post" action="BorrarTodoComent.php"> 
         <input type="hidden" value="<?php echo $_GET["Diriamba"];?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="BorrarTodo" value="Borrar Todo" id="BorrarTodo" class ="NoGusta" />
           </form>
            </section>
        <?php }}?>

<section>  
     
          <form method="post" action="MeGustaF.php"> 
         <input type="hidden" value="<?php echo $_GET["Diriamba"];?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        <input type="submit" name="Gusta" value="Me Gusta" id="Gusta" class ="Gusta" />
                  <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto =  $_GET["Diriamba"];
$result = mysql_query("SELECT Count(ID_MeGustaF) as Contador from MeGusta_Foto where (ID_Foto = '$ID_Foto') and (Estado = 'Activo') and (Departamento = 'Diriamba')");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> Me Gusta</label>
           </form>
       
  
  
         <form method="post" action="NoMeGustaF.php"> 
            <input type="hidden" value="<?php echo $_GET["Diriamba"];?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
         <input type="submit" name="NoGusta" value="No Me Gusta" id="Boton" class ="NoGusta"/>
              <label class="Label"><?php    
include_once("Conectar.php"); new Conexion();
$ID_Foto =  $_GET["Diriamba"];
$result = mysql_query("SELECT Count(ID_NoMeGustaF) as Contador from NoMeGusta_Foto where (ID_Foto = '$ID_Foto') and (Estado = 'Activo') and (Departamento = 'Diriamba')");
$row = mysql_fetch_array($result);

echo $row["Contador"];
?> No Me Gusta</label>
         
             </form>
     
  </section> 

      

<section class="Comentar"> 
   
    <form method="post" action="Agregar_Comentario.php" name="Plantilla" id="Plantilla"> 

        <input type="hidden" value="<?php echo $_GET["Diriamba"];?>" name="FotoName" />
         <input type="hidden" value="Diriamba" name="Depart" />
        <input type="hidden" value="<?php echo $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['REQUEST_URI'];?>" name="Ruta" />
        
       
       <article class="ComentBox">
        <textarea class="AddComent" title="Ingrese Su Comentario" name="Mensaje" id = "Mensaje" required="required" rows="3" cols="90" maxlength="150" placeholder="Escriba Su Comentario..."></textarea>
           </article>
  
 <section><input type="submit" name="Comentar" value="Comentar" id="Boton" class="BtnComentar"/> </section> 
  </form>
        
</section> 

  <section>    
<?php

include_once("Conectar.php"); new Conexion();
$IDFoto = $_GET["Diriamba"];

if(!empty($_GET['Ver'])){
$datos = mysql_query("SELECT * FROM ComentF_View where (ID_Foto = '$IDFoto') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentF DESC");

}
else{
$datos = mysql_query("SELECT * FROM ComentF_View where (ID_Foto = '$IDFoto') and (Departamento = 'Diriamba') and (Estado = 'Activo') ORDER BY ID_ComentF DESC
 LIMIT 5 ");  
}

$contar = mysql_num_rows($datos);
 


 if($contar == 0){
    
 }else{
 

while ($reg=mysql_fetch_array($datos)) {



?>

<article class="Caja">
 
     
    <header class="NombresComent"><h2 class="Nombre"><?php echo htmlspecialchars(nl2br($reg['NombreUsuario'])); ?></h2></header>
    
    <textarea readonly class="Comentario" rows="auto" cols="80" maxlength="150"><?php echo $reg['Comentario'];?></textarea>
    <p class="Fecha"><?php  

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
   <p class="VerComents"><a class ="Link" href="VerTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=".$_GET['Diriamba'];?>">Ver Todos Los Comentarios</a></p>
   
 <?php 
}
 else{ ?>
   <p class="VerComents"><a class ="Link" href="OcultarTodo.php?Ver=<?php echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)."?Diriamba=".$_GET['Diriamba'];?>">Ocultar Todos Los Comentarios</a></p>   

 <?php  }
 
  }
    }
   else{ 
       
         ?>
       
<p class="VerComents">Para Comentar, Votar y Ver Los Comentarios, Por Favor <a class ="Link" href="Formulario.php">Inicie Sesión o Regístrese</a></p>
 <?php  } 
  
  }?>
        
  
      </section> 

       
        
         <?php
            
 // if (!isset($_GET["Diriamba"]) ){ ?>
                 
      

        <?php    // }
     
         ?>

       
         <div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="Index.php">Inicio</a>
				<a href="DepartamentosInfo.php">Ciudades</a>
				<a href="GaleriaDepartamento.php"  class="active">Fotos</a>
				<a href="DepartamentosVideo.php">Videos</a>
				<a href="Contactenos.php">Contáctenos</a>
			</nav>
			<p class="copy">Derechos Reservados &copy; 2014 Diseñado Por <a id="FbRey" onclick="document.body.style.zoom='100%';Rey();">Reymundo Tenorio</a> & <a  id="FbErick" onclick="document.body.style.zoom='100%';Erick();">Erick Lara</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>


      
        </div>
       
           <?php
            
  //if (!isset($_GET["Diriamba"]) ){ ?>
                 
   <!--</div>-->   

        <?php  //   }
     
         ?>

    
	   <div style="display: none;">

            <div  id="MyGmaps" style="width:800px;height:600px; overflow:auto;"></div>
	
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
