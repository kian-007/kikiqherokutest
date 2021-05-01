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
			<div class="alert alert-error">
				<p>
					آدرس وارد شده صحیح نیست
					<?php echo $_SERVER['REQUEST_URI']; ?>
				</p>
			</div>
		<?php	require_once ('templates/modules/mindex.php');
		}
	}



    function render_page(){
        include_once ('templates/header.php');

        load_module();
		if(is_authentication_required()){
			$login_url = home_url('login.php');
			header("Location: $login_url");
			die();
		}
		if(function_exists('get_content')){
			get_content();
		}

		include_once('templates/footer.php'); 
}


function is_authentication_required(){
	if(function_exists('authentication_required')){
		return authentication_required();
	}
	return false;
}