<?php
    
include("ExpirarSesion.php");

?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>Nicaventura - Información Granada</title>
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
					<li><a href="Index.php" ><span></span>Inicio</a></li>
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

            <li style="text-align: left; list-style-type: square;"><a href="#granada" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Granada</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#economia" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Economía</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#lago" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Lago Cocibolca</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#malecon" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Malecón de Granada</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#isletas" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Isletas de Granada</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#mombacho" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Reserva Natural Volcán Mombacho</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#museo" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Museo San Francisco</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#parque" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Parque Colón (Parque Central)</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#plaza" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Plaza de la Independencia y Obelisco</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#puerto" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Capitanía del Puerte y el Muelle de Granada</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#catedral" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Catedral de Granada</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#palacio" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Palacio Episcopal</a></li>
            <li style="text-align: left; list-style-type: square;"><a href="#otros" style="color: #fff; font-size: 25px; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Otros Lugares Turísticos</a></li>
           
        
        </ul>
        
        
        <div class="main">
			<div class="shell">
                
                            
<!-- services -->
                <section id="granada">

        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php">
							<img src="Fotografias/Granada/DSCN0587.JPG" alt="Ciudad de Granada" />
							<h3>Granada</h3>
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
						<a  class="various fancybox.iframe" href="//www.youtube.com/embed/aXTbDvVgdoM">
                            <hgroup> <h2>Granada</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Fue fundada en 1524 por Francisco Hernández de Córdoba y es una de las primeras ciudades europeas en territorio continental americano. A diferencia de otras poblaciones que aseveran lo mismo, la ciudad de Granada no sólo fue el asentamiento de la conquista, sino también una ciudad matriculada en los registros oficiales de la Corona de Aragón y el Reino de Castilla en España.</p>

<p>La ciudad es la cabecera del Departamento de Granada, está situada en la ribera del Lago Cocibolca o Lago de Nicaragua. En 2005 contaba con 105,171 habitantes, en su mayoría descendientes europeos y mestizos.</p>

<p>Granada, también es conocida como: La Gran Sultana, por su apariencia morisca y andaluza, a diferencia de León, su ciudad hermana y rival histórica, la cual tiene tendencias más castellanistas.</p>

<p>Granada es la Ciudad turística por excelencia de Nicaragua. Posee una arquitectura colonial y neoclásica exquisita y bien conservada. Es uno de los sitios más visitados de América, por sus fiestas como la Hípica.</p>
					</div>
					<!-- end of content -->
                    </section>

    
                <section id="economia">
					<!-- content -->
					<div class="content">
						<h2 >Economía</h2>
						<p>La actividad turistica es su mayor fuente de Ingresos, los atractivos del centro histórico de Granada y los atractivos naturales del Lago y sus alrededores dinamizan la industria turística de la ciudad y el departamento en general. Igualmente, la pesca que se lleva a cabo en el Lago Cocibolca.</p>

<p>Por su posición a orillas del Lago de Nicaragua, Granada, dada la estrategia de su puerto lacustre, fue durante siglos el principal centro mercantil del país. Esta opulencia económica propició varios embates de la piratería en los Siglos XVII y XVIII.</p>

					</div>
					<!-- end of content -->
                    </section>

                 <section id="lago">
                                                
<!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=IMG_0725.JPG">
							<img src="Fotografias/Granada/IMG_0725.JPG" alt="Lago Cocibolca" />
							<h3>Lago Cocibolca</h3></a>
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
					<a class="various fancybox.iframe" href="http://www.cira-unan.edu.ni/index.php?s=62">
                    <hgroup> <h2>Lago Cocibolca</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Los españoles que fundaron la ciudad llamaron a este lago: "Mar Dulce" por la gran extensión que ocupa, actualmente se le llama: "Lago Cocibolca", "Gran Lago de Nicaragua" o "Lago de Nicaragua", navegar en sus aguas representa un atractivo turístico para todos los visitantes de la ciudad.</p>

<p>Entre las características del lago destacan:</p>

<p>* Es el único lago de agua dulce del mundo con tiburones.</p>
<p>* Tiene oleaje y mareas igual que los mares.</p>
					</div>
					<!-- end of content -->
                    </section>

                
                
                <section id="malecon">                       
<!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0541.JPG">
							<img src="Fotografias/Granada/DSCN0541.JPG" alt="Malecón de Granada" />
							<h3>Malecón de Granada</h3>
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
						<a class="various fancybox.iframe" href="//www.youtube.com/embed/YY2ablt7WVg">
                            <hgroup> <h2>Malecón de Granada</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>El malecón de Granada es un lugar espectacular para caminar y observar el Gran lago de Nicaragua. Ahora ya remodelado y de un ambiente de la naturaleza, agradable.</p>
					</div>
					<!-- end of content -->
                    </section>


                <section id="isletas">

                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=IMG_0752.JPG">
							<img src="Fotografias/Granada/IMG_0752.JPG" alt="Isletas de Granada" />
							<h3>Isletas de Granada</h3>
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
                        href="http://www.elnuevodiario.com.ni/turismo/274963-isletas-de-granada-paraiso-de-mar-dulce">
                            <hgroup> <h2>Isletas de Granada</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Las Isletas de Granada, en el Lago Cocibolca, se encuentran a poca distancia de la ciudad y forman un archipiélago de más de 360 pequeñas islas de tamaño variado, de fácil acceso y son un atractivo turístico paradisíaco.</p>

