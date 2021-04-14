<?php

function get_title(){
return 'KikiCutest';
}

function get_content(){ ?>

				
				<div class="left">
				</div>
				<div class="content">
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
							<div class="numbertext">1 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=2">
							<img src="images\compressed\bags1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">2 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=3">
							<img src="images\compressed\bags2.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">3 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=4">
							<img src="images\compressed\brushes.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Brush</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">4 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=5">
							<img src="images\compressed\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">5 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=6">
							<img src="images\compressed\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">6 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=7">
							<img src="images\mirror2.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">7 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=1">
							<img src="images\kiki.jpg" style="border-radius: 35px; width:100%; height:550px">
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
					</div>
					
					<a href="#start" style="position:absolute; text-decoration: none; ">up<img	style="border-radius:45px" src="images/up2.jpg"	/></a>

				<br/>
				<br/>
				<br/>
					<?php 
					
					$db = parse_url(getenv("DATABASE_URL"));
					$db["path"] = ltrim($db["path"], "/"); 
					$db['path']->query("
						INSERT INTO users(username, password, first_name, last_name) VALUES
						('admin2', '98765' ,'kiann' ,'soleimanii');
					");
					
					?>
				
				</div>
				<div class="right">
				</div>
<?php }

function get_style(){ ?>
        <style>
			spinner-border{to{transform:rotate(360deg)}}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}
			
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