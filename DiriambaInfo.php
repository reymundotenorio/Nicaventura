<?php
    
include("ExpirarSesion.php");

?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Nicaventura - Información Diriamba</title>
       <link rel="shortcut icon" type="image/x-icon" href="css/images/Nicaragua-Ico.ico" />


<link href="css/nbs.css" rel="stylesheet" type="text/css" media="screen">
 
       <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: "https://www.nowtalk.com", widget_url: "https://www.nowtalk.com/chat", chat_id: "53e39bafe084e", debug: false }; document.write(unescape("%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E")); </script> 

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
					<li class="active"><a href="DepartamentosInfo.php" style="margin-left: 25px;"><span class="bottom-arr" ></span>Ciudades</a>
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


        
        <ul style="margin-left: 400px; margin-top: 40px; ">

            <li style="text-align: left; list-style-type: square;"><a href="#diriamba" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Diriamba</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#maquina" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">La Máquina</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#boquita" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">La Boquita</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#museo" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Museo de Diriamba</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#basilica" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Basílica San Sebastián</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#IDEA" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">IDEA (Instituto Nacional de Excelencia Académica)</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#reloj" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">El Reloj</a></li>
                
        </ul>
        
        
        
        <div class="main">
			<div class="shell">
                
                            
<!-- services -->
                <section id="diriamba">

        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaDiriamba.php">
							<img src="Fotografias/Diriamba/P1010051.JPG" alt="Ciudad de Diriamba" />
							<h3>Diriamba</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->
 

				
				<!-- content -->
                    
					<div class="content">
						<a class="various fancybox.iframe" href="//www.youtube.com/embed/TmVArhWEfI0"><hgroup> <h2>Diriamba</h2>
                        <h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Es una Ciudad y Municipio del Departamento de Carazo, Nicaragua. Está situada al oeste de Jinotepe, la Capital del departamento. Diriamba también forma parte de la región metropolitana de Managua.</p>

<p>Diriamba ostenta el título de ser la cuna de las hípicas de Nicaragua, la cuna del fútbol nacional y la cuna de la comedia danzante del güegüense o macho ratón (declarado patrimonio intangible de la humanidad).</p>

<p>la villa de Diriamba fue elevada a ciudad, durante el gobierno del presidente José santos Zelaya, según decreto legislativo del 6 de octubre de 1894, con vigencia a partir del 10 de octubre del mismo año.</p>

					</div>
					<!-- end of content -->
                    </section>


             <section id="maquina">                           
<!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaDiriamba.php?Diriamba=P1010090">
							<img src="Fotografias/Diriamba/P1010090.JPG" alt="La Maquina" />
							<h3>La Máquina</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->
 

    
              
					<!-- content -->
					<div class="content">
			<a class="various fancybox.iframe" href="//www.youtube.com/embed/zTTFDGpN76k"><hgroup> <h2>La Máquina</h2>
                        <h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Históricamente La Máquina fue un eje importante del primer corredor ecoturístico que existió en Nicaragua con este fin constituido por Diriamba.</p>
             <p>Está inmersa en un oasis tropical, donde su variedad de atractivos turísticos reales se armonizan y complementan entre sí donde se distinguen: río, bosque, cascada, 326 árboles ancestrales, la mayor concentración de especies del bosque tropical seco en la zona. Fácil y barato acceso por carretera asfaltada hasta el portón.</p>
              <p>Un Km de río apacible y poco profundo con fauna y flora acuática.  Hermosa cascada de diez metros de alto parte de una fractura geológica que corta el río la Trinidad provocando un hermosos salto, el agua llega allí después de atravesar un fondo rocoso expuesto por la erosión hídrica a través del tiempo, algo único en la zona, formando una pequeña piscina natural.</p>

<p>La reserva está ubicada en el Departamento de Carazo, a menos de 60 kilómetros de Managua. Es de fácil acceso tomando la carretera que lleva de Diriamba a las playas de La Boquita y Casares.</p> 
 <p>La Máquina está localizada a medio camino de esta carretera. La entrada es a mano derecha y hay un letrero en el kilómetro 58½. Toma unos 15 minutos saliendo desde Diriamba. Asimismo, hay buses que conectan a esta ciudad con los pueblos costeros, que también pueden ser utilizados para llegar a la reserva.</p>

					</div>
					<!-- end of content -->
                    </section>

                 <section id="boquita">
                                                
<!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Diriamba=P1010184.JPG">
							<img src="Fotografias/Diriamba/P1010184.JPG" alt="La Boquita" />
							<h3>La Boquita</h3></a>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->



					<!-- content -->
					<div class="content">
					<a class="various fancybox.iframe" href="//www.youtube.com/embed/noGuhSdCPts">
                    <hgroup> <h2>La Boquita</h2>
                        <h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Esta playa tiene zonas rocosas sobre las que puede tomar el sol, y también zonas despejadas ideales para el baño. Es una de las más visitadas de la zona, gracias a su muy conocido Centro Turístico.</p>

