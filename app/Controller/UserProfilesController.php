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
		$this->set('userword', $userword);
	}

	

	public function edit($user_id = null){

		$conditions = array('user_id', $user_id);
		$userprofile = $this->UserProfile->find('first', array('conditions'=>$conditions));
		$this->set('userprofile', $userprofile);
		
	
        
        if($this->request->is(array('post', 'put'))){
        	$this->UserProfile->id=$this->request->data['id'];
            debug($_FILES);
            $fileName = $_FILES['image']['name'];
            if (!empty($fileName)) {
                $ext = substr($fileName, -3);
                if ($ext != 'jpg' && $ext != 'gif') {
                    $error['image'] = 'type';
                }
            }

            if (empty($error)) {
                //画像アップロード
                $image = date('YmdHis') . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], '/wordPot/webroot/memberpicture/' . $image);

                $_SESSION['join'] = $_POST;
                $_SESSION['join']['image'] =$image;
                header('Location: index.ctp');
                exit();
            }

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