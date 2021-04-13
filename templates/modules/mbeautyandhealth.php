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
$lamp = get_value('lamp', 0);
$lipgloss = get_value('lipgloss', 0);
$brush = get_value('brush', 0);
$bag = get_value('bag', 0);

    if($lamp ){
    if($lipgloss){
        $title = 'برق لب لامپی و قرصی';
    }
	if($bag){
		$title = 'برق لب لامپی و کیف';
	}else{
        $title = 'برق لب لامپی';
    }
}else{
        if($lipgloss){
           $title = 'برق لب قرصی';
		}elseif($brush){
			$title = 'براش';
        }elseif($bag){
			$title = 'کیف آرایشی Victoria\'s secret';
		}else{
           $title = 'آرایشی و بهداشتی';
        }
    }
    return $title;
}


function get_content(){ ?>

<?php

$lamp = get_value('lamp', 0);
$lipgloss = get_value('lipgloss', 0);
$brush = get_value('brush', 0);
$bag = get_value('bag', 0);

?>
				
				<div class="left2">
				</div>
				
				
				<div class="content2">
				
				<?php include_once ('lib/functions.php');
                  $module = get_module_name();
                  echo $module; ?>
				
				<?php if($lipgloss): ?>
				<h2>* برق لب قرصی *</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/capsul7.jpg"	/><img	id='img2' src="images/beautyandhealth/capsul9.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul1.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul2.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul3.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul4.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul5.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul6.jpg"	alt="برق لب"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
				
				<?php if($lamp): ?>
				<h2>* برق لب لامپی *</h2>
					<div class="doutside ftr"><img  src="images/beautyandhealth/lamp6.jpg"	alt="برق لب"/><p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp1.jpg"	alt="برق لب"/><p class="price">23,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp2.jpg"	alt="برق لب"/><p class="price">23,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp3.jpg"	alt="برق لب"/><p class="price">23,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp4.jpg"	alt="برق لب"/><p class="price">23,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp5.jpg"	alt="برق لب"/><p class="price">23,000 t</p><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				<?php if($brush): ?>
				<h2>* براش *</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/newbrush.jpg"	/><img	id='img2' src="images/beautyandhealth/newbrush2.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img  src="images/beautyandhealth/nbrush5.jpg"	alt="براش"/><p class="price">60,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/abrush5.jpg"	alt="براش"/><p class="price">60,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/cbrush5.jpg"	alt="براش"/><p class="price">60,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/bbrushes.jpg"	alt="براش"/><p class="price">60,000 t</p><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
					<?php if($bag): ?>
				<h2>*  Victoria's secret کیف آرایشی *</h2>
					<div class="doutside ftr"	 ><img	src="images/compressed/bags1.jpg"		alt="کیف آرایشی"/><p class="price">40,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr"	 ><img	src="images/compressed/bags2.jpg"		alt="کیف آرایشی"/><p class="price">40,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr fil"><img  src="images/beautyandhealth/abag1.jpg"	alt="کیف آرایشی"/><p class="price">40,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr fil"><img	src="images/beautyandhealth/abag2.jpg"	alt="کیف آرایشی"/><p class="price">40,000 t</p><p class="pinside"></p></div>
					<div class="doutside ftr fil"><img	src="images/beautyandhealth/abag3.jpg"	alt="کیف آرایشی"/><p class="price">40,000 t</p><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				</div>
				<div class="right2">
				<?php if($lamp || $lipgloss || $brush || $bag): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="beautyandhealth.php" >
						<input type="checkbox"    name="lamp"    id="lamp"    value="show" />
						<label for="lamp"><b>برق لب لامپی</b></label><br/>
						
						<input type="checkbox"    name="lipgloss"    id="lipgloss"    value='show' />
						<label for="lipgloss"><b>برق لب قرصی</b></label><br/>
						
						<input type="checkbox"    name="brush"    id="brush"    value='show' />
						<label for="brush"><b>براش</b></label><br/>
						
						<input type="checkbox"    name="bag"    id="bag"    value='show' />
						<label for="bag"><b>Victoria's secret کیف آرایشی</b></label><br/>
						
						<button type="submit" class="btn btn-info">جست و جو</button>
					</form>
				</fieldset>
					<?php endif; ?>
				</div>
<?php }


function get_style(){ ?>
        <style>
			.btn .badge{position:relative;top:-1px}
			.btn-info{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-info:hover{color:#000;background-color:#31d2f2;border-color:#25cff2}
			fieldset
			{
				position: relative;
				right: 25px;
				background: linear-gradient(to top right, #84fab0 , #8fd3f4);
				border-radius:25px;
			}
			form
			{
				width: 200px;
				height: 120px;
			}
			.ulmenue > li:nth-child(6)
			{
				background-image: url('images/threeline3.jpg');
				background-size: 45px 41px;
				background-repeat: no-repeat;
				background-position: 85px 4px;
				text-align: left;
			}
			.ulmenue > li:nth-child(6) span
			{
				line-height: 2.5;
				position: relative;
				left: 22px;
				top: 3px;
			}
			h2
			{
				margin-left: 450px;
			}
			.fil img
			{
				filter: saturate(200%);
				-webkit-filter: saturate(200%);
			}
		</style>
<?php }