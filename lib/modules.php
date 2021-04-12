<?php   
    function render_page(){
        include_once ('templates/header.php');

        include_once ('lib/functions.php');
        $module = get_module_name();
		$module_file = "templates/modules/m$module";
		if(file_exists($module_file)){
			include_once ("templates/modules/m$module");
		}else{
			include_once ('templates/modules/mindex.php');
		}
		get_content();
		
	include_once('templates/footer.php'); 
}
