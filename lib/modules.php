<?php

function render_home_page(){
    include_once ('templates/modules/home.php');
    include_once ('templates/header.php');
    get_content();
    include_once ('templates/footer.php');
}

function render_skin_page(){
    include_once ('templates/modules/skkiin.php');
    include_once ('templates/header.php');
    get_content();
    include_once ('templates/footer.php');
}