<?php

	namespace App\Controller;
	/**
	* 
	*/
	class UsersController extends AppController {
		
		public function index(){
			$this->viewBuilder()->setLayout('frontend');
		}
		public function profile(){
			$this->viewBuilder()->setLayout('frontend');
		}
		public function deleteblog(){
			$this->viewBuilder()->setLayout('frontend');
		}
		
	}

?>