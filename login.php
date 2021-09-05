<?php
if  (isset($_GET["login"])) {

    $usu= $_GET["email"];
    $pass= $_GET["password"];
    $con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
    $queryusuario = mysqli_query($con,"SELECT * FROM usuarios WHERE email ='$usu' and password = '$pass'");
    $nr = mysqli_num_rows($queryusuario);  
     
     if ($nr == 1) {
         session_start();
         $_SESSION['usuario']=$usu;
         header('Location:panel.php');

     }else{

        echo "contraseña o email incorrectos";

     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <center><h1><u>webgenerator Tomas muñoz </u> </h1>

    <form method="Get">
        <input type="email" name="email"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login"><br><br>
    </form>

    <a href="register.php"> Registrarse </a>

    </center>
</body>
</html>