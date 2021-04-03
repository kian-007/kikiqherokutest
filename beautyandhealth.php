<?php
	function get_value($para, $default){
    if(isset($_GET[$para])){
        $value = $_GET[$para];
    }else{
        $value = $default;
    }
    return $value;
}

$lamp = get_value('lamp', 0);
$lipgloss = get_value('lipgloss', 0);
$brush = get_value('brush', 0);

if($lamp ){
    if($lipgloss){
        $title = 'برق لب لامپی و قرصی';
    }else{
        $title = 'برق لب لامپی';
    }
}else{
        if($lipgloss){
           $title = 'برق لب قرصی';
		}elseif($brush){
			$title = 'براش';
        }else{
           $title = 'آرایشی و بهداشتی';
        }
    }


?>

<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $title; ?></title>
		<link type="text/css"	rel="stylesheet"	href="index.css" />
		<link type="text/css"	rel="stylesheet"	href="index3.css" />
		<script src="jquery-3.5.1.min.js"></script>
		<script src="chk.js"></script>
		<script>
			$.noConflict()
			jQuery(document).ready(function($){
				/*var d = new Date();
				var d = d.toDateString();
				alert(d + '\n خوش آمدید')
				slert('User <?php   echo $_GET['REMOTE_ADDR'];	?> \n Wellcome To Kikiqutest')*/
				$('.ulmenue').find('li:nth-child(6)').click(function(){ 
					$(this).toggleClass('baz')
					$('.ulmenue').find('li:nth-child(6)').prevAll().toggle(250)
					if($(this).hasClass('baz')){
					$(this).css({'background-image': "url('images/threeline4.jpg')", 'background-size': "45px 41px"})
					}else{
						$(this).css({'background-image': "url('images/threeline6.jpg')", 'background-size': "45px 41px"})
					}
				})
				$('.ulmenue').children().addClass('prevli')
				$('.ulmenue').children(':last-child').removeClass('prevli')
				$('.ulmenue').children(':nth-child(5)').removeClass('prevli')
				
				$('.ulmenue').find('.prevli').hover(function(){
					$(this).find('.subul').slideDown(250)
					$('body').css('background-color', "rgba(0,0,0,0.5")
					$('.footer').css('background-color', "rgba(0,0,0,0.5")
					$('.middle').css('-webkit-filter', "blur(10px)")
					$('.footer').css('-webkit-filter', "blur(10px)")
					
					if($(this).next().hasClass('open')){
						$(this).css('background-image', "url('images/arrow2.jpg')")
					}else{
						$(this).css('background-image', "url('images/arrow3.jpg')")
					}
				}, 
				function(){
					$(this).find('.subul').slideUp(250)
					$('body').css('background-color', "rgba(0,0,0,0")
					$('.footer').css('background-color', "rgba(0,0,0,0")
					$('.middle').css('-webkit-filter', "blur(0px)")
					$('.footer').css('-webkit-filter', "blur(0px)")
					
					if($(this).prev().hasClass('open')){
						$(this).css('background-image', "url('images/arrow3.jpg')")
					}else{
						$(this).css('background-image', "url('images/arrow2.jpg')")
					}
				})
				$('#p1').mouseenter(function() {
					$('#img1').fadeOut(500)
					$('#img2').fadeIn(500)
				})
				
				$('form').find('input[type="checkbox"]').hide()
				$('form').find('input[type="checkbox"]').after("<img class='mychk' src='images/chk3.jpg' />")
				$('form').find('input[type="checkbox"]').mychk()
				
			})
		</script>
		<script type="text/javascript">
			var Index = 0;
			showSlides();
			
			function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			Index++;
			if (Index > slides.length) {Index = 1} 
			slides[Index-1].style.display = "block";
			setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script> 
		<style>
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
		</style>
	</head>
	<body onload="showSlides()">
	<a name="start"></a>
		<div class="container"> 
				<h1 class ="h1">KikiCutest</h1>
				<img class = "logo" src = 'images\kiki.jpg'  />
				<p class ="logoText">KikiCutest</p>
			<div class="header"> 
				<div class= "menue">
				<ul class ="ulmenue" >
					<li><a href='#'>آرایشی و بهداشتی</a>
						<ul class ="subul">
							<li><a href='#'>کیف لوازم آرایشی</a></li>
							<li><a href='https://kikiq.herokuapp.com/beautyandhealth.php?lamp=1'>برق لب لامپی</a></li>
							<li><a href='https://kikiq.herokuapp.com/beautyandhealth.php?lipgloss=1'>برق لب قرصی</a></li>
							<li><a href='https://kikiq.herokuapp.com/beautyandhealth.php?brush=1'>براش</a></li>
						</ul>
					</li>
					<li><a href='#'>پوست</a>
						<ul class ="subul">
							<li style="height: 60px"><a href='https://kikiq.herokuapp.com/skin.php?handcream=1'>کرم مرطوب کننده دست</a></li>
							<li style="height: 60px"><a href='https://kikiq.herokuapp.com/skin.php?facebrush=1'>فیس براش چکشی هولوگرامی</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
					<li><a href='#'>مو</a>
						<ul class ="subul">
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
					<li><a href='#'>فانتزی</a>
						<ul class ="subul" >
							<li><a href='#'>پاپوش یونیکورن</a></li>
							<li><a href='fantasy.php'>آیینه</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
					<li><a href='index.php'>خانه</a></li>
					<li><span>دسته بندی</span></li>
				</ul>
				</div>
			</div>
			<div class="middle">
				
				<div class="left2">
				</div>
				
				
				<div class="content2">
				
				<?php if($lipgloss): ?>
				<h2>برق لب قرصی</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/capsul7.jpg"	/><img	id='img2' src="images/beautyandhealth/capsul9.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul1.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul3.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul4.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul6.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
				
				<?php if($lamp): ?>
				<h2>برق لب لامپی</h2>
					<div class="doutside ftr"><img src="images/beautyandhealth/lamp6.jpg"/><p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp1.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp3.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp4.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp5.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				<?php if($brush): ?>
				<h2>براش</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/newbrush.jpg"	/><img	id='img2' src="images/beautyandhealth/newbrush2.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img src="images/beautyandhealth/nbrush5.jpg"/><p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/abrush5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/cbrush5.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				</div>
				<div class="right2">
				<?php if($lamp || $lipgloss || $brush): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="beautyandhealth.php" >
						<input type="checkbox"    name="lamp"    id="lamp"    value="show" />
						<label for="lamp"><b>برق لب لامپی</b></label><br/>
						
						<input type="checkbox"    name="lipgloss"    id="lipgloss"    value='show' />
						<label for="lipgloss"><b>برق لب قرصی</b></label><br/>
						
						<input type="checkbox"    name="brush"    id="brush"    value='show' />
						<label for="brush"><b>براش</b></label><br/>
						
						<input type="submit" value="جست و جو" />
					</form>
				</fieldset>
					<?php endif; ?>
				</div>
			</div>
			<div class="footer">
				<p style=" font-size: 19pt; float:left; position:relative; top:300px;"><span style="color:red;">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				<b><a  href="contactus.php"	 style="text-decoration: none; font-size:22pt; color: #222;float:right; position:relative; top:300px; right:50px; ">تماس با ما</a></b>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff66b3" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,53.3C384,64,480,96,576,128C672,160,768,192,864,197.3C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
			</div>
		</div>
	</body>
</html>
