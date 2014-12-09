<?php

class HomeController{
	public function indexAction() {
		return new View('home', ['title' => 'My own PHP framework']);
	}
	public function cityAction($city){

	}
}