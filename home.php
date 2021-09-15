<?php
define ('SITE_VERSION', '0.0.1');
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ( $_SESSION['logged_in'] ) {
    echo 'OK';
} else {
    echo 'NOT OK';
}

die();

require 'inc/validate-user.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?version=<?php echo SITE_VERSION ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,400&display=swap" rel="stylesheet">
    <title>MY PHP APP</title>
</head>
<?php
$arrayApi = file_get_contents ( 'https://api.thecatapi.com/v1/images/search' );


$fondoGatite = json_decode ( $arrayApi, true );
echo $fondoGatite[0]['url'];

echo '<pre>';
var_dump( $fondoGatite );

