<?php
$title = null;

function get_value($para, $default){
    if(isset($_GET[$para])){
        $value = $_GET[$para];
    }else{
        $value = $default;
    }
    return $value;
}


function get_title(){
global $title;
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
    return $title;
}


function get_content(){ ?>

<?php

$facebrush = get_value('facebrush' , 0);
$handcream = get_value('handcream' , 0);

?>
				
				<div class="left2">
				</div>
				<div class="content2">
				
				<?php if($handcream): ?>
					<h2>* کرم مرطوب کننده *</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/skin/ax1.jpg"	/><img	id='img2' src="images/skin/mrtb99.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb44.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb55.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb66.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb77.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb88.jpg"	/><p class="pinside"></p></div>
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				<?php if($facebrush): ?>
					<h2>* فیس براش *</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/skin/facebrush1.jpg"	/><img	id='img2' src="images/skin/brush4.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/brush2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/brush7.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/brush6.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/brush5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/brush3.jpg"	/><p class="pinside"></p></div>
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				</div>
				
				<div class="right2">
				<?php if($handcream || $facebrush): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="skin.php" >
						<input type="checkbox"    name="handcream"    id="handcream"    value="show" />
						<label for="handcream"><b>کرم مرطوب کننده دست</b></label><br/>
						
						<input type="checkbox"    name="facebrush"    id="facebrush"    value='show' />
						<label for="facebrush"><b>فیس براش چکشی هولوگرامی</b></label><br/>
						
						<input type="submit" value="جست و جو" />
					</form>
				</fieldset>
					<?php endif; ?>
				</div>
<?php }