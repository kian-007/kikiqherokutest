<?php   

	function load_module(){
		include_once ('lib/functions.php');
        $module = get_module_name();
		if(empty($module)){
			$module = 'home';
		}
		$module_file = "templates/modules/$module.php";

		if(file_exists($module_file)){
			require_once ("templates/modules/$module.php");
			check_for_authentication_requirement();
		}else{ ?>
			<div class="alert alert-error">
				<p>
					آدرس وارد شده صحیح نیست
					<?php echo $_SERVER['REQUEST_URI']; ?>
				</p>
			</div>
		<?php	require_once ('templates/modules/home.php');
		}
	}


	function check_for_authentication_requirement(){
		if(is_authentication_required() && !is_user_logged_in()){
			$login_url = home_url('login');
			redirect_to($login_url);
		}
	}

    function render_page(){
		load_module();
        include_once ('templates/header.php');

        
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