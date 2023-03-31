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
        <div class="container p-4">
            <form>
                <div class="form-group">
                    <label for="answ">Pregunta</label>
                    <input type="text" class="form-control" id="">
                    <small id="answHelp" class="form-text text-muted">Se claro y conciso</small>
                </div>
                <div class="form-group">
                    <label for="type">Seleccione el tipo de pregunta:</label>
                    <select class="form-control" id="type">
                        <option>deslizar</option>
                        <option>multiple</option>
                        <option>abierta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
        
    </div>
</body>
</html>