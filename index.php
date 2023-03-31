<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de inicio">
	<link href="./css/custom.css"  rel="stylesheet">
	<link href="./libs/bootstrap-icons/bootstrap-icons.css"  rel="stylesheet">
	<script src="./js/bootstrap.bundle.min.js"></script>
  <link type="text/css" rel="stylesheet" href="./foro/estilo.css" >
</head>
<body>
    <?php include "./modules/menu/menu.php" ?>

    <div class="container" id="lider">
            <div class="row justify-content-center">
              <div class="col-3">
              </div>
                <div class="col-4">
                        <div id="lider" class="carousel slide " data-bs-ride="carousel" href="lider">
                        <!--Indicadores del carrousel/ slider/slideShow-->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
                            </div>
                                <!-- Las imagenes del carrusel/ slider/slideShow-->
                                
                            <div  class="carousel-inner">
                                    <!-----d-blook para qure las imagenes queden en bloque y w-100 y ocupe el 100% de la caja-->
                                <div class="carousel-item active ">
                                <br><br><br><br>
                                    <img src="./img/img.jpg" class="d-blook w-100" style="width:auto">
                                </div>

                                <div class="carousel-item">
                                <br><br><br><br>
                                    <img src="./img/img2.jpg" class="d-blook w-100" style="width:auto">
                                </div>

                                <div class="carousel-item">
                                <br><br><br><br>
                                    <img src="./img/img3.jpg" class="d-blook w-100" style="width:auto">
                                </div>
                            </div>
                            <!--Los controles de izquierda y derecha-->
                                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                        </div>
                  </div>
                  <div class="col-3">
                    
                    <!--CHAT PUBLICO-->
    <div class="container text-center mt-2">
    <div class="" id="wrapper">
    <div id="menu">
     </div>
        
        <div id="chatbox"><?php
    if(file_exists("./foro/log.html") && filesize("./foro/log.html") > 0){
        $handle = fopen("./foro/log.html", "r");
        $contents = fread($handle, filesize("./foro/log.html"));
        fclose($handle);
        
        echo $contents;
    }
    ?></div>
        
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Estas seguro de cerrar la sesion?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
</script>
<script>
//If user submits the form
$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
</script>
<script>
    //Load the file containing the chat log
	function loadLog(){		

$.ajax({
    url: "./foro/log.html",
    cache: false,
    success: function(html){		
        $("#chatbox").html(html); //Insert chat log into the #chatbox div				
      },
});
}
</script>
<script>
//Load the file containing the chat log
function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: "./foro/log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
</script>
<script>
    setInterval (loadLog, 200);	//Reload file every 2500 ms or 
</script>
</body>
</html>
<?php

?>
</br>
</br>
<div class="container-fluid text-center "> 
<div class="container"> 
 <h2>Monumentos Nacionales</h2> 
                 <p style="color: #495057;"   class="lead">Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta con bosques tropicales, las montañas de los Andes y varias plantaciones de café. En Bogotá, su capital a gran altura, el distrito Zona Rosa es famoso por sus restaurantes y tiendas. Cartagena, en la costa del Caribe, tiene una Ciudad Antigua colonial amurallada, un castillo del siglo XVI y arrecifes de coral cercanos.</p> 
                 </div>
 </div>           
                 <br>
                 <br>

                 <hr class="featurette-divider">
<div class="container">
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Catedral de Sal</h2>
    <p class="lead">La Catedral de la Sal es un recinto construido en el interior
       de las minas de sal de Zipaquirá, en el departamento de Cundinamarca, Colombia.
El diseño arquitectónico y artístico de la nueva Catedral de Sal, es propio del
 arquitecto bogotano Roswell Garavito Pearl, el cual salió aprobado tras la elección del
  proyecto que contenía un total de 44 propuestas en un concurso convocado por la Sociedad
   Colombiana de Arquitectos en 1990; mientras que la dirección técnica de ingeniería fue
    ejecutada por el ingeniero bogotano Jorge Enrique Castelblanco Reyes.</p>
  </div>
  <div class="col-md-5">
  <img src="./img/catedral.jpg" alt="" class="img-fluid">

  </div>
</div>
</div>
<hr class="featurette-divider">

    <?php include './modules/footer/footer.html' ?>
<!--Scripts -->
<script>

</script>
</body>
</html>