<p>Las isletas son producto de una avalancha de piedra y lodo que se desprendió de las laderas del volcán Mombacho. El frente aluvial de la avalancha es la península de Asese.</p>

<p>Según los estudios realizados por expertos Thomas Shea, Benjamin van Wyk de Vries y Martín Pilato, las isletas son producto de una avalancha del Mombacho y no una erupción, que puede observarse fácilmente utilizando Google Earth.</p>

<p>Sus variadas atracciones, hoteles y comidas hacen de Granada la ciudad más visitada por turistas en Nicaragua.
</p>
					</div>
					<!-- end of content -->
                    </section>


                  <section id="mombacho">
					<!-- content -->
					<div class="content">
						<a class="various fancybox.iframe" href="http://www.mombacho.org/"><hgroup> <h2>Reserva Natural Volcán Mombacho</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>El parque nacional Volcán Mombacho está ubicado al sur de la ciudad, es un sitio encantador, santuario de belleza, impresionantes paisajes, flora y fauna. También tienes una gran vista a la gran sultana o mejor dicho granada la ciudad turística.
</p>
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
						<a href="GaleriaGranada.php?Granada=DSCN0589.JPG">
							<img src="Fotografias/Granada/DSCN0589.JPG" alt="Museo San Francisco" />
							<h3>Museo San Francisco</h3>
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
                        href="http://www.inc.gob.ni/index.php?option=com_content&task=view&id=71&Itemid=85">
                        <hgroup> <h2>Museo San Francisco</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>El Convento de San Francisco es una de las mayores antigüedades de la ciudad, fue fundado en 1529 bajo el nombre de Inmaculada Concepción por Fray Toribio de Benavente eclesiástico de la orden Franciscana, conocido como Motolinia por su vida sencilla y pobre.</p>

<p>En marzo del 2003 fue inaugurada su restauración como centro cultural; y desde entonces alberga funciones de museo y centro bibliotecario. Cuenta con seis salas de exhibición permanente, Arqueología, Imaginería Religiosa, Pintura Primitivista, Imágenes de Granada de 1940-1980 y Maqueta del Centro Histórico.
</p>
					</div>
					<!-- end of content -->
                    </section>


                
                <section id="parque">

                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=IMG_0257.JPG">
							<img src="Fotografias/Granada/IMG_0257.JPG" alt="Parque Colón (Parque Central)" />
							<h3>Parque Colón (Parque Central)</h3>
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
						<h2>Parque Colón (Parque Central)</h2>
						<p>Fue la antigua plaza de armas de la Granada colonial. Posteriormente tiangue hasta concluir en el parque colon. Se construyó en 1880 como Parque Central y el 12 de Octubre de 1892, se inaugura con el nombre de Parque Colón, en conmemoración del IV Centenario del descubrimiento de América por el genovés, Cristóbal Colón.</p>

<p>Su estilo del parque es el resultado de numerosas transformaciones ocurridas desde su construcción. La disposición original presentaba unos espejos de agua en las esquinas que definían ejes coincidentes con la fuente central de memoria barroca. Esta fuente se complementó con un templete de estilo ecléctico y sistema constructivo tradicionales: En la actualidad se mantienen esto dos últimos elementos, añadiéndose cuatro pequeños quioscos en las esquinas, un obelisco dedicado a Rubén Darío hacia el Sur y un monumento a la madre en el costado Oeste.</p>

<p>En su última remodelación se homogenizó su pavimentación, con la plaza de los leones y de la independencia logrado una integración urbanística completa como conjunto respetando su vegetación.
</p>
					</div>
					<!-- end of content -->
                    </section>

                        <section id="plaza">
                
                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0585.JPG">
							<img src="Fotografias/Granada/DSCN0585.JPG" alt="Plaza de la Independencia y Obelisco" />
							<h3>Plaza de la Independencia y Obelisco</h3>
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
						<h2>Plaza de la Independencia y Obelisco</h2>
						<p>El obelisco es un monumento dedicado a los héroes de la independencia en el primer centenario de este acontecimiento en 1921. Se encuentra ubicada frente al Parque Central.</p>
					</div>
					<!-- end of content -->
                    </section>

                <section id="puerto">
                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0545.JPG">
							<img src="Fotografias/Granada/DSCN0545.JPG" alt="Capitanía del Puerto y el Muelle de Granada" />
							<h3>Capitanía del Puerto y el Muelle de Granada</h3>
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
                        href="//www.youtube.com/embed/6xqee2rfDig">
						<hgroup> <h2>Capitanía del Puerto y Muelle de Granada</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>Esta última obra de 700 pies de largo y 16 de ancho se debe a la labor del Alcalde Doctor Juan Mena Arana. Construido bajo la dirección del arquitecto José Pasos Díaz. Se encuentra ubicada al final de la calle la Calzada.</p>
					</div>
					<!-- end of content -->
                    </section>

                
                   <section id="catedral">

                <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0582.JPG">
							<img src="Fotografias/Granada/DSCN0582.JPG" alt="Catedral de Granada" />
							<h3>Catedral de Granada</h3>
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
                        href="http://www.elnuevodiario.com.ni/especiales/236286">
						<hgroup> <h2>Catedral de Granada</h2><h4 style="margin-top: -25px; margin-bottom: 25px;">Click Aquí</h4></hgroup></a>
						<p>La Catedral de Granada es uno de los edificios más prominentes de la ciudad. Está ubicada en la parte este del Parque Central en Granada (Parque Colón).</p>

