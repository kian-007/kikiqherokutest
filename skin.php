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
	</head>
	<body onload="showSlides()">
	<a name="start"></a>
		<div class="container"> 
			<div class="header"> 
				<h1 class ="h1">KikiCutest</h1>
				<img class = "logo" src = 'images\kiki.jpg'  />
				<p class ="logoText">KikiCutest</p>
				<div class= "menue">
				<ul class ="ulmenue" >
					<li><a href='#'>آرایشی و بهداشتی</a>
						<ul class ="subul">
							<li><a href='#'>کیف لوازم آرایشی</a></li>
							<li><a href='#'>برق لب لامپی</a></li>
							<li><a href='#'>برق لب قرصی</a></li>
							<li><a href='#'>براش</a></li>
						</ul>
					</li>
					<li><a href='#'>پوست</a>
						<ul class ="subul">
							<li style="height: 60px"><a href='#'>کرم مرطوب کننده دست</a></li>
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
							<li><a href='arayeshi.html'>پاپوش یونیکورن</a></li>
							<li><a href='#'>آیینه</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
				</ul>
				</div>
			</div>
			<div class="middle">
				<div class="left2">
				</div>
				<div class="content2">
					<div class="doutside ftr d1"><img	id='img1'	src="images/skin/ax1.jpg"	/><img	id='img2' src="images/skin/mrtb99.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb44.jpg"	/><p class="pinside"></p></div>
					<div class="doutside"><img	src="images/skin/mrtb55.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/skin/mrtb66.jpg"	/><p class="pinside"></p></div>
					<div class="doutside"><img	src="images/skin/mrtb77.jpg"	/><p class="pinside"></p></div>
					<div class="doutside"><img	src="images/skin/mrtb88.jpg"	/><p class="pinside"></p></div>
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
				</div>
				
				<div class="right2">
				</div>
			</div>
			<div class="footer">
				 <p><span style="color:red">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				 <b><a  href="contactus.php"	 style="text-decoration: none; float: right;position:relative;top: -25px; right: 50px; color: #222">تماس با ما</a></b>
			</div>
		</div>
	</body>
</html>
