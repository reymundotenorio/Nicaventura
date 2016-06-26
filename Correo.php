<?php
function EnviarCorreo($usuario, $correo, $contrasena, $aleatorio){

$mensaje = '<html><body>';

$mensaje .= '<div align="center"><img src="http://nicaventura.tk/css/images/LogoNicaventura.png" alt="Nicaragua" style="height: 102px; width: 613px;"/></div>';

$mensaje .= '<header><h1 style="color: #1284af; font-weight: bold; margin-bottom:20px; font-size: 22px; text-align: center;">Registro en nicaventura.tk</h1></header>';

$mensaje .= '<p><h3 style="font-weight: bold; margin-bottom:10px; margin-top:10px; font-size: 18px; text-align: center;">Gracias Por Registrarse en Nicaventura.tk, esperamos que siga visitándonos y exploremos juntos la belleza natural de Nicaragua.</h3></p>';

$mensaje .= '<p><h4 style="font-weight: bold; margin-bottom:10px; margin-top:10px; font-size: 18px; text-align: center;">Estos Son Sus Datos de Registro.</h4></p>';

$mensaje .= '<div align="center"><table rules="all" style="border-color: #666; text-align: center; margin: 0 auto;" cellpadding="10">';

$mensaje .= "<tr style='background: #eee;'><td><strong>Nombre de Usurio:</strong> </td><td>".$usuario."</td></tr>";

$mensaje .= "<tr style='background: #eee;'><td><strong>Contraseña:</strong> </td><td>".$contrasena."</td></tr>";


$mensaje .= '<tr style="background: #eee;"<td><strong>Debes activar tu cuenta pulsando este enlace:</strong></td><td><a href="'."http://www.nicaventura.tk/Activacion.php?id=$aleatorio".'"'.">Confirmar Cuenta Aquí</a></td></tr>";

$mensaje .= "</table></div>";

$mensaje .= "</body></html>";

$para      =  $correo;
$asunto    = 'Confirmar Cuenta Nicaventura.tk';
$cabeceras = 'From: reymundotenorio@nicaventura.tk' . "\r\n" .
             'Reply-To: reymundotenorio@nicaventura.tk' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-Type: text/html; charset=ISO 8859-1' . "\r\n";

 
  
if(mail($para, $asunto, $mensaje, $cabeceras)) {
  echo "<script type=\"text/javascript\">
           //alert('Debe Activar Su Cuenta Con El Enlace Enviado a Su Correo Electrónico');
           //location.href = 'Index.php?Register=Correct'; 
           //location.href = 'Index.php'; 
       </script>"; 
        exit;
} else {
   echo "<script type=\"text/javascript\">
           alert('Error Al Enviar Correo');
           //location.href = 'Index.php'; 
       </script>"; 
        exit;
}

}



?>





