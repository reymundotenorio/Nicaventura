          <?php
                        
  include("ExpirarSesion.php");

 
	//comprobar la existencia del usuario
	if (!empty($_SESSION["usuario"]) ){
   header('Location:Index.php');    
    }

   ?>

<!DOCTYPE html>

<html lang="es" class="no-js"> 
    <head>
        <meta charset="utf-8" />
        <title>Ingresar o Registrarse: Nicaventura</title>
        <link rel="shortcut icon" type="image/x-icon" href="css/images/Nicaragua-Ico.ico" />
        <link rel="stylesheet" type="text/css" href="css/Formulario Demo.css" />
        <link rel="stylesheet" type="text/css" href="css/Formulario.css" />
		<link rel="stylesheet" type="text/css" href="css/Animacion Formulario.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-1.5-min.js"></script>
    

        <script> Nowtalk = []; Nowtalk.config = {fullscreen: false, session_id: 0, base_url: "https://www.nowtalk.com", widget_url: "https://www.nowtalk.com/chat", chat_id: "53e39bafe084e", debug: false }; document.write(unescape("%3Cscript src='https://www.nowtalk.com/build/embed_nowtalk.min.js?' type='text/javascript'%3E%3C/script%3E")); </script>

        <script>
            $(document).ready(function () {

                 $("#NombreUsuarioS").keyup(function (e) {
                    //obtenemos el texto introducido en el campo
                 
                    if (e.keyCode == 13) {
                        $('#ContrasenaS').focus();
                    }
                });

                 

                var consulta;

                //hacemos focus
                //  $("#Nombre").focus();

                //comprobamos si se pulsa una tecla
                $("#Nombre").keyup(function (e) {
                    //obtenemos el texto introducido en el campo
                    consulta = $("#Nombre").val();
                    var er = new RegExp(/\s/);

                    if (er.test(consulta)) {
                        $("#resultado3").html("<span style='font-weight:bold;color:red;'>No Se Permiten Espacios Vacíos</span>");
                        $("#Nombre").val(consulta.replace(/^\s+/, '').replace(/\s+$/, ''));
                    }
                    else {
                        $("#resultado3").html("<span style='font-weight:bold;color:red;'></span>");
                    }

                    if (e.keyCode == 13) {
                        $('#Email').focus();
                    }

                    //hace la búsqueda
                    $("#resultado").queue(function (n) {

                        $("#resultado").html('<img src="ajax-loader.gif" />');

                        $.ajax({
                            type: "POST",
                            url: "ComprobarUsuario.php",
                            data: "b=" + consulta,
                            dataType: "html",
                            error: function () {
                              //  alert("error petición ajax");
                            },
                            success: function (data) {


                                if (data == 1) {
                                    $("#resultado").html("<span style='font-weight:bold;color:green;'>Nombre Usuario Disponible</span>");
                                    n();
                                }
                                else {
                                    $("#resultado").html("<span style='font-weight:bold;color:red;'>Nombre Usuario No Disponible</span>");
                                    n();
                                }
                            }
                        });

                    });

                });

                //hacemos focus
                //  $("#Nombre").focus();

                var consulta1;

                //comprobamos si se pulsa una tecla
                $("#Email").keyup(function (e) {
                    //obtenemos el texto introducido en el campo
                    consulta1 = $("#Email").val();


                    if (e.keyCode == 13) {
                        $('#Contrasena').focus();
                    }

                    //hace la búsqueda
                    $("#resultado1").queue(function (n) {

                        $("#resultado1").html('<img src="ajax-loader.gif" />');

                        $.ajax({
                            type: "POST",
                            url: "ComprobarCorreo.php",
                            data: "b=" + consulta1,
                            dataType: "html",
                            error: function () {
                              //  alert("error petición ajax");
                            },
                            success: function (data) {



                                if (data == 1) {
                                    $("#resultado1").html("<span style='font-weight:bold;color:green;'>Correo Disponible</span>");
                                    n();
                                }
                                else {

                                    /*   $('#Regis').submit(function () {
                                    $('input[type="submit"]', this).attr('disabled', 'disabled');
                                    });*/

                                    $("#resultado1").html("<span style='font-weight:bold;color:red;'>El Correo Ya Existe</span>");
                                    //  $("#Email").val('');
                                    n();
                                }



                            }
                        });

                    });

                });


                $("#Contrasena").keyup(function (e) {
                    


                    if (e.keyCode == 13) {
                        $('#Confirm').focus();
                    }
                });

                var contra;
                var confirm;

                //comprobamos si se pulsa una tecla
                $("#Confirm").keyup(function (e) {
                    //obtenemos el texto introducido en el campo
                    confirm = $("#Confirm").val();
                    contra = $("#Contrasena").val();

                    if (confirm == contra) {
                        $("#resultado2").html("<span style='font-weight:bold;color:green;'>Contraseña Coincide</span>");
                    }
                    else {
                        $("#resultado2").html("<span style='font-weight:bold;color:red;'>Contraseña No Coincide</span>");
                    }


                });


            });


</script> 
    </head>

    <body>
         
<?php
 if(!empty($_REQUEST["Expire"])){
   ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Sesión Ha Expirado",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Su sesión en Nicaventura ha caducado, por favor, inicie sesión nuevamente
</div>
<?php
}
?>


<?php
 if(!empty($_REQUEST["Espacio"])){
   ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Nombre de Usuario Sin Espacios en Blanco",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    history.go(-1);
                   // location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 El nombre de usuario a registrar no es bálido, por favor ingrese su nombre de usuario sin espacios en blanco
</div>
<?php
}
?>


