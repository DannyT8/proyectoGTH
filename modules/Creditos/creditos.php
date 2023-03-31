<!DOCTYPE html>
<html lang="en">
<head>
    <title>Human's Proyect</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de inicio">
	<link href="../../css/custom.css"  rel="stylesheet">
	<link href="../../libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="../../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-primary">
    <?php
    include "../menu/menusecc.php"
    ?>
    <div class="container-fluid p-5" style="border-top: 1px solid white;">
        <div class="container text-center text-light">
            <b style="font-size:179px;">MUCHO TEXTO</b>
        </div>
        <div class="container bg-white text-center p-4">
            <h1 class="text-dark">Terminos y Condiciones</h1>
            <p  class="fs-3 text-muthed">Dejamos nuestros terminos y condiciones de uso, todo tipo de actividad directamente relacionada a la pagina es unica y exclusivamente de propiedad privada. Su uso incorrecto puede generar controversia, a lo cual actuaremos con respecto a la ley 53x0 del 2002.</p>
            <div id="CC">

            </div>
            <div id="Close">
                <a class="fs-1 btn btn-outline-primary" onclick="CargarCreditos()">Leer más</a> 
            </div>
              
              
                      
        </div>
    </div>
    <script>
        function CargarCreditos(){
            var Credit='<textarea class="fs-2" name="" cols="60" rows="50">';
            for (let i = 0;i<15;i++){
                Credit+='Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore ea dolorem! Incidunt atque perspiciatis non modi veritatis voluptatum ab ducimus corrupti, aut et adipisci soluta, sit ratione est in.';
            } 
            document.getElementById('CC').innerHTML= Credit+'</textarea>';
            document.getElementById('Close').innerHTML= '<a class="fs-1 btn btn-outline-danger" onclick="Close()">Cerrar</a>';
        }
        function Close(){
            document.getElementById('CC').innerHTML= '';
            document.getElementById('Close').innerHTML= '<a class="fs-1 btn btn-outline-primary" id="Close" onclick="CargarCreditos()">Leer más</a>';
        }
    </script>
</body>
</html>