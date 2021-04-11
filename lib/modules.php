<?php   
    function render_page(){
        include_once ('templates/header.php');

        include_once ('lib/functions.php');
        $module = get_module_name();
		try{
			include_once ('templates/modules/'.'m'."$module");
			
		}catch{
			include_once ('templates/modules/mindex.php');
				
		}finally{
			get_content();
		}
		
	include_once('templates/footer.php'); 
}

