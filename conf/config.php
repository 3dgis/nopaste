<?php
$config = array(
	'dsn' => 'mysql:host=localhost;dbname=nopaste',
	'username' => 'nopaste',
	'password' => 'nopaste',
	'options' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'),
	'debug' => true,
);

function getDbh() {
	global $config;
	$dbh = new PDO($config['dsn'], $config['username'], $config['password'], $config['options']);
	return $dbh;
}