<?php
    
include("ExpirarSesion.php");
   

?>


<!DOCTYPE html>

<html lang="es">
    <head>
    
        <meta charset="utf-8" />
        <title>Nicaventura - Inicio</title>

        <link rel="shortcut icon" type="image/x-icon" href="css/images/Nicaragua-Ico.ico" />

      <!--<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" /> -->

        <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: "https://www.nowtalk.com", widget_url: "https://www.nowtalk.com/chat", chat_id: "53e39bafe084e", debug: false }; document.write(unescape("%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E")); </script>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
   
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>

   
       
 <link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
    
        <script>
            function hide() {
                $("#FlexBtn").css("z-index", "-1");
              // $("#FlexBtn").css("display", "none");
               // style = "z-index: -1"
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



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   

         <?php
        if(!empty($_REQUEST["Valor"])&&!empty($_SESSION["usuario"])){
            ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Usuario Conectado",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Index.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Bienvenido <?php echo $_SESSION["usuario"] ?> a Nicaventura
</div>

<?php
 
}

 ?> 
 
      
          <?php
        if(!empty($_REQUEST["Register"])){
            ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Usuario Registrado Correctamente",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Index.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Se ha registrado correctamente en Nicaventura, para iniciar sesión por favor active su cuenta en el enlace que se ha enviado a su dirección de correo electrónico
</div>

<?php
 
}

 ?>  


    <?php
        if(!empty($_REQUEST["End"])){
            ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#EndSe").dialog({
            title: "Sesión Finalizada",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Cerrar_Sesion.php';
                }
            }
        });
    });
</script>
<div id="EndSe" style="display: none">
  Sesión finalizada con éxito, gracias por visitarnos
</div>

<?php
 
}

 ?>  


 
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
  
  <p class="Exit-ico"><span class="Salir"></span><a  onclick="if (confirm('Desea Finalizar La Sesión?'))
     {CerrarS();
    //location.href = 'Cerrar_Sesion.php';
    }
    ">Cerrar Sesión</a></p>   
  

<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

                    
<script type="text/javascript">
    function CerrarS() {
        $("#closesesion").dialog({
            title: "Sesión Finalizada",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Cerrar_Sesion.php';
                }
            }
        });
    }
</script>

  <div id="closesesion" style="display: none">
 Sesión finalizada con éxito, gracias por visitarnos
</div>

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
					<li class="active"><a href="Index.php" ><span></span>Inicio</a></li>
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

        <!-- slider-holder -->
		<div class="slider-holder">
			<div class="shell" >
				<span class="slider-shadow" ></span>
				<div class="slider flexslider" id="FlexBtn">
					<ul class="slides" >
						<li>
							<img src="css/images/Lagos_Volcanes.JPG" alt="Nicaragua Tierra de Lagos y Volcanes" />
							<div class="slide-cnt">
								<h2>Nicaragua Tierra de Lagos y Volcanes</h2>
								<p>Nicaragua, ubicada en el corazón de América Central.<br />
El territorio se encuentra bañado por dos mares, decenas de impresionantes volcanes y lagos...</p>
								<a class="various fancybox.iframe" href="http://www.visitanicaragua.com/" 
                                style="width: 205px; height: 35px; padding: 0 0 0 0; 
/*background: url(images/slider-btn.png) repeat-x 0 0;*/ background-color: #cdb91d; display: block; text-align: center; position: relative; line-height: 35px;
font-size: 18px; font-weight: bold; color: #fff; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); 
border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; -o-border-radius: 3px; text-shadow: rgba(255,255,255,0.1) 2px 2px 1px;"  onclick="hide()">Explorar Más</a>
							</div>
						</li>
						<li>
							<img src="css/images/Granada.JPG" alt="Granada" />
							<div class="slide-cnt">
								<h2>Granada "La Gran Sultana"</h2>
								<p>Granada, también es conocida como: La Gran Sultana, por su apariencia morisca y andaluza.<br />Es una de las primeras ciudades europeas en territorio continental americano... <a href="GranadaInfo.php">Leer Más</a></p>
							<a class="various fancybox.iframe" href="http://www.visitanicaragua.com/?page_id=686" 
                                style="width: 205px; height: 35px; padding: 0 0 0 0; 
/*background: url(images/slider-btn.png) repeat-x 0 0;*/ background-color: #cdb91d; display: block; text-align: center; position: relative; line-height: 35px;
font-size: 18px; font-weight: bold; color: #fff; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); 
border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; -o-border-radius: 3px; text-shadow: rgba(255,255,255,0.1) 2px 2px 1px;"  onclick="hide()">Explorar Más</a>
							</div>
						</li>
						<li>
							<img src="css/images/Diriamba.JPG" alt="Diriamba" />
							<div class="slide-cnt">
								<h2>Diriamba</h2>
								<p>Diriamba ostenta el título de ser la cuna de las Hípicas de Nicaragua, la cuna del fútbol nacional y la cuna de la comedia danzante del güegüense o macho ratón (declarado Patrimonio Intangible de la Humanidad)... <a href="DiriambaInfo.php">Leer Más</a></p>
                                <a class="various fancybox.iframe" href="http://www.visitanicaragua.com/?page_id=680" 
                                style="width: 205px; height: 35px; padding: 0 0 0 0; 
