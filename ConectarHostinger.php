<?php

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
$database = "";

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

