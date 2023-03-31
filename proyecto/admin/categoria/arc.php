<?php
    session_start();
?>
<html lang="en">
<head>
    <title>Human's Proyect</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de inicio">
	<link href="../../../css/custom.css"  rel="stylesheet">
	<link href="../../../libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="../../../js/bootstrap.bundle.min.js"></script>
    <script src="../../../jq/jquery-3.6.1.min.js"></script>
</head>
<body>
    <?php
        include "../../../modules/menu/menu_usuario.php"
    ?>
    <div class="container mt-4">
        <div class="row ">
            <div class="col-7 m-3 border p-4">
            <?php 
                $archivo=$_POST["archivo"];    
                include './archivos.php';
                $conexion = new Traer();
                $conexion->Archivos($archivo);
            ?>          
            </div>
            <div class="col-4 m-3 container bg-warning">
                <div class=" m-5 p-5 bg-white">
                    <button type="button" class="btn btn-success btn-lg" id="Edit" name="Edit"> Editar</button>
                    <br>
                    <button type="button" class="btn mt-2 btn-primary btn-lg" id="Down" name="Down"> Descargar</button>
                    <br>
                    <a href="./nose.php" type="button" class="btn mt-2 btn-danger btn-lg" id="Watch" name="Watch"> Ver </a>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>