<html>
	<head>
		<meta charset="UTF-8" />
            <?php include ('templates/modules/beauty.php'); ?>
            <title><?php echo get_title(); ?></title>
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
			h2
			{
				margin-left: 350px;
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
				<?php include_once('templates/nav.php'); ?>
			</div>
			<div class="middle">
			
			<?php include_once('templates/modules/beauty.php'); ?>
			<?php get_content(); ?>
			<?php include_once('templates/footer.php'); ?>
