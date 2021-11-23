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
$icebalm = get_value('icebalm', 0);
$brush = get_value('brush', 0);
$brushbh = get_value('brushbh', 0);
$brushmask = get_value('brushmask', 0);
$bag = get_value('bag', 0);
$rimmel = get_value('rimmel', 0);

?>
				
				<div class="left2 col-l-1 col-12">
				</div>
				
				
				<div class="content2 col-l-9 col-12">
				
				<?php if($lipgloss):
					$goods = get_goods_by_serial_number('105');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('capsul1', 'capsul2', 'capsul3', 'capsul4', 'capsul5', 'capsul6');
					?>
					<h2 class="clrb">* برق لب قرصی *</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-lipgloss=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/capsul7.jpg"	/><img	id='img2' src="images/beautyandhealth/capsul9.jpg"	/><p id='p1'><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img	src="<?php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-lipgloss=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				
				<?php if($lamp):
					$goods = get_goods_by_serial_number('104');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('lamp1', 'lamp2', 'lamp3', 'lamp4', 'lamp5');
					?>
					<h2 class="clrb">* برق لب لامپی *</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-lamp=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img  src="images/beautyandhealth/lamp6.jpg"	alt="برق لب"/><p><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img	src="<?php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-lamp=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<?php if($icebalm):
				$goods = get_goods_by_serial_number('106');
				$name = $goods['name'];
				$price = $goods['price'];
				$off = $goods['off'];
				$serial_number = $goods['serial_number'];
				?>
				<h2 class="clrb">* بالم لب آبمیوه ای*</h2>
				<a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1">
					<div class="new col-6 col-l-4">
						<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/balmbastani1.jpg"	/><img	id='img2' src="images/beautyandhealth/balmbastani2.jpg"	/><p id='p1'><p class="pinside"></p></div>
					</div>
				</a>
				<a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1">
					<div class="new col-6 col-l-4">
						<div class="doutside ftr d1"><img	id='img3'	src="images/beautyandhealth/balmbastani3.jpg"	/><img	id='img4' src="images/beautyandhealth/balmbastani4.jpg"	/><p id='p2'><p class="pinside"></p></div>
					</div>
				</a>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/beautyandhealth/balmbastani5.jpg"	alt="بالم لب"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img	src="images/beautyandhealth/balmbastani6.jpg"	alt="بالم لب"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><picture><source media="(min-width: 768)" srcset="balmbastanii1.jpg"><source media="(max-width: 768)" srcset="balmbastani7.jpg"><img	src="images/beautyandhealth/balmbastani7.jpg"	alt="بالم لب"/></picture><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><picture><source media="(min-width: 768)" srcset="balmbastanii2.jpg"><source media="(max-width: 768)" srcset="balmbastani8.jpg"><img	src="images/beautyandhealth/balmbastani8.jpg"	alt="بالم لب"/></picture><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><picture><source media="(min-width: 768)" srcset="balmbastanii3.jpg"><source media="(max-width: 768)" srcset="balmbastani9.jpg"><img	src="images/beautyandhealth/balmbastani9.jpg"	alt="بالم لب"/></picture><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><picture><source media="(min-width: 768)" srcset="balmbastanii4.jpg"><source media="(max-width: 768)" srcset="balmbastani10.jpg"><img	src="images/beautyandhealth/balmbastani10.jpg"	alt="بالم لب"/></picture><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-icebalm=1"><p class="pinside"></p></a></div>
					</div>
					<?php endif; ?>
					
				<?php if($brush):
					$goods = get_goods_by_serial_number('108');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('nbrush5', 'abrush5', 'cbrush5', 'bbrushes');
					?>
					<h2 class="clrb">*براش فانتزی 4تیکه*</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-brush=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/newbrush.jpg"	/><img	id='img2' src="images/beautyandhealth/newbrush2.jpg"	/><p id='p1'><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img  src="<?php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-brush=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
					
				<?php if($brushbh):
					$goods = get_goods_by_serial_number('109');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('cobrush2', 'brushbh1', 'cobrush3', 'cobrush4');
					?>
					<h2 class="clrb">*براش BH Cosmetics*</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-brushbh=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/cobrush1.jpg"	/><img	id='img2' src="images/beautyandhealth/cobrush5.jpg"	/><p id='p1'><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach ($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img  src="<php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-brushbh=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<?php if($brushmask):
					$goods = get_goods_by_serial_number('110');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('brushm7', 'brushm1', 'brushm4', 'brushm5');
					?>
					<h2 class="clrb">*براش ماسک*</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-brushmask=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/brushm3.jpg"	/><img	id='img2' src="images/beautyandhealth/brushm6.jpg"	/><p id='p1'><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"><img  src="<?php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-brushmask=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<?php if($bag):
					$goods = get_goods_by_serial_number('103');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('bags1', 'bags2', 'abag1', 'abag2', 'abag3');
					?>
					<h2 class="clrb">*  Victoria's secret کیف آرایشی *</h2>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"	 ><img	src="<?php echo "images/compressed/$img.jpg"; ?>"		alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-bag=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<?php if($rimmel):
					$goods = get_goods_by_serial_number('107');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('rimmel7', 'rimmel5', 'rimmel4', 'rimmel1', 'rimmel2', 'rimmel3');
					?>
					<h2 class="clrb">*ریمل Hudamoji*</h2>
					<a href="<?php echo home_url('iteminfo'); ?>?item-rimmel=1">
						<div class="new col-6 col-l-4">
							<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/rimmel6.jpg"	/><img	id='img2' src="images/beautyandhealth/rimmel8.jpg"	/><p id='p1'><p class="pinside"></p></div>
						</div>
					</a>
					<?php foreach($img_src as $img): ?>
						<div class="new col-6 col-l-4">
							<div class="doutside ftr"	 ><img	src="<?php echo "images/beautyandhealth/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-rimmel=1"><p class="pinside"></p></a></div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
					
					<!-- -------up------- -->
					<?php if($rimmel || $bag || $lamp || $lipgloss || $icebalm || $brush || $brushbh || $brushmask): ?>
						<div class="new col-6 col-l-4">
							<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
						</div>
					<?php endif; ?>
				</div>
				<div class="right2 col-l-2 col-12">
				<!-- -------search------- -->
				<?php if($lamp || $lipgloss || $icebalm): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="beautyandhealth" >
					<div class="input">
						<input type="checkbox"    name="lamp"    id="lamp"    value="show" />
						<label for="lamp"><b>برق لب لامپی</b></label><br/>
					</div>
					<br/>
					<div class="input">
						<input type="checkbox"    name="lipgloss"    id="lipgloss"    value='show' />
						<label for="lipgloss"><b>برق لب قرصی</b></label><br/>
					</div>
					<br/>
					<div class="input">
						<input type="checkbox"    name="icebalm"    id="icebalm"    value='show' />
						<label for="icebalm"><b>بالم لب آبمیوه ای</b></label><br/>
					</div>
					<br/>

						<button type="submit" class="btn btn-info">جست و جو</button>
					</form>
				</fieldset>
					<?php endif; ?>
				<!-- -------search------- -->
				<?php if($brush || $brushbh || $brushmask): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="beautyandhealth" >
					<div class="input">
						<input type="checkbox"    name="brush"    id="brush"    value='show' />
						<label for="brush"><b>براش فانتزی 4تیکه</b></label><br/>
					</div>
					<br/>
					<div class="input">
						<input type="checkbox"    name="brushbh"    id="brushbh"    value='show' />
						<label for="brushbh"><b>براش BH Cosmetics</b></label><br/>
					</div>
					<br/>
					<div class="input">
						<input type="checkbox"    name="brushmask"    id="brushmask"    value='show' />
						<label for="brushmask"><b>براش ماسک</b></label><br/>
					</div>
					<br/>

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
				background: linear-gradient(to top right, #84fab0 , #8fd3f4);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
				color: #2a1d96;
				transition: background-color 1s;
				cursor: pointer;
			}
			button:hover {
                background-color: rgb(202, 67, 168);
            }
			.input{
				opacity: 0.7;
				border-radius: 30px;
				background: linear-gradient(to top right, #84fab0 , #8fd3f4);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
				color: black;
			}
			fieldset
			{
				position: relative;
				right: 25px;
				background: linear-gradient(to top right, #84fab0 , #8fd3f4);
				box-shadow: -6px -6px 7px rgb(255, 255, 255), 6px 10px 7px rgba(0, 0, 0, 0.8);
				border-radius: 25px;
			}
			form
			{
				width: 200px;
				height: 200px;
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
			.fil img
			{
				filter: saturate(200%);
				-webkit-filter: saturate(200%);
			}
		</style>
<?php }

function css_link(){ ?>

	<link type="text/css"	rel="stylesheet"	href="index.css" />
	<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }

function get_script(){ ?>

	<script>
		window.scrollBy(0,350)
	</script>

<?php }