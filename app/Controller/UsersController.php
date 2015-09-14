<?php

class UsersController extends AppController {

	public $components = array('Session');

	public function top() {
		$this->layout = 'topLayout';
	}

	public function login() {}

	public function logout() {}

	public function signup() {
		if($this->request->is('post')){
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('ユーザー登録されました'));
				$this->redirect(array('action'=>'top'));
			}else{
				$this->Session->setFlash(__('ユーザー登録できませんでした。再度登録してください。'));
			}
		}
	}

}