/*background: url(images/slider-btn.png) repeat-x 0 0;*/ background-color: #cdb91d; display: block; text-align: center; position: relative; line-height: 35px;
font-size: 18px; font-weight: bold; color: #fff; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -moz-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); -o-box-shadow: 0px 0px 5px rgba(0,0,0,0.3); 
border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; -o-border-radius: 3px; text-shadow: rgba(255,255,255,0.1) 2px 2px 1px;"  onclick="hide()">Explorar Más</a>
							</div>
						</li>
						
						
					</ul>
				</div>
			</div>	
		</div>	
		<!-- end of slider-holder -->

        <!-- services -->
        
					

		<section class="services">
           
			<div class="shell">
                
				<div class="boxes">
					
                    <h2>Ciudades</h2>
					<div class="cl">&nbsp;</div>
					<div class="box">
						<a href="GranadaInfo.php">
							<img src="css/images/Granada-City.JPG" alt="Ciudad de Granada" />
							<h3>Granada</h3>
						</a>
					</div>
					<div class="box">
						<a href="DiriambaInfo.php">
							<img src="css/images/Diriamba-City.JPG" alt="Ciudad de Diriamba" />
							<h3>Diriamba</h3>
						</a>
					</div>
					<!--<div class="box">
						<a href="#">
							<img src="css/images/Bluefields-City.JPG" alt="Bluefields" />
							<h3>Bluefields</h3>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<img src="css/images/Managua-City.JPG" alt="Ciudad de Managua" />
							<h3>Managua</h3>
						</a>
					</div>
                    
                    -->
                     <aside class="all-services">
                    
       <!-- <div class="fb-follow" data-href="https://www.facebook.com/djrex10" data-width="300" data-height="200" data-colorscheme="dark" data-layout="standard" data-show-faces="true"> </div>-->

<div class="fb-like-box" data-href="https://www.facebook.com/nicaventuraweb" data-width="250" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                  
                    </aside>
                    
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

        <div class="main">
			<div class="shell">
				<section>
					<!-- content -->
					<div class="content">
						<h2>Acerca de Nosotros</h2>
						<p>Somos un sitio creado para fomentar el turismo en Nicaragua, para que conozca un poco más sobre los distintos
                        destinos turísticos, naturales, bellos y fascinantes que posee nuestra Nación de lagos y volcanes.</p>

						<p>Esperamos que pueda encontrar y disfrutar del contenido en nuestra página, en el enfoque principal
                        de las distintas ciudades y departamentos, ofreciéndole una visión y experiencia más amplia de cada una
                        de ellas.</p>
					</div>
					<!-- end of content -->

                    <!-- aside -->
					<aside>
						<div class="widget">
							<h2>Visitas</h2>

                             <div>
                        <script src="http://geo1.geocontador.com/private/geocontador.js?c=54dfa2cf60efaf1980176d04d72afed6"></script>
<noscript><!--Importante: Para el funcionamiento optimo del instrumento no cambia el codigo-->
<a href="http://geo1.geocontador.com/?c=54dfa2cf60efaf1980176d04d72afed6"><img src="http://geo1.geocontador.com/private/geocontador.php?c=54dfa2cf60efaf1980176d04d72afed6" alt="Geo"></a>
</noscript><br>
<!-- <a href="http://www.geocontador.com">Nicaventura&copy; 2014 - RJTQ</a>-->

                            </div> 
                            
                            <!-- 
							<div class="img-holder">
								<a href="#"><img src="css/images/FB1.png" alt="Facebook" /></a>	
							</div>
							<div class="img-holder">
								<a href="#"><img src="css/images/YT1.png" alt="You Tube" /></a>	
							</div>
                            --> 
		
							<div class="cl">&nbsp;</div>
						</div>
						<!--<div class="widget">
							<h2>Our Clients</h2>
							<div class="img-holder">
								<a href="#"><img src="css/images/clients-img1.png" alt="" /></a>
							</div>
							<div class="img-holder">
								<a href="#"><img src="css/images/clients-img2.png" alt="" /></a>
							</div>
							<div class="img-holder">
								<a href="#"><img src="css/images/clients-img3.png" alt="" /></a>
							</div>
							<div class="cl">&nbsp;</div>
						</div> -->
					</aside>

					<!-- end of aside -->
					<div class="cl">&nbsp;</div>
				</section>
			</div>
		</div>


         </div>

          

         <div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="Index.php"  class="active">Inicio</a>
				<a href="DepartamentosInfo.php">Ciudades</a>
				<a href="GaleriaDepartamento.php">Fotos</a>
				<a href="DepartamentosVideo.php">Videos</a>
				<a href="Contactenos.php">Contáctenos</a>
			</nav>
			<p class="copy">Derechos Reservados &copy; 2014 Diseñado Por <a id="FbRey" onclick="Rey();">Reymundo Tenorio</a> & <a  id="FbErick" onclick="Erick();">Erick Lara</a></p>
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
