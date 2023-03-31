<?php
    session_start();
    class login{
        private $email;
        private $password;

        function inicio(){
            $email= $_POST['email'];
            include '../config/seguridad.php';
            $encriptar = new Seguridad();
            $password = $encriptar->encriptarP($_POST['password']);
            include ('conexion.php');
            $conexion = new Conexion();
            $con = $conexion->conectarDB();

            $sql="SELECT * FROM USUARIO WHERE email='".$email."' AND password='".$password."';";
            $resulset = $con->query($sql);
            if ($resulset->num_rows>0){
                while ($fila=$resulset->fetch_assoc()){
                   $_SESSION['Usuario']=$fila['nombre'];
                    header ('Location: ../admin/index.php');
                }
            }else{
                $_SESSION["Error"]="Porfavor verifique sus credenciales de acceso";
                header ('Location: ../index.php');
            }
            $con->close();
        }

    }
    $init = new login();
    $init->inicio();

?>