<p>Playa del océano pacifico son muy bellas y acogedoras. Ubicadas a menos de una hora del centro de la ciudad de Diriamba, las playas cuenta con sus propios centros turísticos dotados de varios restaurantes, hoteles y bares.</p>

					</div>
					<!-- end of content -->
                    </section>
                 
                
                <section id="museo">
                                       
<!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Diriamba=P0002.jpg">
							<img src="Fotografias/Diriamba/P0002.jpg" alt="Museo de Diriamba" />
							<h3>Museo de Diriamba</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                  
					<!-- content -->
					<div class="content">
						<a class="various fancybox.iframe" href="//www.youtube.com/embed/f3MY3BukJoA">
                            <hgroup> <h2>Museo de Diriamba</h2>
                        <h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>El museo Ecológico de Trópico Seco da a los visitantes una amplia vista de la flora y fauna del departamento de Carazo y otras áreas del Pacífico de Nicaragua</p>
                       <p>El museo Ecológico de Trópico Seco está ubicado en frente de la estación de policía de Diriamba, cerca del Hospital y del Estadio de Fútbol. Viniendo desde Managua, se tiene que girar a la derecha seis cuadras antes de llegar al famoso reloj de Diriamba, y a cuatro cuadras se encuentra el edificio amarillo en el que se ubica el museo.</p>
					</div>
					<!-- end of content -->
                    </section>


    <section id="basilica">

                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Diriamba=P1010027.JPG">
							<img src="Fotografias/Diriamba/P1010027.JPG" alt="Basílica San Sebastián" />
							<h3>Basílica San Sebastián</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->


              
					<!-- content -->
					<div class="content">
						<a class="various fancybox.iframe" 
                        href="//www.youtube.com/embed/XWVeL1mukiI">
                            <hgroup> <h2>Básilica San Sebastián</h2>
                        <h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>La construcción de la Basílica Menor de San Sebastián empezó el 27 de Diciembre de 1891, considerado el año del "Renacimiento" de la ciudad de Diriamba. El proyecto fue comisionado por el presbítero Thomas R. Altamirano quién colocó la primera piedra de la que sería una de las Iglesias más bellas de Nicaragua. </p>

<p>La Iglesia tiene tres naves, con una cúpula y dos torres. En el techo de su cúpula y en ambos lados de las paredes de la nave principal se pueden ver bellas pinturas Bíblicas. Estas pinturas fueron hechas en el año 1958. Entre las pinturas se encuentran el martirio de San Sebastián, así como el Niño Jesús en medio de los doctores, Pentecostés, Jesús calmando la tempestad, entre otros.</p>

					</div>
					<!-- end of content -->
                    </section>

                
                  <section id="IDEA">

                  <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Diriamba=P1010326.JPG">
							<img src="Fotografias/Diriamba/P1010326.JPG" alt="IDEA" />
							<h3>IDEA</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->


					<!-- content -->
					<div class="content">
						<a class="http://www.elnuevodiario.com.ni/sucesos/11730"><hgroup> <h2>IDEA (Instituto Nacional de Excelencia Académica)</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>IDEA, constituye un reconocimiento y a la vez una oportunidad para aquellos estudiantes del país que egresan de primaria y presentan disciplina académica, altos niveles de rendimiento escolar, deseo emprendedor y cualidades personales para la responsabilidad social.</p>
					</div>
					<!-- end of content -->
                    </section>


                 <section style="margin-bottom: 30px; padding-bottom: 30px;" id="reloj"> 
                  <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Diriamba=P1010315.JPG">
							<img src="Fotografias/Diriamba/P1010315.JPG" alt="El Reloj" />
							<h3>El Reloj</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->



                
					<!-- content -->
					<div class="content">
					<a class="various fancybox.iframe" 
                        href="http://www.elnuevodiario.com.ni/turismo/301570">
                       <hgroup> <h2>El Reloj</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>La Torre del Reloj es el punto de referencia de los habitantes de la ciudad de Diriamba. No existe en Diriamba una dirección que no tome como punto de referencia al reloj.</p>

<p>Es considerado, después de la Basílica menor de San Sebastián, el segundo icono de la Ciudad.</p>
					</div>
					<!-- end of content -->
                    </section>


</div>



         </div>

          </div>


     
        <div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="Index.php">Inicio</a>
				<a href="DepartamentosInfo.php"  class="active">Ciudades</a>
				<a href="GaleriaDepartamento.php">Fotos</a>
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
