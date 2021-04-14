<?php

function get_user($username){
	if(!$username){
		return null;
	}
	global $db;
	$result = $db->query("
		SELECT *
		FROM users
		WHERE username = '$username'
	");
	$row = $result->fetchArray(SQLITE3_ASSOC);
	return $row;
}
