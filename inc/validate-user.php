<?php

require 'inc/connection.php';

function validate_user() {
    return false;
}

$is_user_valid = validate_user();

if( ! $is_user_valid ) {
    die( 'Usuario no válido' );
}