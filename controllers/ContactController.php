<?php

class ContactController{
	public function indexAction(){
		return new View('contact', ['title' => 'My own OOPHP framework, CONTACT']);
	}
}