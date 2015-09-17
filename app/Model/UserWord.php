<?php
class UserWord extends AppModel{
	//public $actsAs = array('Search.Searchable');

	//public $filterArgs = array('word_id' => array('type'=>'like', 'field'=>array('UserWord.word_id', 'UserWord.comment', 'UserWord.rank')), );

    public $validate = array('rank' => array('rule' => 'notEmpty'),
    						'word' => array('rule' => 'notEmpty'),
    						'comment' => array('rule' => 'notEmpty'));

	public $belongsTo = array(
		'Word' => array(
			'className' => 'Word',
			'foreignKey' => 'word_id'
			),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			),
		);
}
?>