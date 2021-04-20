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
		}else{ ?>
			<p>fucking errore</p>
		<?php	//require_once ('templates/modules/mindex.php');
		}
	}



    function render_page(){
        include_once ('templates/header.php');

        load_module();
		get_content();

		include_once('templates/footer.php'); 
}
