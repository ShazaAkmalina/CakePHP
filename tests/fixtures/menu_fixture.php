<?php

class MenuFixture extends CakeTestFixture {
	public $name = 'Menu';
	public $import = 'Menu';
	public $records = array(
		array(
			'id' => '3',
			'title' => 'Main Menu',
			'alias' => 'main',
			'description' => '',
			'status' => '1',
			'weight' => '',
			'link_count' => '4',
			'params' => '',
			'updated' => '2009-08-19 12:21:06',
			'created' => '2009-07-22 01:49:53',
		),
		array(
			'id' => '4',
			'title' => 'Footer',
			'alias' => 'footer',
			'description' => '',
			'status' => '1',
			'weight' => '',
			'link_count' => '2',
			'params' => '',
			'updated' => '2009-08-19 12:22:42',
			'created' => '2009-08-19 12:22:42',
		),
		array(
			'id' => '5',
			'title' => 'Meta',
			'alias' => 'meta',
			'description' => '',
			'status' => '1',
			'weight' => '',
			'link_count' => '4',
			'params' => '',
			'updated' => '2009-09-12 06:33:29',
			'created' => '2009-09-12 06:33:29',
		),
		array(
			'id' => '6',
			'title' => 'Blogroll',
			'alias' => 'blogroll',
			'description' => '',
			'status' => '1',
			'weight' => '',
			'link_count' => '2',
			'params' => '',
			'updated' => '2009-09-12 23:30:24',
			'created' => '2009-09-12 23:30:24',
		),
	);
}

?>