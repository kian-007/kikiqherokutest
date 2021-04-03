<?php

function render_page(){
    include_once ('templates/modules/home.php');
    include_once ('templates/header.php');

    get_content();

    include_once ('templates/footer.php');
}