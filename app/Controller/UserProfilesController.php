<?php
class UserProfilesController extends AppController{
	//public $name = 'UserProfile';
	public $uses = array('UserProfile'); //モデルを使用

	function beforeFilter(){
        parent::beforeFilter();
    
    }
	
	

	public function index($user_id = null){
		//set('送信する変数名',$this->Model名->find('条件'));
		
		$conditions = array('user_id', $user_id);
		$userprofile = $this->UserProfile->find('first', array('conditions'=>$conditions));
		$this->set('userprofile', $userprofile);

	}

	

	public function edit($user_id = null){

		$conditions = array('user_id', $user_id);
		$userprofile = $this->UserProfile->find('first', array('conditions'=>$conditions));
		$this->set('userprofile', $userprofile);
		
	
        
        if($this->request->is(array('post', 'put'))){
        	$this->UserProfile->id=$this->request->data['id'];
            if($this->UserProfile->save($this->request->data)){
                $this->Session->setFlash(__('更新されました'));
                return $this->redirect(array('action' => 'index', $user_id));
            }
        }
 
        if(!$this->request->data){
            $this->request->data = $userprofile;
        }
    }
	

}

?>