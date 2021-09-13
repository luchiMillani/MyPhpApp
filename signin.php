<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<pre>';
var_dump( $_POST );

//checkea que no estén vacios y que sean un string
if ( ! empty ( $_POST ['user_name'] ) 
    && ! empty( $_POST ['password'] )  
    && is_string( $_POST['user_name'])
    && is_string( $_POST['password'])
) {
    echo 'todo esta bien'; // si todo sale bien
} else {
  echo 'No está todo bien'; // si no sale bien
}

if ( ! empty( $_POST ['email'] ) 
    && filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) 
  
) {
    echo 'Esta bien';
} else {
    echo 'No esta bien';

}

