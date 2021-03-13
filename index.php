<html>
	<head>
		<meta charset="UTF-8" />
		<title>KikiCutest</title>
		<link type="text/css"	rel="stylesheet"	href="index.css" />
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
							<li><a href='beautyandhealth.php'>برق لب لامپی</a></li>
							<li><a href='beautyandhealth.php'>برق لب قرصی</a></li>
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
				</ul>
				</div>
			</div>
			<div class="middle">
				<div class="left">
				</div>
				<div class="content">
				
					<div class="slideshow-container">
					
						<!-- Full-width images with number and caption text -->
						<div class="mySlides fade">
							<div class="numbertext">1 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=1">
							<img src="images\kiki.jpg" style="border-radius: 35px; width:100%; height:500px">
							</a>
							<div class="text">KikiCutest</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">2 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=2">
							<img src="images\bags1.jpg" style="border-radius: 35px; width:100%; height:500px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">3 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=3">
							<img src="images\bags2.jpg" style="border-radius: 35px; width:100%; height:500px">
                            </a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">4 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=4">
							<img src="images\brushes.jpg" style="border-radius: 35px; width:100%; height:500px">
							</a>
							<div class="text">Brush</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">5 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=5">
							<img src="images\mirror1.jpg" style="border-radius: 35px; width:100%; height:500px">
                            </a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">6 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=6">
							<img src="images\mirror1.jpg" style="border-radius: 35px; width:100%; height:500px">
							</a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">7 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=7">
							<img src="images\mirror2.jpg" style="border-radius: 35px; width:100%; height:500px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						  <!-- Next and previous buttons -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
						<br>
						
					</div>
					<!-- The dots/circles -->
					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
					</div>
					
					<a href="#start" style="position:absolute; text-decoration: none; ">up<img	style="border-radius:45px" src="images/up2.jpg"	/></a>

		   		 
				</div>
				<div class="right">
				</div>
			</div>
			<div class="footer">
				 <p><span style="color:red">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				 <b><a  href="contactus.php"	 style="text-decoration: none; float: right;position:relative;top: -25px; right: 50px; color: #222">تماس با ما</a></b>
			</div>
		</div>
	</body>
</html>
