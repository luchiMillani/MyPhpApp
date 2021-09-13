<?php
$arrayApi = file_get_contents ( 'https://api.thecatapi.com/v1/images/search' );


$fondoGatite = json_decode ( $arrayApi, true );
echo '<pre>';
var_dump ( $fondoGatite );