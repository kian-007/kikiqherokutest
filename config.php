<?php
error_reporting(0);
define('SITE_TITLE', 'KikiCutest');

define('DB_FILENAME', 'myapp.data');

define('SITE_URL', 'https://kikiq.herokuapp.com/');

foreach(glob('lib/*.php') as $lib_file){
    include_once ($lib_file);
}

global $db;
$db = new SQLite3(DB_FILENAME);

function create_db_tables(){
	global $db;
	$db->query("
		CREATE TABLE IF NOT EXISTS users(
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		username TEXT NOT NULL,
		password TEXT NOT NULL,
		first_name TEXT NOT NULL,
		last_name TEXT NOT NULL
		);
	");
	
	$db->query("
		CREATE TABLE IF NOT EXISTS options(
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		option_name TEXT NOT NULL,
		option_value TEXT NOT NULL
		);
	");
	
	
}
create_db_tables();

