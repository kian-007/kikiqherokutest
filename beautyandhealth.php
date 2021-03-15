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
$capsul = get_value('capsul', 0);

if($lamp ){
    if($capsul){
        $title = 'برق لب لامپی و قرصی';
    }else{
        $title = 'برق لب لامپی';
    }
}else{
        if($capsul){
           $title = 'برق لب قرصی';
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
		<script>
			$.noConflict()
			jQuery(document).ready(function($){
				/*var d = new Date();
				var d = d.toDateString();
				alert(d + '\n خوش آمدید')
				slert('User <?php   echo $_GET['REMOTE_ADDR'];	?> \n Wellcome To Kikiqutest')*/
				$('.ulmenue').find('li:last-child').prevAll().css('display', "none")
				$('.ulmenue').find('li:last-child').click(function(){ 
					$('.ulmenue').find('li:last-child').prevAll().toggle()
				})
				$('.ulmenue').mouseleave(function(){
					$('.ulmenue').find('li:last-child').prevAll().hide()
				})
				
				$('.ulmenue').find('li').hover(function(){
					$(this).find('.subul').slideDown(250)
					$('body').css('background-color', "rgba(0,0,0,0.5")
					$('.middle').css('-webkit-filter', "blur(10px)")
				}, 
				function(){
					$(this).find('.subul').slideUp(250)
					$('body').css('background-color', "rgba(0,0,0,0")
					$('.middle').css('-webkit-filter', "blur(0px)")
				})
				$('#p1').mouseenter(function() {
					$('#img1').fadeOut(500)
					$('#img2').fadeIn(500)
				})
				
				
				
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
			form
			{
				background-color: rgba(204, 0, 102, 0.7)
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
							<li><a href='https://kikiq.herokuapp.com/beautyandhealth.php?capsul=1'>برق لب قرصی</a></li>
							<li><a href='#'>براش</a></li>
						</ul>
					</li>
					<li><a href='#'>پوست</a>
						<ul class ="subul">
							<li style="height: 60px"><a href='skin.php'>کرم مرطوب کننده دست</a></li>
							<li style="height: 60px"><a href='#'>فیس براش چکشی هولوگرامی</a></li>
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
					<li><a>| | |</a></li>
				</ul>
				</div>
			</div>
			<div class="middle">
				
				<div class="left2">
				</div>
				
				
				<div class="content2">
				
				<?php if($capsul): ?>
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
					
				</div>
				<div class="right2">
				<?php if($lamp || $capsul): ?>
					<legend><span style="font-size:15pt"><b>Search what you are intrested in:</b></span></legend>
					<form action="beautyandhealth.php" >
						<input type="checkbox"    name="lamp"    id="lamp"    value="show" />
						<label for="lamp"><b>برق لب لامپی</b></label><br/>
						
						<input type="checkbox"    name="capsul"    id="capsul"    value='show' />
						<label for="capsul"><b>برق لب قرصی</b></label><br/>
						
						<input type="submit" value="جست و جو" />
					</form>
					<?php endif; ?>
				</div>
			</div>
			<div class="footer">
				<p style="position: absolute; top: 650px; left: 50px; font-size: 22pt;"><span style="color:red;">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				<b><a  href="contactus.php"	 style="text-decoration: none; font-size:22pt; float: right;position:relative;top: 650px; right: 50px; color: #222">تماس با ما</a></b>
			</div>
		</div>
	</body>
</html>
