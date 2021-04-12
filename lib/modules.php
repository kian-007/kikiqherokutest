<?php   
    function render_page(){
        include_once ('templates/header.php');

        include_once ('lib/functions.php');
        $module_file = get_module_name();
		if(file_exists($module_file){
			include_once ('templates/modules/'.'m'."$module");
		}else{
			include_once ('templates/modules/mindex.php');
		}
		
	include_once('templates/footer.php'); 
}
