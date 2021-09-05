<?php 
	session_start();
	session_destroy();
	
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

</head>

<body>

    <center>

        <h1>Generar Web de:</h1>

        <form method="GET">

            Ingrese un Nombre para la web<br><br>

            <input type="text" name="nom" placeholder="Nombre"><br><br>
            <input type="submit" name="crear" value="Crear web"><br><br>

        </form>
    </center>

</body>

</html>