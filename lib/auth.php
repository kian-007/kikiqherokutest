<?php

$current_user = null;
$current_user_id = null;

define('SESSION_EXPIRATION', 2*30*24*3600);

function get_current_user_data(){
    global $current_user;
    return $current_user;
}

function get_current_user_id(){
    global $current_user_id;
    return $current_user_id;
}

function is_user_logged_in(){
    global $current_user_id;
    if($current_user_id){
        add_message('user logged in', 'success');
        return true;
    }else{
        add_message('user is not logged in', 'error');
        return false;
    }
}

function clear_user_session(){
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['last_access']);
}

function check_for_previous_login(){
    $last_access = $_SESSION['last_access'];
    $expired = ((time() - $last_access) > SESSION_EXPIRATION);

    if($expired){
        clear_user_session();
        return;
        
    }
    $username = $_SESSION['username'];
    $user = get_user($username);

    if($user){
        $user_id = $_SESSION['user_id'];
        
        if($user_id != $user['id']){
            clear_user_session();
            return;
            
        }
        $password = $_SESSION['password'];

        if($password != $user['password']){
            clear_user_session();
            return;
            
        }
        
        global $current_user;
        global $current_user_id;
        $current_user = $user;
        $current_user_id = $user['id'];
        add_message('current_user_id is not empty', 'success');
    }
}

function user_logout(){
    global $current_user;
    global $current_user_id;
    $current_user = null;
    $current_user_id = null;
    clear_user_session();
}

function user_login($username, $password){
    user_logout();
    $user = get_user($username);
    
    if(!$user){
        return;
    }
    add_message('user matched', 'success');
    if(sha1($password) != $user['password']){
        return;
    }
    add_message('password matched', 'success');
    global $current_user;
    global $current_user_id;
    $current_user = $user;
    $current_user_id = $user['id'];
    add_message('current_user_id is not empty', 'success');
    
    $_SESSION['last_access'] = time();
    $_SESSION['user_id'] = $current_user_id;
    add_message('current_user_id = user_id', 'success');
    $_SESSION['username'] = $user['username'];
    $_SESSION['password'] = $user['password'];
}