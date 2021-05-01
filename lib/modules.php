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
			check_for_authentication_requirement();
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


	function check_for_authentication_requirement(){
		if(is_authentication_required() && !is_user_logged_in()){
			$request_url = 'login.php';
			$login_url = SITE_URL . $request_url;
			redirect_to($login_url);
		}
	}

    function render_page(){
        include_once ('templates/header.php');

        load_module();
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