<?php

$config = [
	'DB'       => [
		'HOSTNAME' => 'localhost',
		'DATABASE' => 'covid',
		'USER'     => 'root',
		'PASSWORD' => ''
	],
	'BASE_URL' => '/creativebape-opdracht/public',
	'ROOT'     => dirname( dirname(__DIR__)),
	'PRIVATE'  => dirname(__DIR__),
	'WEBROOT'  => dirname(dirname(__DIR__)) . '/public'
];

return $config;
