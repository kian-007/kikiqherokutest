<?php

function render_home_page(){
    include_once ('templates/modules/home.php');
    include_once ('templates/header.php');
    get_content();
    include_once ('templates/footer.php');
}

function render_skin_page(){
    include_once ('templates/modules/skkiin.php');
	
	
	function get_value($para, $default){
    if(isset($_GET[$para])){
        $value = $_GET[$para];
    }else{
        $value = $default;
    }
    return $value;
}

$facebrush = get_value('facebrush' , 0);
$handcream = get_value('handcream' , 0);

if($handcream ){
    if($facebrush){
        $title = 'فیس براش چکشی';
    }else{
        $title = 'کرم مرطوب کننده دست';
    }
}else{
        if($facebrush){
           $title = 'فیس براش چکشی';
        }else{
           $title = 'پوست';
        }
    }
	
	
    include_once ('templates/header.php');
    get_content();
    include_once ('templates/footer.php');
}