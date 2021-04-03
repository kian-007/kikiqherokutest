<html>
	<head>
		<meta charset="UTF-8" />
		<title>تماس با ما</title>
		<link type="text/css"	rel="stylesheet"	href="index.css" />
		<style>
			
			
			#pcontainer
			{
				position:relative;
				top: 100px;
				background-color:#dddddd;
				height: 500px;
				border: solid black 3px;
				border-top-left-radius:35px;
				border-bottom-right-radius:35px;
				overflow:auto;
			}
			
			#pcontainer #dimages
			{
				background-color:#888888; 
				width:300px;
				height:300px;
				position:relative;
				top:100px;
				left: 300px;
				box-shadow: 20px 15px 15px #333388
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
				
				
				
			})
		</script>
		
	</head>
		<body onload="showSlides()">
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
				<div class="left">
				</div>
				<div class="content">
				<span style="color:gray;float:right; position:relative; top:70px; right:250px">تماس با ما  < </span><a href="index.php"	style="text-decoration: none; color: black;float:right; position:relative; top:70px; right:100px">صفحه اصلی  <</a>
					<div id=pcontainer >
						<div id="dimages">
							<span style="font-size:15pt; position:relative; float:right; text-align:right;">KikiCutest را در شبکه های اجتماعی دنبال کنید</span>
							<p class="mg" style="color:white; position: relative; top:50px">kikiqutest_online@<img style="float:right" class="imglogo" src="images\instagram.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:70px">kikiqutest_online@<img style="clear:right; float:right;"class="imglogo" src="images\telegram.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:90px">kikiqutest.online@gmail.com<img style="clear:right; float:right;" class="imglogo" src="images\email.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:110px">phone > 09931556696</p>
						</div>
					</div>
					
					
				</div>
				<div class="right">
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