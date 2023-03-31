<?php
 class Traer {
	function conectarDB(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "gthumano";
        $con = new mysqli($servidor, $user, $password,$database);

        if($con->connect_error){
            
            $_SESSION["ErrorDB"]="No ha sido posible establecer la conexion con la base de datos";
            header('Location: config.php');
        }else{
            $status=1;
        }
        return $con;
    }
	function Archivos($id){
		$enlace = $this->conectarDB();
        $consulta = "SELECT * FROM prueba where id='".$id."';";
		if ($resultado = mysqli_query($enlace, $consulta)and($value = mysqli_fetch_assoc($resultado))) { 
            foreach ($resultado as $value){ 
		echo " <table class='table table-bordered text-center'>
		<thead>
			<td><b>Portada</b></td>
			<td colspan='2'><b>Info</b</td>
		</thead>
		<tr>
			<td rowspan='2'><img src='../../../img/	".$value['img']."'></td>
			<td><b class='text-start '>Titulo</b></td>
			<td ><i class='text-end'>".$value['titulo']."</i></td>
		</tr>
		<tr >
			<td><b class='text-start'>Tema</b></td>
			<td><i class='text-end'> ".$value['tema']."</i></td>
			
		</tr>
		<tr>
			<td colspan='3'><b>Descripcion</b</td>
		</tr>
		<tr>
			
			<td colspan='3'><i>".$value['descripcion']."</i></td>
		</tr>
		<tr>
			<td colspan='3'><b>Progreso</b></td>
		</tr>
		<tr>
			<td colspan='3'>
				<div class='progress mt-1' style='height: 100%'>
					<div class='progress-bar  bg-success progress-bar-striped progress-bar-animated' style='width:".$value['progreso']."%'>
					".$value['progreso']."%
					</div>
				</div>
			</td>
		</tr>
	</table>
			";
	}
	}
	
 	}
 }
?>