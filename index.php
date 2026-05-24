<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="dive2">
        <h1>Captura de datos personales</h1>
        <h2>Ingresa los datos que se te piden</h2>
        <p>Mi primera encuesta</p>
        <hr>

        <form action="resultados.php" method="POST">
            
            <label for="Name">Nombre</label>
            <input type="text" id="Name" name="Name" placeholder="Ingresa tu nombre" required>
            <hr>

            <button type="submit">¡Ingresamos Datos!</button>
            
        </form>
    </div>

</body>
</html>