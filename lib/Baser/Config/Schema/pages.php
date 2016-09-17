<?php

/* Pages schema generated on: 2013-03-23 04:03:08 : 1363981208 */

class PagesSchema extends CakeSchema {

	public $name = 'Pages';

	public $file = 'pages.php';

	public $connection = 'default';

	public function before($event = array()) {
		return true;
	}

	public function after($event = [])
	{
		$db = ConnectionManager::getDataSource($this->connection);
		if (get_class($db) !== 'BcMysql') {
			return true;
		}

		if (isset($event['create'])) {
			switch ($event['create']) {
				case 'pages':
					$tableName = $db->config['prefix'] . 'pages';
					$db->query("ALTER TABLE {$tableName} CHANGE contents contents MEDIUMTEXT");
					break;
			}
		}
	}

	public $pages = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary'),
		'contents' => array('type' => 'text', 'null' => true, 'default' => null),
		'draft' => array('type' => 'text', 'null' => true, 'default' => null),
		'page_template' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'code' => array('type' => 'text', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci')
	);

}
