<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


function validate_user() {
    return false;
}

$is_user_valid = validate_user();

if( ! $is_user_valid ) {
    die( 'Usuario no válido' );
}