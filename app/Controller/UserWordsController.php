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
		//debug($this->request->data);
        if ($this->request->is('post')) {
            //$this->UserWord->create();
        	//word,commentがあるとき表示されるif文を作る
            foreach ($this->request->data as $key => $AddWord) {
            	if(($AddWord['Word']['word'] !== '') && ($AddWord['UserWord']['comment'] !== '')) {
        			$searchword = $this->Word->find('first', array('conditions'=>array('word' => $AddWord['Word']['word'])));
	            	//入力されたwordがあるかどうかを確かめる
	            	if (empty($searchword)){
	            		$this->Word->create();
		            	$AddWord['Word']['study_count'] = 1;
		            	$this->Word->save($AddWord);
		            	$newid = $this->Word->getLastInsertID();
		            	$searchword['Word'] = $AddWord['Word'];
		            	$searchword['Word']['id'] = $newid;
		            	var_dump($AddWord);
	            	}

	            	 	$this->UserWord->create();
		            	$user_id = $this->Auth->user('id');
		            	$AddWord['UserWord']['user_id'] = $user_id;
		            	$AddWord['UserWord']['word_id'] = $searchword['Word']['id'];
		            	$AddWord['UserWord']['study_date'] = date("Y-m-d H:i:s");
		            	$this->UserWord->save($AddWord);
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

	public function edit($id = null){
		$userwords = $this->UserWord->findById($id);
		$this->set(compact('userwords'));
		$this->UserWord->id=$id;
		if ($this->request->is('post')) {
	        if ($this->UserWord->save($this->request->data)) {
	            $this->Session->setFlash('編集しました！');
	            return $this->redirect(array('action'=>'view'));
	      	} else {
	      		$this->Session->setFlash('編集に失敗しました！');
	      	}
    	}
    	$this->request->data=$this->UserWord->findById($id);
	}

	public function view($id = null){
			try {
			$results = $this->UserWord->findById($id);

			$enc_word = urlencode($results['Word']['word']);
			$url = "http://public.dejizo.jp/NetDicV09.asmx/SearchDicItemLite?Dic=EJdict&Word=$enc_word&Scope=HEADWORD&Match=STARTWITH&Merge=AND&Prof=XHTML&PageSize=1&PageIndex=0";
	    
	    	$response_xml_data = file_get_contents($url);
	    	$data = simplexml_load_string($response_xml_data);
	 		debug($data);

			
	 		debug($data->TitleList->DicItemTitle['ItemID']);

	 		$itemID = $data->TitleList->DicItemTitle['ItemID'];

	 		$item_url="http://public.dejizo.jp/NetDicV09.asmx/GetDicItemLite?Dic=EJdict&Item=$itemID&Loc=&Prof=XHTML";
	 		$result_xml_data = file_get_contents($item_url);
	    	$result = simplexml_load_string($result_xml_data);
	 		debug($result);
			
		} catch (Exception $e) {
			
		}

		$this->set('userwords',$results);
	}

	public function index(){
		$conditions = array('UserWord.user_id'=>array($this->Auth->user('id')));
		$this->set('userwords',$this->UserWord->find('all', array('conditions'=>$conditions, 'order'=>array('UserWord.created DESC'))));

		try {
			$results = $this->UserWord->findById($id);

			$enc_word = urlencode($results['Word']['word']);
			$url = "http://public.dejizo.jp/NetDicV09.asmx/SearchDicItemLite?Dic=EJdict&Word=$enc_word&Scope=HEADWORD&Match=STARTWITH&Merge=AND&Prof=XHTML&PageSize=1&PageIndex=0";
	    
	    	$response_xml_data = file_get_contents($url);
	    	$data = simplexml_load_string($response_xml_data);
	 		//debug($data);

			
	 		//debug($data->TitleList->DicItemTitle['ItemID']);

	 		$itemID = $data->TitleList->DicItemTitle['ItemID'];

	 		$item_url="http://public.dejizo.jp/NetDicV09.asmx/GetDicItemLite?Dic=EJdict&Item=$itemID&Loc=&Prof=XHTML";
	 		$result_xml_data = file_get_contents($item_url);
	    	$result = simplexml_load_string($result_xml_data);
	 		debug($result);
			
		} catch (Exception $e) {
			
		}

		if ($this->request->is('post')){
			$AddWord = $this->request->data;
			//debug($AddWord);
			foreach ($this->request->data as $key => $AddWord) {
            	if(($AddWord['Word']['word'] !== '') && ($AddWord['UserWord']['comment'] !== '')) {
        			$searchword = $this->Word->find('first', array('conditions'=>array('word' => $AddWord['Word']['word'])));
	            	//入力されたwordがあるかどうかを確かめる
	            	if (empty($searchword)){
	            		$this->Word->create();
		            	$AddWord['Word']['study_count'] = 1;
		            	$this->Word->save($AddWord);
		            	$newid = $this->Word->getLastInsertID();
		            	$searchword['Word'] = $AddWord['Word'];
		            	$searchword['Word']['id'] = $newid;
		            	var_dump($AddWord);
	            	}

	            	 	$this->UserWord->create();
		            	$user_id = $this->Auth->user('id');
		            	$AddWord['UserWord']['user_id'] = $user_id;
		            	$AddWord['UserWord']['word_id'] = $searchword['Word']['id'];
		            	$AddWord['UserWord']['study_date'] = date("Y-m-d H:i:s");
		            	$this->UserWord->save($AddWord);
            	}
            }

        }

	
	}
		
	
}
?>