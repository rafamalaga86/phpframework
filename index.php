<?php

require 'config.php';
require 'helpers.php';

require 'library/Request.php';


if (empty($_GET['url'])){
	$url = "";
	echo "No hay nada!";
} else {
	echo "Ha encontrado una URL";
	$url = $_GET['url'];
}

$request = new Request($url);


var_dump($request->getUrl());


