<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

foreach (glob("library/*.php") as $filename){
    require $filename;
}

if (empty($_GET['url'])){
	$url = "";
} else {
	$url = $_GET['url'];
}

$request = new Request($url);
$request->execute();