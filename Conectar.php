<?php

  /* 
$host="localhost";
$uname="root";
$pass="1234";
$database = "Nicaventura";
	

$connection=mysql_connect($host,$uname,$pass) or die("Conexión a la Instancia Fallo");
if($connection){
//echo "<script languaje='javascript'>alert('Conectado a La la Instancia Exitosamente')</script>";  
}
else{
echo "<script languaje='javascript'>alert('Conexión a la Instancia Fallo')</script>";    
}

$selectdb=mysql_select_db($database, $connection) or 
die("Conexión a Base de Datos Falló");	

if($selectdb){
 //   echo "<script languaje='javascript'>alert('Conectado a La Base de Datos Exitosamente')</script>";  
}
else{
echo "<script languaje='javascript'>alert('Conexión a Base de Datos Falló')</script>";    
}
*/

class Conexion{

    private $Servidor;
    private $UsuarioMySql;
    private $ContrasenaMySql;
    private $BaseDeDatos;
    private $Conectar;
    
   public function Conexion(){

$host="";
$uname="";
$pass="";
$database = ";

        $this->Servidor = $host;
        $this->UsuarioMySql = $uname;
        $this->ContrasenaMySql = $pass;
        $this->BaseDeDatos = $database;
        $this->ConectarMySql();
        $this->SeleccionarBD();

        
    }

    public function ConectarMySql(){
        $this->Conectar = mysql_connect($this->Servidor, $this->UsuarioMySql, $this->ContrasenaMySql) or die (mysql_errno());
        mysql_select_db($this->BaseDeDatos) or die (mysql_errno());

       // return $this->Conectar;
    }

    public function SeleccionarBD(){
        mysql_select_db($this->BaseDeDatos) or die (mysql_errno());
    }

    public function CerrarConexion(){
        $Conectar->close();
    }
}

?>

