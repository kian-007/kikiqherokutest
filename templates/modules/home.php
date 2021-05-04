<?php

function get_title(){
return 'KikiCutest';
}

function get_content(){ ?>

				
				<div class="left2 col-l-1 col-12">
				</div>
				<div class="content2 col-l-9 col-12">

				<p class="title"><span>جدید ترین محصولات</span></p>


				<div id='preloader'>
					<div class="text-center">
						Loading...
						<div class="spinner-border" role="status">
							<span class="visually-hidden"></span>
						</div>
					</div>
				</div>
				<br/>
				
					<div class="slideshow-container">
						<!-- Full-width images with number and caption text -->
						<div class="mySlides fade">
							<div class="numbertext">1 / 11</div>
							<a href="<?php echo home_url(); ?>showimages.php?image=1">
							<img class="image" src="images\beautyandhealth\cobrush1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Brush</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">2 / 11</div>
							<a href="<?php echo home_url(); ?>showimages.php?image=2">
							<img class="image" src="images\beautyandhealth\cobrush2.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Brush</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">3 / 11</div>
							<a href="<?php echo home_url(); ?>showimages.php?image=3">
							<img class="image" src="images\skin\lipbalm1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Lipbalm's</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">4 / 11</div>
							<a href="<?php echo home_url(); ?>showimages.php?image=4">
							<img class="image" src="images\skin\nlipgloss.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Lipgloss's</div>
						</div>

						<div class="mySlides fade">
							<div class="numbertext">5 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=5">
							<img class="image" src="images\compressed\bags1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">6 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=6">
							<img class="image" src="images\compressed\bags2.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">7 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=7">
							<img class="image" src="images\compressed\brushes.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Brush</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">8 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=8">
							<img class="image" src="images\compressed\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">9 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=9">
							<img class="image" src="images\compressed\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">10 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=10">
							<img class="image" src="images\mirror2.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">11 / 11</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=11">
							<img class="image" src="images\kiki.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">KikiCutest</div>
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
						<span class="dot" onclick="currentSlide(4)"></span>
						<span class="dot" onclick="currentSlide(5)"></span>
						<span class="dot" onclick="currentSlide(6)"></span>
						<span class="dot" onclick="currentSlide(7)"></span>
						<span class="dot" onclick="currentSlide(8)"></span>
						<span class="dot" onclick="currentSlide(9)"></span>
						<span class="dot" onclick="currentSlide(10)"></span>
						<span class="dot" onclick="currentSlide(11)"></span>
					</div>
					

					<?php
					echo '<pre>';
					var_dump($_SESSION);
					echo '</pre>';
					?>

					<a href="#start" style="position:absolute; text-decoration: none; ">up<img	style="border-radius:45px" src="images/up2.jpg"	/></a>

		   		
				</div>
				<div class="right2 col-l-2 col-12">
				</div>
<?php }

function get_style(){ ?>
        <style>
			spinner-border{to{transform:rotate(360deg)}}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}
			
			.title{
				margin: 50px auto;
				width: 300px;
				border-bottom: solid #ff8566 2px;
			}
			.title span{
				font-family: Sahel, Shabnam;
				font-size: 17pt;
				margin-left: 60px;
				border-bottom: solid #ff471a 3px;
			}
			#preloader
			{
				margin-left: 350px;
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
<?php }

function get_java_script(){ ?>
		<script type="text/javascript">
			// var Index = 0;                    auto slide show
			// showSlides();
			
			// function showSlides() {
			// var i;
			// var slides = document.getElementsByClassName("mySlides");
			// for (i = 0; i < slides.length; i++) {
				// slides[i].style.display = "none";
			// }
			// Index++;
			// if (Index > slides.length) {Index = 1} 
			// slides[Index-1].style.display = "block";
			// setTimeout(showSlides, 3500); // Change image every 2 seconds
			// }
			
			
			
			var slideIndex = 1;
			showSlides(slideIndex);
			
			// Next/previous controls
			function plusSlides(n) {
			showSlides(slideIndex += n);
			}
			
			// Thumbnail image controls
			function currentSlide(n) {
			showSlides(slideIndex = n);
			}
			
			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			}
			
			
			
			<!-- loading spinner -->
			window.onload = function(){ document.getElementById("preloader").style.display = "none"; }
		</script> 
<?php }

function css_link(){ ?>

	<link type="text/css"	rel="stylesheet"	href="index.css" />
	<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }