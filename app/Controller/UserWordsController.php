<?php
class UserWordsController extends AppController{
	public $helpers = array('Html', 'Form');

	public $uses = array('Word', 'UserWord');

	public function mypage(){
		
	//最新２０件のデータを取得する
	//find(string $type = 'first', array $params = array())
	$userwords = $this->UserWord->find('all',array('limit' => 20, 'order' => array('UserWord.modified DESC')));
	$this->set(compact('userwords'));

	}

	public function add(){
	//入力された単語をWordsテーブルから検索する
		debug($this->request->data);
        if ($this->request->is('post')) {
            //$this->UserWord->create();
        	//word,commentがあるとき表示されるif文を作る
            foreach ($this->request->data as $key => $AddWord) {
            	if(($AddWord['Word']['word'] !== '') && ($AddWord['UserWord']['comment'] !== '')) {
        			$searchword = $this->Word->find('first', array('conditions'=>array('word' => $AddWord['Word']['word'])));		
	            	var_dump($searchword);
	            	//入力されたwordがあるかどうかを確かめる
	            	if (empty($searchword)){
	            		$this->Word->create();
		            	$AddWord['Word']['study_count'] = 1;
		            	$this->Word->save($AddWord);
		            	$newid = $this->Word->getLastInsertID();
		            	$searchword['Word'] = $AddWord['Word'];
		            	$searchword['Word']['id'] = $newid;
            		}
	            	if(!empty($searchword)){
		            	$this->UserWord->create();
		            	$AddWord['UserWord']['user_id'] = 1;
		            	$AddWord['UserWord']['word_id'] = $searchword['Word']['id'];
		            	$AddWord['UserWord']['study_date'] = date("Y-m-d");
		            	$AddWord['UserWord']['rank'] = 3;
		            	$this->UserWord->save($AddWord);
            		} 
            	}
            }

            // if ($this->UserWord->save($this->request->data)) {
            //     $this->Session->setFlash(__('追加されました'));
            //     return $this->redirect(array('action' => 'add'));
            // }else{
            // $this->Session->setFlash(__('追加することができません'));
            // }
        }
	}

	public function edit(){

	}

	public function view(){
		
	}

	public function index(){
		$this->set('userwords',$this->UserWord->find('all'));
		
	}
}
?>