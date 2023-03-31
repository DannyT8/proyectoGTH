<?php
class Conexion{
    private $bd_host;
    private $bd_usuario;
    private $bd_password;
    private $bd_base;
    function conectarDB(){

        $bd_host = "localhost";
        $bd_usuario = "root";
        $bd_password = "";
        $bd_base = "foro";
        
        $con = mysql_connect($bd_host, $bd_usuario, $bd_password);
        mysql_select_db($con, $bd_base);

        if($con->connect_error){
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }else{
            $status=1;
        }
        return $con;
    }
}
?>