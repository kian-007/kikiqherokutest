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
						<div class="spinner-border" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
					</div>
				</div>
					<div class="slideshow-container">
					
						<!-- Full-width images with number and caption text -->
						<div class="mySlides fade">
							<div class="numbertext">1 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=2">
							<img src="images\bags1.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">2 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=3">
							<img src="images\bags2.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">BAG's</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">3 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=4">
							<img src="images\brushes.jpg" style="border-radius: 35px; width:100%; height:550px">
							</a>
							<div class="text">Brush</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">4 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=5">
							<img src="images\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
                            </a>
							<div class="text">Mirror</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">5 / 7</div>
							<a href="https://kikiq.herokuapp.com/showimages.php?image=6">
							<img src="images\mirror1.jpg" style="border-radius: 35px; width:100%; height:550px">
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

		   		
				</div>
				<div class="right">
				</div>
<?php }