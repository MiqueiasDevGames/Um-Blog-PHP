<?php
$url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
$rotas = explode( '/' , $url );



$path = '../posts/' . $rotas[1] . '.json';


$arquivo = file_get_contents($path);

echo $arquivo;

?>