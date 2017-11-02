<?php 
namespace App\Controller;

class BlogsController extends AppController{

	public function index(){
		$this->viewBuilder()->setLayout('frontend');
	}

	public function blogdetail(){
		$this->viewBuilder()->setLayout('frontend');
	}

	public function uiblog(){
		$this->viewBuilder()->setLayout('frontend');
	}
}