<?php

session_start();

define('SITE_TITLE', 'KikiCutest');

define('DB_FILENAME', 'myapp.data');

define('SITE_URL', $_SERVER['HTTP_X_FORWARDED_PROTO'].'://kikiq.herokuapp.com/');

foreach(glob('lib/*.php') as $lib_file){
    include_once ($lib_file);
}
connect_to_db();
initialize_users();
