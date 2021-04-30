<?php   

	function load_module(){
		include_once ('lib/functions.php');
		show_message();
        $module = get_module_name();
		if(empty($module)){
			$module = 'index.php';
		}
		$module_file = "templates/modules/m$module";

		if(file_exists($module_file)){
			require_once ("templates/modules/m$module");
		}else{
			add_message('پیام خطا', 'error');
			add_message('موفقیت', 'success');
			add_message('هشدار', 'warning');
			add_message('اطلاع رسانی', 'info');
		require_once ('templates/modules/mindex.php');
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
	foreach($messages as $item){
		$message = $item['message'];
		$type = $item['type'];
		if($type == 'error'){

		}
		?>
			<div class="alert alert-<?php echo $type; ?>">
				<p>
					<?php echo $message; ?>
					<?php echo $_SERVER['REQUEST_URI']; ?>
				</p>
			</div>
		<?php
	}
	
}