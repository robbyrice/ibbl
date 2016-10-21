<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function init()
{
	$mysqli = new mysqli('localhost', 'ibbl', 'password');
	if($mysqli->query("SHOW DATABASES LIKE 'ibbl'")->num_rows === 0)
	{
		$mysqli->query("CREATE DATABASE `ibbl`");
	}
	$mysqli->select_db('ibbl');
	if($mysqli->query("SHOW TABLES LIKE 'ci_sessions'")->num_rows === 0)
	{
		$mysqli->query("CREATE TABLE `ci_sessions` (
				`session_id` varchar(40) NOT NULL default '0',
				`ip_address` varchar(16) NOT NULL default '0',
				`user_agent` varchar(120) NOT NULL,
				`last_activity` int(10) unsigned NOT NULL default '0',
				`user_data` text,
				PRIMARY KEY  (`session_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		");
	}
	$mysqli->close();
}