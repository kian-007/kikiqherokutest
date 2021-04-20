<?php   

	function load_module(){
		include_once ('lib/functions.php');
        $module = get_module_name();
		if(empty($module)){
			$module = 'index.php';
		}
		$module_file = "templates/modules/m$module";

		if(file_exists($module_file)){
			require_once ("templates/modules/m$module");
		}else{
			
			require_once ('templates/modules/mindex.php');
		}
		get_content();
	}



    function render_page(){
        include_once ('templates/header.php');

        load_module();

		include_once('templates/footer.php'); 
}
