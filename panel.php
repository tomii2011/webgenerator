<?php
	error_reporting(E_WARNING);
	session_start();
	$usu1 = $_SESSION['usuario'];
	$pass1 = $_SESSION['password'];

	$msg = "";
	$dom = "";

	 $con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
    $queryusuario = mysqli_query($con,"SELECT idUsuario FROM usuarios WHERE email ='$usu1' and password = '$pass1'");


    while ($row = mysqli_fetch_array($queryusuario, MYSQLI_NUM)) {
    	$a = $row[1]; 
	}


	if (isset($usu1) && !empty($usu1)) {

		$dom = getDom($con);

		if (isset($_POST['crear'])) {

			$web = $_POST['web'];

			if ($web == "") {

				$msg = "No se ha ingresado una pagina web";

			}else{

				$web = $usu1.$web;

				$sql = "SELECT dominio FROM 'webs' WHERE 'dominio' = '$web'";
				$response = mysqli_query($con,$sql);

				if (mysqli_num_rows($response) <= 1) {

					$msg = "Este dominio ya existe";

				}else{

					$sql = "INSERT INTO 'webs' ('idUsuario','dominio') VALUES ('$usu1','$web')";
					$response = mysqli_query($con,$sql);

					if ($response) {

						$msg = "Se ha registrado correctamente";
						echo shell_exec("./wix.sh '$web' '$web'");
						$dom = getDom($con);

					}else{

						echo "Error" .mysqli_error($con);

					}
				}
			}
		}


		if (isset($_POST['download'])) {

			$carpeta = $_POST['download'];
			$zip = "$carpeta.zip";

			echo shell_exec("zip -r".zip. " ".$carpeta);
			$location = "location: " .$zip;

			if (!header($location)) {

				$msg = "Zip no encontrado";

			}
		}


		if (isset($_POST['delete'])) {

			$carpeta = $_POST['delete'];

			echo shell_exec(" rm -r " .$carpeta);

			$sql = "DELETE FROM 'webs' WHERE 'dominio' = '$carpeta'";
			$response = mysqli_query($con,$sql);

			if ($response) {

				$msg  = "Se elimino correctamente";
				$dom = getDom($con);

			}else{

				$msg = "Error";

			}
		}
	}else{

		echo $msg;
		header("location: login.php");

	}

	echo $msg;

	function getDom($con){

		$dom = "";

		if ($_SESSION['admin'] == "admin") {

			$sql = "SELECT dominio FROM webs";

		}else{

			$usu = $_SESSION['usuario'];
			$sql = "SELECT dominio FROM webs WHERE idUsuario = '$usu'";

		}


		$response = mysqli_query($con,$sql);


		if (mysqli_num_rows($response) >= 1){

			$dom .= "<ol>";

			while ($row = mysqli_fetch_array($response,MYSQLI_ASSOC)) {
				
				$domm = $row['dominio'];

				$dom .= 
				"<li>
					<a href = '".$domm."'>".$domm."</a> 
					<button name='download' value='".$domm."'>Descargar WEB </button>
					<button name='delete' value='".$domm."'>Eliminar </button>
				</li>";

			}

			$dom .= "</ol>";

		}
		return $dom;
	}

?>

<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>

	<center>

		<h1>Bienvenido a tu panel</h1>
	
		<a href="logout.php">Cerrar sesión de <?php echo "ID: ".$a ?> </a>
		<br><br>
	
		<form method="POST">
		
			Generar Web de: <input type="text" name="web"><br><br>
			<input type="submit" name="crear" value="Crear web">
	
		</form>

		<h1>Lista de paginas</h1>
	
		<form method="POST">
		
			<?php echo $dom ?>
	
		</form>

	</center>

</body>
</html>