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
				
				<div class="left2 col-l-1 col-12">
				</div>
				<div class="content2 col-l-9 col-12">
				
				<?php if($handcream): ?>
					<h2>* کرم مرطوب کننده *</h2>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr d1"><img	id='img1'	src="images/skin/ax1.jpg"	/><img	id='img2' src="images/skin/mrtb99.jpg"	/><p id='p1'><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/mrtb44.jpg"	alt="کرم مرطوب کننده دست"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/mrtb55.jpg"	alt="کرم مرطوب کننده دست"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/mrtb66.jpg"	alt="کرم مرطوب کننده دست"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/mrtb77.jpg"	alt="کرم مرطوب کننده دست"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/mrtb88.jpg"	alt="کرم مرطوب کننده دست"/><p class="price">20,000 t</p><p class="pinside"></p></div>
					</div>

					<?php endif; ?>
					
				<?php if($facebrush): ?>
					<h2>* فیس براش *</h2>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr d1"><img	id='img1'	src="images/skin/facebrush1.jpg"	/><img	id='img2' src="images/skin/brush4.jpg"	/><p id='p1'><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/brush2.jpg"	alt="فیس براش"/><p class="price">48,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/brush7.jpg"	alt="فیس براش"/><p class="price">48,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/brush6.jpg"	alt="فیس براش"/><p class="price">48,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/brush5.jpg"	alt="فیس براش"/><p class="price">48,000 t</p><p class="pinside"></p></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/skin/brush3.jpg"	alt="فیس براش"/><p class="price">48,000 t</p><p class="pinside"></p></div>
					</div>

					<?php endif; ?>
					
					<?php if($handcream || $facebrush): ?>
						<div class="new col-6 col-l-4">
							<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
						</div>
					<?php endif; ?>
				</div>
				
				<div class="right2 col-l-2 col-12">
				<?php if($handcream || $facebrush): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="skin.php" >
						<div class="input">
							<input type="checkbox"    name="handcream"    id="handcream"    value="show" />
							<label for="handcream"><b>کرم مرطوب کننده دست</b></label><br/>
						</div>
						<br/>
						<div class="input">
							<input type="checkbox"    name="facebrush"    id="facebrush"    value='show' />
							<label for="facebrush"><b>فیس براش چکشی هولوگرامی</b></label><br/>
						</div>
						<button type="submit" class="btn btn-info">جست و جو</button>
					</form>
				</fieldset>
					<?php endif; ?>
				</div>
<?php }

function get_style(){ ?>
        <style>
			button{
				margin-top: 10px;
				border-radius: 30px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
				color: pink;
				transition: background-color 1s;
				cursor: pointer;
			}
			button:hover {
                background-color: rgb(202, 67, 168);
            }
			.input{
				opacity: 0.7;
				border-radius: 30px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
                color: black;
			}
			fieldset
			{
				position: relative;
				right: 25px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -6px -6px 7px rgb(255, 255, 255), 6px 10px 7px rgba(0, 0, 0, 0.8);
				border-radius: 25px;
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
				margin-left: 150px;
			}

			@meida only screen and (orientation: landscape) {
				h2
				{
					margin-left: 450px;
				}
			}
		</style>
<?php }

function css_link(){ ?>

	<link type="text/css"	rel="stylesheet"	href="index.css" />
	<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }