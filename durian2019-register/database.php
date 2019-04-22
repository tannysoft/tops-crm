<?php

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|
*/

$active = 'prodouct';

// for localhost
$db['local'] = array(
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'topscrm_durian_register'
);

// for prodouct
$db['prodouct'] = array(
	'hostname' => 'localhost',
	'username' => 'top_user',
	'password' => '1isylzjkoot0Ut@',
	'database' => 'top_db'
);
