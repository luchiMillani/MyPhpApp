<?php

$connection = new mysqli( 'localhost', 'root', '', 'my-php-app' );

if ( $connection->errno !== 0 ) {
    die( 'Hubo un error en la conexión' );
}
