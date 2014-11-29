<?php

class Request{
	protected $url;

	public function __construct($url){
		$this->url = $url;

		$segments = explode('/', $this->url);
	}

	public function getUrl(){
		return $this->url;
	}
	public function getController(){

	}
	public function getControllerFileName(){

	}
	public function getControllerClassName(){

	}
}