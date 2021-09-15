<?php
define ('SITE_VERSION', '0.0.1');
session_start();
if ( $_SESSION['checked'] !== 'flama' ) {
    header( 'Location: login.php' );
    die( 'error');
}

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
    <title>MY PHP APP - logged</title>
</head>
<body>
    <h1>LLEGASTE BIEN!</h1>
</body>