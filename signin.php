<?php
define ('SITE_VERSION', '0.0.1');
require 'inc/connection.php';
?>

<?php
$name          = trim( $_POST['name'] );
$lastname      = trim( $_POST['lastname'] );
$email         = trim( $_POST['email'] );
$birthdate     = trim( $_POST['birthdate'] );
$alias         = trim( $_POST['alias'] );
$password      = trim( $_POST['password'] );

//validar que no esté vacio, y su formato

if ( ! empty( trim( $birthdate ) ) ) {
    $timestamp = strtotime( $birthdate );
    $formatted  = date( 'Y-m-d', $timestamp );

    if ( $birthdate === $formatted ) {
        header( 'Location: logged-in.php' );
    } else{
        echo 'el formato recibido no es correcto';
    }
} else {
    echo 'Campo vacío de fecha de nacimiento';
}


//checkea que no estén vacios y que sean un string
if (   !   empty( $name ) 
    && !   empty( $password )  
    && !   empty( $alias )
    && is_string( $name )
    && is_string( $password )
    && is_string( $alias ) ) {
 
} 

if ( ! empty( $email ) && filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    header( 'Location: logged-in.php' );
}

if (
    ! empty( $name ) && is_string( $name ) &&
    ! empty( $lastname ) && is_string( $lastname ) &&
    ! empty( $email ) && 
    ! empty( $birthdate ) &&
    ! empty( $alias ) && is_string( $alias ) &&
    ! empty( $password ) && is_string( $password ) 
)
{
    $connection->query(
        "INSERT INTO `usuaries` (`name`, `lastname`, `email`, `birthdate`, `password`, `alias`) 
        VALUES (
            '" . $connection->real_escape_string( $name ) . "', 
            '" . $connection->real_escape_string( $lastname ) . "',
            '" . $connection->real_escape_string( $email ) . "',
            '" . $connection->real_escape_string( $birthdate ) . "',
            '" . $connection->real_escape_string( $password ) . "', 
            '" . $connection->real_escape_string( $alias ) . "',
        );" 
    );
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
    <title>MY PHP APP - Signin</title>
</head>

<body class='signin'>

    <main class="form">
            <h1>¡ BIENVENIDE !</h1> 
            <form action="signin.php" method="POST">
            <section id="datosPersonales">
                <label> <class= “datosPersonales” > 
                    Nombre:
                    <input type="text"  name="name" placeholder="Ingresa tu nombre" value="" required>
                </label> 
                <label>
                    Apellido:
                    <input type="text"  name="lastname"  placeholder="Ingresa tu apellido" value="" required>
                </label>
                <label>
                    E-mail:
                    <input type="email" name="email" placeholder="porejemplo@gmail.com" value="" required>
                </label>
                <label>
                    Fecha de nacimiento:
                    <input type="date" name="birthdate" >
                </label> 
                <label>
                    Alias:
                    <input type="text" name="alias"  value="" required>       
                </label>
                <label>
                    Password:
                    <input type="password" name="password"  value="" required>       
                </label>
                <label>
                    <input type="submit">
                </label>
            </section>
                
                
 
        </form>
    </main>

</body>
</html>
<?php
