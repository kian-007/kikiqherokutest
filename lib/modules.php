<?php   

	function load_module(){
		include_once ('lib/functions.php');
        $module = get_module_name();

		if(empty($module)){
			$module = 'home';
		}

		include_once ('lib/users.php');
		if(is_user_logged_in() && $module = 'login'){
			redirect_to(home_url());
		}
		$module_file = "templates/modules/$module.php";

		if(file_exists($module_file)){
			require_once ("templates/modules/$module.php");
			check_for_authentication_requirement();

		}else{
			add_message('آدرس وارد شده صحیح نیست','error');
			show_message();
			require_once ('templates/modules/home.php');
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


$messages = array();
function add_message($message = null, $type = 'error'){
    if(!$message){
        return;
    }
    global $messages;
    $messages[] = array(
        'message' => $message,
        'type' => $type,
    );
    
}

function show_message(){
    global $messages;
    if(empty($messages)){
        return;
    }
    foreach ($messages as $item){
        $messages = $item['message'];
        $type = $item['type'];
    
    ?>
    <div class="alert alert-<?php echo $type; ?>">
        <p>
            <?php echo $messages; ?>
        </p>
    </div>
    <?php }
 }