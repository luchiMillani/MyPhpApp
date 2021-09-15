<?php


define ('SITE_VERSION', '0.0.1');
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$_SESSION['logged_in']   = true;
//$_SESSION['type_animal'] = 1; //permiso para acceder a la pagina

//header( 'Location: control.php' );

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
    <title>MY PHP APP - Login</title>
</head>

<body class="login">
    <h1>Logueate</h1>
    <form action="login.php" method="POST">
        <section>
            <label>Alias
                <input type="text" name="alias">
            </label>
            <label>Contraseña
                <input type="password" name="password">
            </label>
                <button type="submit">Log In</button>
            </section>
        
    </form>
</body>     

<?php


//var_dump ( $_POST ['user_name'] );
//var_dump ( $_POST ['password'] );
$alias_db  = 'Lucia';
$pass_db   = '12345';
$alias     = trim( $_POST['alias'] );
$password  = trim( $_POST['password'] );

//checkea que no estén vacios y que sean un string
if ( ! empty( $alias )  && ! empty( $password ) ) {
        if ( $alias === $alias_db && $password === $pass_db) {
            session_start();
            $_SESSION['checked'] = 'flama';
            header( 'Location: logged-in.php' );
    } else {
        header( 'Location: login.php' );
    }
}
