<?php
define ('SITE_VERSION', '0.0.1');
error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,400&display=swap" rel="stylesheet">
        <title>MY PHP APP</title>
    </head>
    <body id="index">
        <section id="">
	    	<h1>¡ BIENVENIDE !</h1>
	    	<p> INICIA SESIÓN </p>
		    <a href="login.php">Logueate</a>
		    <p> REGISTRATE </p>
	    	<a href="signin.php">Registrate</a>
        </section>
    </body>
</html>
