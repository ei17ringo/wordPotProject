<?php

class UsersController extends AppController {

	public $components = array('Session');

	public function beforeFilter(){
		parent::beforFilter();
		//$this->Auth->allow('signup');
	}

	public function top() {
		$this->layout = 'topLayout';
	}

	public function login() {
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{

				$this->Session->setFlash(__('ユーザー名かパスワードが違います。もう一度入力してください。'));
				$this->redirect(array('action'=>'top'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function signup() {
		if($this->request->is('post')){
			$this->User->create();
			//debug($this->request->data);
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('ユーザー登録されました'));
				$this->redirect(array('action'=>'top'));
			}else{
				$this->Session->setFlash(__('ユーザー登録できませんでした。再度登録してください。'));
			}
		}
	}

}
