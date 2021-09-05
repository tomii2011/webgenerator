
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

</head>

<body>

    <center>

        <h1>Registrarse es simple</h1>

        <form method="GET">

            Ingrese un email<br>

            <input type="text" name="email" placeholder="email"><br><br>Ingrese una contraseña<br>
            <input type="password" name="pass" placeholder="pass"><br><br>Repita la contraseña<br>
            <input type="password" name="pass2" placeholder="pass2"><br><br>
            <input type="submit" name="Registrarse" value="Registrarse"><br><br>

        </form>

        <?php

        	if (isset($_GET["Registrarse"])) {
        	
	        	error_reporting(0);

	         		if ($_GET["pass"] == $_GET["pass2"]){
	        			
	        			 $fecha= date("Y-m-d H:i:s");

				  		  $con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
				  		
				  		 $ssql="INSERT INTO usuarios (idUsuario, email, password, fechaRegistro) VALUES (NULL, '".$_GET["email"] ."', '".$_GET["pass"]."', '".$fecha."');";
						 $res =mysqli_query($con,$ssql);
					 
				    }else{

				    	echo "contraseñas no coinciden";
				    
				    }
			    }
        	
         ?><

        <a href="login.php"> Volver </a>
    
    </center>

</body>

</html>