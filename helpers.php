<?php

function view($template, $vars = []){
	extract($vars);
	require "views/$template.php";
}

function controller($controller){
	if (empty($controller)){
		require "controllers/$home.php";
	}
}
