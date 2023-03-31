<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de ubicacion">
	<link href="../../css/custom.css"  rel="stylesheet">
	<link href="../../libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="../../js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php  include "../menu/menusecc.php" ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <h1>
                    Ubicacion
                </h1>
                <p class="fs-3 text-break">Esta es la ubicacion de nuestras oficinas para mayor informacion sobre los procesos de nuestra empresa</p>
                <p id="p1" onload="verCoordenadas()"></p>
            </div>
            <div class="col-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0190916655592!2d-73.3426163447104!3d5.564187532184762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c73ca38df29%3A0x921edc14621aa1f2!2sfundacionitedris!5e0!3m2!1ses!2sco!4v1668577887694!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
   
    <?php include '../footer/footer.html' ?>
<!--Scripts -->
<script>/*
            const x = document.getElementById("p1");
            function verCoordenadas(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(verPosicion,verError);
                }else{
                    x.innerHTML = "Su navegador no soporta Geolocalizacion";
                }
            }
            function verPosicion(posicion){
                x.innerHTML = "Latitud: " + posicion.coords.latitude + "<br> " + 
                "Longitud: " + posicion.coords.longitude;
                let latlon = posicion.coords.latitude + "," + posicion.coords.longitude;
                document.getElementById("mapa").innerHTML = '<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q='+latlon+'&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px; .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>';
            }

            function verError (error){
                switch(error.code){
                    case error.PERMISSION_DENIED:
                    x.innerHTML = "El usuario ha negado los permisos para geolocalizacion";
                    break;
                    case error.POSITION_UNAVAIBLE:
                    x.innerHTML = "La informacion no esta disponible";
                    case error.TIMEOUT:
                    x.innerHTML = "La solicitud ha excedido el tiempo de respuesta";
                    case error.UNKNOWN:
                    x.innerHTML = "Un error desconocido no ha permitido la ejecucion";
                    break;
                }
            }*/
        </script>
</body>
</html>