<p>La catedral ha sido reconstruida muchas veces después de su construcción en 1583. El edificio fue completamente destruido por William Walker en 1856.</p>

<p>A finales del siglo XIX, la construcción de la nueva catedral se detuvo debido a la falta de fondos. Con nuevos planes hechos por el arquitecto Andrés Zapata, la construcción se continuó y finalizó en 1915.</p>

<p>El estilo neoclásico se reconoce fácilmente en la fachada del edificio. En la catedral hay cuatro capillas. En su interior alberga una imagen de la Virgen de Concepción, patrona de la ciudad, del Siglo XVIII, muy venerada por los granadinos.
</p>
					</div>
					<!-- end of content -->
                    </section>


                
                  <section id="palacio">
                   <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0584.JPG">
							<img src="Fotografias/Granada/DSCN0584.JPG" alt="Palacio Episcopal" />
							<h3>Palacio Episcopal</h3>
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
						<h2>Palacio Episcopal</h2>
						<p>Construido aproximadamente en el año 1913 con estilo neoclásico. Es la residencia del Obispo de Granada, se encuentra ubicado frente al Parque Central.</p>

<p>Datos Históricos: El actual sitio del palacio Episcopal fue ocupado a fines del siglo XIX por una construcción militar era una edificación con fortines rematados con barrotes de figuras geométricas. Este cuartel quedó reducido a escombros con la explosión del 27 de Septiembre de 1894 fueron afectados el cuartel.</p>

<p>La actual casa de los leones hasta la esquina. Un extenso predio quedó por mucho tiempo en el sitio donde se ubicaba este edificio, hasta que en 1913 la familia de Salvador Cardenal. Construyo el actual edificio. Aquí nació Pedro Joaquín Chamorro Cardenal. Hoy es el palacio episcopal por el legado que hiciera al fallecer Isabel Arguello viuda de Cardenal hacia 1920, al obispo de la ciudad para su residencia.
</p>
					</div>
					<!-- end of content -->
                    </section>


                  <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0573.JPG">
							<img src="Fotografias/Granada/DSCN0573.JPG" alt="Calle La Calzada" />
							<h3>Calle La Calzada</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                 <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0488.JPG">
							<img src="Fotografias/Granada/DSCN0488.JPG" alt="Parque Los Monos (Xalteva)" />
							<h3>Parque Los Monos (Xalteva)</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                 <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0487.JPG">
							<img src="Fotografias/Granada/DSCN0487.JPG" alt="Iglesia de Xalteva" />
							<h3>Iglesia Xalteva</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                
                 <section id="otros">
					<!-- content -->
					<div class="content">
						<h2>Otros Lugares Turísticos</h2>
						 <p>* Calle La Calzada.</p>
                         <p>* Parque de Los Monos (Xalteva).</p>
                         <p>* Iglesia Xalteva.</p>
                        <a class="various fancybox.iframe" 
                        href="http://iglesialamerced.org/datos/historia-de-la-iglesia-de-la-merced/">
                         <p>* Iglesia La Merceded (Click Aquí)</p></a>
                         <p>* Iglesia Guadalupe.</p></a>
                         <p>* Fortaleza San Pablo, en Las Isletas.</p>
					</div>
					<!-- end of content -->
                    </section>

                 <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0530.JPG">
							<img src="Fotografias/Granada/DSCN0530.JPG" alt="Iglesia La Merced" />
							<h3>Iglesia La Merced</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                 <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=DSCN0569.JPG">
							<img src="Fotografias/Granada/DSCN0569.JPG" alt="Iglesia de Guadalupe" />
							<h3>Iglesia Guadalupe</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->

                 <!-- services -->
        <section class="services1">
			<div class="shell">
                <div class="boxes1">            
        <div class="clear"></div>   
					<div class="box1">
						<a href="GaleriaGranada.php?Granada=IMG_0727.JPG">
							<img src="Fotografias/Granada/IMG_0727.JPG" alt="Fortaleza San Pablo , en Las Isletas." />
							<h3>Fortaleza San Pablo, en Las Isletas.</h3>
						</a>
					</div>
        <div class="clear"></div>   
                        
					<div class="cl">&nbsp;</div>
				</div>
			</div>
                     
		</section>
		<!-- end of services -->


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
