<?php
    
include("ExpirarSesion.php");

?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Nicaventura - Galería Ciudades</title>
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


    <body>

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

        
        
        <section class="services">
			<div class="shell">
				
                <div class="boxes">

                    
        <div class="clear"></div>   
					<h2>Galería de Fotos</h2>

					<div class="box">
						<a href="GaleriaGranada.php">
							<img src="Fotografias/Granada/DSCN0582.JPG" alt="Ciudad de Granada" />
							<h3>Galería Granada</h3>
						</a>
					</div>
                    
      
					<div class="box">
						<a href="GaleriaDiriamba.php">
							<img src="css/images/Diriamba-City.JPG" alt="Ciudad de Diriamba" />
							<h3>Galería Diriamba</h3>
						</a>
					</div>
					

                
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

        


         </div>

     
       
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
