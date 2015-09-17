<?php
class WordsController extends AppController {

	public $helpers = array('Html', 'Form');

	public $components = array('Search.Prg');

	public $uses = array('Word','UserProfile','UserWord');

    public function searchindex(){

        $this->Prg->commonProcess();

        //$conditions = $this->Word->parseCriteria($this->passedArgs);

        $this->set('searchfriends', $this->Word->find('all',array('conditions'=>$conditions,'order'=>array('UserWord.created DESC'))));
    	
        $this->set('tests',$this->Word->find('all'));

    	$word_friends = $this->Word->find('all'); //$word_friendsにテーブルwordsのデータを代入

       /* for ($i = 0; $i < count($word_friends); $i++){
            $conditions = array('UserProfile.user_id' => $word_friends[$i]['UserWord']['user_id']);
        }*/

		foreach($word_friends as $word_friend => $num){//それぞれのUserWordのuser_idでUserProfileのuser_idを検索したい　そのための変数
    		$conditions = array('UserProfile.user_id' => array($word_friend[$num]['UserWord']['user_id']));
    	}

        $this->set('conditions', $conditions);

    	//userprofileをuserwordのuser_idで検索したものを$search_useridsに代入
    	$search_user_ids = $this->UserProfile->find('all',array('conditions' => $conditions));

        $this->set('search_user_id',$search_user_ids);

        //$this->set('search_user',$this->UserProfile->find('all',array('conditions' => $conditions)));


    	foreach($word_friends as $word_friend){
    		$word_friend['UserProfile'] = $search_user_ids;
    	}

    }
}
?>