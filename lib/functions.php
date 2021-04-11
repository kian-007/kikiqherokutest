<?php

function home_url($path = null){
    if(!$path){
        return SITE_URL;
    }
    return SITE_URL . $path;
}

function get_module_name(){
	//bejay $_SERVER['REQUEST_SCHEME'] az reshte https estefade kardim
    $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    include_once ('config.php');
    $req = str_replace(SITE_URL, '', $url);
    $question_mark_pos = strpos($req, '?');
    if($question_mark_pos !== false){
        $req = substr($req, 0, $question_mark_pos);
    }
	if(!$req || $req == '' || $req == '/'){
		return 'index.php';
	}else{
		return $req;
	}
}