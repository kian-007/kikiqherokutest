<?php

session_start();

define('SITE_TITLE', 'KikiCutest');

define('DB_FILENAME', 'myapp.data');

define('SITE_URL', 'https://kikiq2.herokuapp.com/');

foreach(glob('lib/*.php') as $lib_file){
    include_once ($lib_file);
}
connect_to_db();
initialize_users();
