<?php
class Word extends AppModel{
	public $actAs = array('Search.Searchable');

	public $filterArgs = array(
		'word' => array('type' => 'like', 'field' => array('Word.word')),
		);

	public $belongsTo = array(
		'UserWord' => array(
			'className' => 'UserWord',
			'foreignKey' => 'id'
			)
		);
}
?>