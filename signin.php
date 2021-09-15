<?php
define ('SITE_VERSION', '0.0.1');
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

<body>

    <main class="form">
            <h1>¡ BIENVENIDE !</h1>
            
            <!--<form action="processing.php">-->    
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
            </section>
            
            <section id="animalElegido">
                <label>
                    ¿Qué animal preferís de mascota?:
                    <select name="animalElegido"  required>
                        <option value="gatite"> Gatite</option>
                        <option value="perrite"> Perrite</option>
                    </select>
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
error_reporting(E_ALL);
ini_set('display_errors', 1);

//echo '<pre>';
//var_dump( $_POST );


$_POST['birthdate'];
//validar que no esté vacio, y su formato

if ( ! empty( $_POST['birthdate'] ) ) {
    $timestamp = strtotime( $_POST['birthdate'] );
    $formatted  = date( 'Y-m-d', $timestamp );

    if ( $_POST['birthdate'] === $formatted ) {
        header( 'Location: logged-in.php' );;
    } else{
        echo 'el formato recibido no es correcto';
    }
} else {
    echo 'Campo vacío de fecha de nacimiento';
}


    //checkea que no estén vacios y que sean un string
if (   !   empty( $_POST['name'] ) 
    && !   empty( $_POST['password'] )  
    && !   empty( $_POST['alias'] )
    && is_string( $_POST['name'] )
    && is_string( $_POST['password'] )
    && is_string( $_POST['alias'] ) ) {
 
} 

if ( ! empty( $_POST['email'] ) && filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
    header( 'Location: logged-in.php' );
} else {
    echo 'No esta bien';
}

