<?php
define ('SITE_VERSION', '0.0.1');
session_start();

$_SESSION = array();

header( 'Location: control.php' );

