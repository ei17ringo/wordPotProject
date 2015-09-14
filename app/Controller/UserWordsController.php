<?php
class UserWordsController extends AppController{
	public function mypage(){

	}

	public function add(){

	}

	public function edit(){

	}

	public function view(){
		
	}

	public function index(){
		$this->set('userwords',$this->Post->find('all'));
		
	}
}
?>