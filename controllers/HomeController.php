<?php

class HomeController{
	public function indexAction() {
		return new View('home', ['title' => 'My own OOPHP framework']);
	}
	public function cityAction($city){

	}
}