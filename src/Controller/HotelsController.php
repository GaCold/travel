<?php
namespace App\Controller;

class HotelsController extends AppController{
	public function index() {
		$this->viewBuilder()->setLayout('frontend');
	}

	public function hoteldetail(){
		$this->viewBuilder()->setLayout('frontend');
    }

    public function adminviewhotel(){
    	$this->viewBuilder()->setLayout('frontendadmin');
    }
    public function adminedithotel(){
    	$this->viewBuilder()->setLayout('frontendadmin');
    }
}

?>