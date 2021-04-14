<?php


function get_user($username){
	if(!$username){
		return null;
	}
	global $pdo;
	$result = $pdo->query("
		SELECT *
		FROM users
		WHERE username = '$username'
	");
	$row = $result->fetch(PDO::FETCH_ASSOC);
	return $row;
}

function user_exists($username){
	$user = get_user($username);
	return isset($user['id']);
}

function user_count(){
	global $pdo;
	$result = $pdo->query("
		SELECT *
		FROM users
	");
	$counter = 0;
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		$counter++;
	}
	return $counter;
}

function initialize_users(){
	if(user_count() == 0){
		global $pdo;
		$default_pw_hash = sha1('1234');
		$pdo->query("
			INSERT INTO users (username, password, first_name, last_name) VALUES
			('admin', '$default_pw_hash', '', '');
		");
	}
}

function add_user($userdata){
	$username = $userdata['username'];
	if(!$username){
		return;
	}
	$password = sha1($userdata['password']);
	$first_name = $userdata['first_name'];
	$last_name = $userdata['last_name'];
	
	global $pdo;
	if(!user_exists($username)){
		$pdo->query("
			INSERT INTO users (username, password, first_name, last_name) VALUES
			('$username', '$password', '$first_name', '$last_name');
		");
	}else{
		$pdo->query("
            UPDATE users
            SET password='$password', first_name='$first_name', last_name='$last_name'
            WHERE username ='$username';
        ");
	}
}

function update_user($userdata){
	add_user($userdata);
}

function delete_user($username){
	if(!user_exists($username)){
		return;
	}
	global $pdo;
	$pdo->query("
		DELETE FROM users
		WHERE username = '$username';
	");
}