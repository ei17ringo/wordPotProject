<?php
class UserWordsController extends AppController{
	public $helpers = array('Html', 'Form');

	public $uses = array('Word', 'UserWord');

	public function mypage(){

	}

	public function add(){
	//入力された単語をWordsテーブルから検索する
		$searchword = $this->Word->find('first', array('conditions'=>array('word' => 'add')));
		var_dump($searchword);
		debug($this->request->data);
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