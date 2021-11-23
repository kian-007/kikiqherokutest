<?php

function get_title(){
return 'آیینه';
}

function get_content(){ ?>
				
				<div class="left2 col-l-1 col-12">
				</div>
				<div class="content2 col-l-9 col-12">
				<?php
					$goods = get_goods_by_serial_number('100');
					$name = $goods['name'];
					$price = $goods['price'];
					$off = $goods['off'];
					$serial_number = $goods['serial_number'];
					$img_src = array('mir14', 'mir1', 'mir2', 'mir4', 'mir5', 'mir6', 'mir7', 'mir8', 'mir9', 'mir10', 'mir11', 'mir12', 'mir13');
				?>

				<h2>* <?php echo $name; ?> *</h2>
				<a href="<?php echo home_url('iteminfo'); ?>?item-mirror=1">
					<div class="new col-6 col-l-4">
						<div class="doutside ftr d1"><img loading="lazy"	src="images/fantasy/mir14.jpg"	/><p id='p1'><p class="pinside"></p></div>
					</div>
				</a>

				<?php
				foreach($img_src as $img): ?>
					<div class="new col-6 col-l-4">
						<div class="doutside ftr"><img loading="lazy"	src="<?php echo "images/fantasy/$img.jpg"; ?>"	alt="<?php echo $name; ?>"/><p class="price"><?php echo $price; ?> t</p><a href="<?php echo home_url('iteminfo'); ?>?item-mirror=1"><p class="pinside"></p></a></div>
					</div>
				<?php endforeach; ?>

					
					<div id="scroll" class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
				</div>
				<div class="right2 col-l-2 col-12">
				</div>
<?php }

function get_style(){ ?>
        <style>
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
			h2{
				margin-left: 150px;
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