<?php
namespace App\Controller;

class HomeController extends AppController{
	public function index() {
		// $this -> render('/Home/index');
		$this->viewBuilder()->setLayout('frontend');
	}

	public function search() {
		$this->viewBuilder()->setLayout('frontend');
	}
	
}

?>