<html>
	<head>
		<meta charset="UTF-8" />
		<title>KikiCutest</title>
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
				$('.ulmenue').find('li:nth-child(6)').click(function(){ 
					$(this).toggleClass('baz')
					$('.ulmenue').find('li:nth-child(6)').prevAll().toggle(250)
					if($(this).hasClass('baz')){
					$(this).css({'background-image': "url('images/threeline4.jpg')", 'background-size': "45px 41px"})
					}else{
						$(this).css({'background-image': "url('images/threeline3.jpg')", 'background-size': "45px 41px"})
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
					<div class="doutside ftl d1"><img	src="images/fantasy/mir14.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir1.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir4.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir6.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir7.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir8.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir9.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir10.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir11.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir12.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftl"><img	src="images/fantasy/mir13.jpg"	/><p class="pinside"></p></div>
					
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
				</div>
				
				<div class="right2">
				</div>
			</div>
			<div class="footer">
				 <p style="position: absolute; top: 650px; left: 50px; font-size: 22pt;"><span style="color:red;">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				 <b><a  href="contactus.php"	 style="text-decoration: none; font-size:22pt; float: right;position:relative;top: 650px; right: 50px; color: #222">تماس با ما</a></b>
			</div>
		</div>
	</body>
</html>
