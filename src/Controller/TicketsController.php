<?php
namespace App\Controller;

class TicketsController extends AppController{
	
	public function index() {
		$this->viewBuilder()->setLayout('frontend');
	}

}

?>