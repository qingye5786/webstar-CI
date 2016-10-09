<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('../config.php');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => $my_info_array['DB_HOST'],
	'username' => $my_info_array['DB_USER'],
	'password' => $my_info_array['DB_PWD'],
	'database' => $my_info_array['DB_NAME'],
	'dbdriver' => 'mysqli',
	'dbprefix' => $my_info_array['DB_PREFIX'],
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
