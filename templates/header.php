<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="keywords"  content="kikicutest,کیکی کیوتست,ارایشی,بهداشتی,فانتزی,پوست,مو" />
		<meta name="description"  content="کیکی کیوتست ارائه کننده انواع محصولات فانتزی و آرایشی و بهداشتی پوست مو" />
		<meta name="author"  content="kikicutest" />
		<meta name="viewport"  content="width=device-width, initial-scale=1.0" />

            <?php
				simple_load_module();
			if(function_exists('get_title')): ?>
            	<title><?php echo get_title(); ?></title>
			<?php endif; ?>

			<?php
				if(function_exists('css_link')){
					css_link();
				}
			?>
		<script src="jquery-3.5.1.min.js"></script>
		<script src="chk.js"></script>
		<script>
			$.noConflict()
			jQuery(document).ready(function($){
/*var d = new Date();
var d = d.toDateString();
alert(d + '\n خوش آمدید')
slert('User <?php   echo $_GET['REMOTE_ADDR'];	?> \n Wellcome To kikiqutest')*/

				

				$('.ulmenue').children().addClass('prevli')
				$('.secondulmenue').children('li').addClass('prevli2')
				$('.ulmenue').find('li').last().removeClass('prevli')
				$('.ulmenue').find('li').last().prev().removeClass('prevli')
				
				$('.ulmenue').find('li:nth-child(6)').click(function(){ 
					$(this).toggleClass('baz')
					$('.ulmenue').find('li').filter('.prevli').toggle(250)
					if($(this).hasClass('baz')){
					$(this).css({'background-image': "url('images/threeline4.jpg')", 'background-size': "45px 41px"})
					}else{
						$(this).css({'background-image': "url('images/threeline6.jpg')", 'background-size': "45px 41px"})
					}
				})
				
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

				$('.ulmenue').find('.subul').children('li').eq(4).hover(function(){
					$(this).find('.subul-2').slideDown(250)
					$('body').css('background-color', "rgba(0,0,0,0.5")
					$('.footer').css('background-color', "rgba(0,0,0,0.5")
					$('.middle').css('-webkit-filter', "blur(10px)")
					$('.footer').css('-webkit-filter', "blur(10px)")
					$(this).css('background-color', "orange")
					
				}, 
				function(){
					$(this).find('.subul-2').slideUp(250)
					$('body').css('background-color', "rgba(0,0,0,0")
					$('.footer').css('background-color', "rgba(0,0,0,0")
					$('.middle').css('-webkit-filter', "blur(0px)")
					$('.footer').css('-webkit-filter', "blur(0px)")
					$(this).css('background-color', "pink")
					
				})
				

				
				// for header2 -------------------------
				$('.ulmenue2').find('li:nth-child(2)').click(function(){ 
					$('.showmenue').fadeToggle()
					$('.showmenue').toggleClass('show')

					if($('.showmenue').hasClass('show')){
						$('.showmenue').css('-webkit-animation','a9 0.7s')
						$('body').css('background-color', "rgba(0,0,0,0.5)")
						$('.footer').css('background-color', "rgba(0,0,0,0.5)")
						$('.middle').css('-webkit-filter', "blur(10px)")
						$('.footer').css('-webkit-filter', "blur(10px)")
					}else{
						$('.showmenue').css('-webkit-animation','a10 0.5s')
						$('body').css('background-color', "rgba(0,0,0,0")
						$('.footer').css('background-color', "rgb(255, 112, 197)")
						$('.middle').css('-webkit-filter', "blur(0px)")
						$('.footer').css('-webkit-filter', "blur(0px)")
					}
					
				})
				
				$('.secondulmenue').children('li').click(function() {
					$(this).addClass('showarrow')
					$(this).find('.subul2').addClass('current')
					$(this).find('.subul2').slideToggle()
					$('.subul2').not('.current').slideUp()
					$(this).find('.subul2').removeClass('current')
					$(this).removeClass('showarrow')
				})

				$('.secondulmenue').find('.subul2').children('li').eq(4).click(function() {
					$(this).addClass('showarrow')
					$(this).find('.subul3').addClass('current')
					$(this).parent().slideToggle()
					$(this).find('.subul3').slideToggle()
					$('.subul3').not('.current').slideUp()
					$('.subul3').not('.current').css('background-color', "#ff66ff")
					$(this).find('.subul3').removeClass('current')
					$(this).removeClass('showarrow')
					$(this).css('background-color', "orange")
				})

				$('.secondulmenue').children('li').hover(function(){
					if($(this).next().hasClass('open')){
						$(this).css('background-image', "url('images/arrow2.jpg')")
					}else{
						$(this).css('background-image', "url('images/arrow3.jpg')")
					}
				}, 
				function(){
					if($(this).prev().hasClass('open')){
						$(this).css('background-image', "url('images/arrow3.jpg')")
					}else{
						$(this).css('background-image', "url('images/arrow2.jpg')")
					}
				})
				// for header2 -------------------------
				
				$('#p1').mouseenter(function() {
					$('#img1').fadeOut(500)
					$('#img2').fadeIn(500)
				})
				$('#p1').mouseout(function() {
					$('#img2').fadeOut(500)
					$('#img1').fadeIn(500)
				})

				$('#p2').mouseenter(function() {
					$('#img3').fadeOut(500)
					$('#img4').fadeIn(500)
				})
				$('#p2').mouseout(function() {
					$('#img4').fadeOut(500)
					$('#img3').fadeIn(500)
				})

				$('.pinside').hover(
                                   function(){
								   $(this).prev('.price').css('background-color', "yellow")
								   $(this).prev('.price').css('color', "black")},
                                   function(){
                               $(this).prev('.price').css('background-color', "#ff3385")        
                               $(this).prev('.price').css('color', "#ffffff")        
                                   })
				
				$('form').find('input[type="checkbox"]').hide()
				$('form').find('input[type="checkbox"]').after("<img class='mychk' src='images/chk3.jpg' />")
				$('form').find('input[type="checkbox"]').mychk()
				
				$('.login').find('li').hover(function(){
					$(this).css('background-color', "#56313b")
					$(this).css('transition', "background-color 1s")
					$(this).find('a').css('color', "#e7dade")
					
				}, function(){
					$(this).css('background-color', "pink")
					$(this).css('transition', "background-color 1s")
					$(this).find('a').css('color', "rgb(70,48,48)")
				})

				$('.ulmenue').children('li').eq(0).nextUntil('li:last-child').css('width', "75px")
				$('.ulmenue').children('li').eq(0).nextUntil('li:last-child').css('background-position', "50px 15px")
				$('.ulmenue').children('li').first().css('width', "160px")
				$('.ulmenue').children('li').first().css('background-position', "130px 15px")
				$('.ulmenue').children('li').eq(4).css('background-position', "33px 7px")

			})
		</script>
				<style>
					<?php
						simple_load_module();
						if(function_exists('get_style')){
							get_style();
						}
					?>
					
					
					@-webkit-keyframes a9 {
						from {
							position: fixed;
							top: 50px;
							left: 325px;
							display: inline-block;
	
						}
						to {
							position: fixed;
							top: 50px;
							left: 165px;
							display: inline-block;
	
							}
						}
					@-webkit-keyframes a10 {
						0% {
							position: fixed;
							top: 50px;
							left: 165px;
							display: inline-block;
						}
						99% {
							position: fixed;
							top: 50px;
							left: 325px;
							display: inline-block;
	
						}
						100%{
							position: fixed;
							top: 50px;
							left: 315px;
							display: none;
							}
						}
					
				</style>
	</head>
	<body onload="showSlides(); scroll(); ">
	<a name="start"></a>
		<div class="container col-l-12 col-12"> 
			<div class="header col-l-12 col-12"> 
				<?php include_once('templates/nav.php'); ?>
				<img class = "logo" src = 'images\kiki.jpg'  />
				<p class ="logoText">KikiCutest</p>
			</div>
			<div class="header2 col-l-12 col-12"> 
				<?php include_once('templates/nav2.php'); ?>
				<img class = "logo" src = 'images\kiki.jpg'  />
				<p class ="logoText">KikiCutest</p>
			</div>
			<div class="middle">