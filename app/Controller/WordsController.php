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

        $num=0;

		foreach($word_friends as $word_friend){

    		$conditions = array('UserProfile.user_id' => array($word_friend['UserWord']['user_id']));
            //それぞれのUserWordのuser_idでUserProfileのuser_idを検索したい　そのための変数
            $search_user_profile = $this->UserProfile->find('first',array('conditions' => $conditions));

            $word_friends[$num]['UserProfile'] = $search_user_profile['UserProfile'];

            $num++;
    	}

        $this->set('word_friends',$word_friends);
    	

    }
}
?>