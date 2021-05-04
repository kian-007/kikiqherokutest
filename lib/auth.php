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
        return true;
        add_message('is user logged in', 'success');
    }else{
        return false;
        add_message('is user logged in', 'error');
    }
}

function clear_user_session(){
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['last_access']);
}

function check_for_previous_login(){
    add_message('check for previous login1', 'seccess');
    $last_access = $_SESSION['last_access'];
    add_message('check for previous login2', 'seccess');
    $expired = ((time() - $last_access) > SESSION_EXPIRATION);
    add_message('check for previous login3', 'seccess');
    if($expired){
        clear_user_session();
        return;
        add_message('check for previous login4', 'seccess');
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
        add_message('check for previous login7', 'seccess');
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
    
    if(sha1($password) != $user['password']){
        return;
    }
    
    global $current_user;
    global $current_user_id;
    $current_user = $user;
    $current_user_id = $user['id'];
    add_message('current user id is not empty', 'success');
    
    $_SESSION['last_access'] = time();
    $_SESSION['user_id'] = $current_user_id;
    $_SESSION['username'] = $user['username'];
    $_SESSION['password'] = $user['password'];
}