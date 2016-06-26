<!DOCTYPE html>
<html>
<head>
    <title>Probando</title>

    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<div id="Container">
<!-- 
<img src="images/img1.jpg"> 
<img src="images/img2.jpg"> 
<img src="images/img3.jpg"> 
<img src="images/img4.jpg"> 
<img src="images/img5.jpg"> 
<img src="images/img6.jpg"> 
<img src="images/img7.jpg"> 
<img src="images/img8.jpg"> 
-->

<?php
    if (!isset($_GET["Granada"]) ){
//Include the Thumbnails, example:
//include_once("thumbnails.php"); php_thumbnails(IMAGES_FOLDER_NAME, THUMBNAILS_FOLDER_NAME, LIHGHTBOX OPTION: lb-on/lb-off;
include_once("Thumbnails.php"); 
php_Thumbnails("Granada","GranadaThumbs","lb-off");
 }
?>
  

<!-- Image -->
<?php

if (isset($_GET["Granada"]) ){
//Include the Image, example:
//include_once("thumbnails.php"); php_thumbnails("IMAGES_FOLDER_NAME","THUMBNAILS_FOLDER_NAME;
//If you want to use Lightbox, do not include the image at all!!
include_once("Image.php"); 
php_Image("Granada","GranadaThumbs");
}
?>

</div>



</body>
</html>