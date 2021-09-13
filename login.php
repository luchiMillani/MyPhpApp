<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//var_dump ( $_POST ['user_name'] );
//var_dump ( $_POST ['password'] );

//checkea que no estén vacios y que sean un string
if ( ! empty ( $_POST ['user_name'] ) 
    && ! empty( $_POST ['password'] ) 
    && is_string( $_POST['user_name'])
    && is_string( $_POST['password'])
) {
    echo 'todo esta bien'; // si todo sale bien
} else {
    echo 'no esta todo bien'; // si no sale bien
}