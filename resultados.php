<?php
// PASO 8: Recibimos el dato enviado por el formulario de manera segura
$nombreUsuario = "";
if (isset($_POST['Name'])) {
    $nombreUsuario = $_POST['Name'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>
        <img src="Meme.jfif">
        
        <h2>¡Bien Hecho, <?php echo htmlspecialchars($nombreUsuario); ?>!</h2>

        <button type="button" onclick="lanzarAlerta()">Regresar al Inicio</button>
    </div>

    <div id="popUpOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:998;"></div>
    
    <div id="popUpBox" style="display:none; position:fixed; top:30%; left:35%; width:30%; background:white; padding:20px; border-radius:15px; text-align:center; border: 2px solid black; z-index:999;">
        <p>¿Seguro que quieres volver al inicio para registrar otro dato?</p>
        <div id="closeModal"></div> 
    </div>

    <script src="app.js?v=2.1"></script>

    <script>
        function lanzarAlerta() {
            var Alert = new CustomAlert();
            Alert.render();
        }
    </script>
</body>
</html>