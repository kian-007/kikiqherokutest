<?php   
    function render_page(){
        include_once ('templates/header.php');

        include_once ('lib/functions.php');
        $module = get_module_name();
        include_once ('templates/modules/'.'m'."$module");
            get_content();

	include_once('templates/footer.php'); 
}

