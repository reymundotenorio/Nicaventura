<?php
    
$url = $_REQUEST["Ver"];
$enlace = $url."&Ver=Todo";

   header("location: $enlace");
   exit;
?>
