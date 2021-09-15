<?php
define ('SITE_VERSION', '0.0.1');
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$_SESSION = array();

header( 'Location: control.php' );

