<?php 

require_once ('config.php');
if(is_authentication_required()){
    $login_url = home_url('login.php');
    header("Location: $login_url");
    die();
}
render_page();