<?php
 if(!empty($_REQUEST["NombreUsuario"])){
   ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Nombre de Usuario No Disponible",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    history.go(-1);
                    //location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 El nombre de usuario a registrar no está disponible, por favor ingrese un nombre de usuario distinto
    </div>
<?php
}
?>

<?php
 if(!empty($_REQUEST["Correo"])){
   ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Correo No Disponible",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    history.go(-1);
                   // location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Su dirección de correo a registrar no es válida porque ya ha sido registrada en la página. Por favor ingrese una dirección de correo distinta o revise su correo y verifique sus datos y sí ha sido activada su cuenta.
    </div>
<?php
}
?> 
 
  <?php
 if(!empty($_REQUEST["ConfirmarPass"])){
   ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Contraseñas No Coinciden",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    history.go(-1);
                    //location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Sus contraseñas no coinciden, por favor, vuelva  intentarlo.
    </div>
<?php
}
?>        
       
        
         
          <?php
        if(!empty($_REQUEST["Activar"])){
            ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Cuenta No Ha Sido Activada",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Su cuenta no ha sido activada, para iniciar sesión por favor active su cuenta en el enlace que se ha enviado a su dirección de correo electrónico
</div>

<?php
 
}

 ?>  
 

         
          <?php
        if(!empty($_REQUEST["NoLogin"])){
            ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            title: "Usuario y/o Contraseña Incorrecta",
            resizable: false,
            buttons: {
                Cerrar: function () {
                    $(this).dialog('close');
                    location.href = 'Formulario.php';
                }
            }
        });
    });
</script>
<div id="dialog" style="display: none">
 Su nombre de usuario y/o la contraseña introducidos son incorrectos
</div>

<?php
 
}

 ?>  
               <!-- wrapper -->
	<div id="wrapperhead">
		<!-- header -->
		<header  class ="Cabe">
			<div class="shell">
				<h1 id="Logotipo"><a href="Index.php">Nicaventura</a></h1>
                <hgroup> 
                <h1 id="TituloG">Nicaventura</h1>
                <h2 id="TituloP">Una Ruta Hacia El Paraiso</h2>
                </hgroup>
				
                <div class="contact">

<p><a href="https://www.facebook.com/nicaventuraweb" target="_blank">
                    <img src="css/images/FacebookLogo.png" alt="FB" style="height: 70px; width: 85px; margin-top: -20px;" />
                    </a></p> 

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
         

        <div class="container">
       <!--
            <div class="codrops-top">
                <a href="Index.php">
                    <strong>&laquo; Volver a la Página de Inicio</strong> </a>
              
                <div class="clr"></div>
            </div>
             -->
            <header>
                <h1>Ingresar o Registrarse en <span> Nicaventura</span></h1>
				<nav class="codrops-demos">
					<span>Click en <strong>"Regístrate"</strong> si aún no eres miembro de la página</span>
				
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="IniciarSesion.php" method ="post"  autocomplete="on"> 
                                <h1>Ingresar</h1> 
                                <p> 
                                    <label for="Username" class="uname" data-icon="u" > Su Nombre de Usuario o  Email </label>
                                    <input id ="NombreUsuarioS"title="Ingrese Su Nombre de Usuario o Email"  name="Username" required="required" type="text" placeholder="Nombre Usuario o Email"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Su Contraseña </label>
                                    <input id="ContrasenaS" title="Ingrese Su Contraseña" name="Password" required="required" type="password" placeholder="Contraseña" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="Keeplog"  id="Keeplog" value="Keeplog" class="Check" /> 
									<label for="loginkeeping">Mantener la sesión iniciada</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Ingresar" /> 
								</p>
                                <p class="change_link">
									Aún no eres miembro?
									<a href="#toregister" class="to_register">Regístrate</a>
								</p>
                            </form>
                        </div>

                      
                         

                        <div id="register" class="animate form">
                            <form  action="Registrar.php" autocomplete="on" method="post" id="Regis" name="Regis"> 
                                <h1> Registrarse </h1> 

                                <div id="resultado3"></div>
                                  <div id="resultado"></div>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Su Nombre de Usuario</label>
                                    <input id="Nombre" name="Nombre" required="required" type="text" placeholder="Nombre Usuario" />
                                  
                                </p>
                                   
                                   <div id="resultado1"></div>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Su Email</label>
                                    <input id="Email" name="Email" required="required" type="email" placeholder="Email"/> 
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Su Contraseña </label>
                                    <input id="Contrasena" name="Contrasena" required="required" type="password" placeholder="Contraseña"/>
                                </p>
                                <div id="resultado2"></div>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Por Favor, Confirme Su Contraseña </label>
                                    <input id="Confirm" name="Confirm" required="required" type="password" placeholder="Confirmar Contraseña"/>
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" name="Registrar" value="Registrarse"/> 
								</p>
                                <p class="change_link">  
									Ya eres Miembro?
									<a href="#tologin" class="to_register"> Ven e Inicia Sesión </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>

         </div> 
       
        <!--
        <div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="Index.php">Inicio</a>
				<a href="DepartamentosInfo.php">Ciudades</a>
				<a href="GaleriaDepartamento.php" class="active">Fotos</a>
				<a href="#">Videos</a>
				<a href="#">Contáctenos</a>
			</nav>
			<p class="copy">Derechos Reservados &copy; 2014 Diseñado Por <a href="https://www.facebook.com/djrex10/" target="Reymundo">Reymundo Tenorio</a> & <a href="https://www.facebook.com/erickfrancisco.lararomero" target="Erick">Erick Lara</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>

        -->
         
         
    </body>
</html>