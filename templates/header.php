<html>
	<head>
		<meta charset="UTF-8" />
            <?php include_once ('lib/functions.php');
                  $module = get_module_name();
                  include_once ('templates/modules/'.'m'."$module"); ?>
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
				$('.ulmenue').children().addClass('prevli')
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
				
				$('#p1').mouseenter(function() {
					$('#img1').fadeOut(500)
					$('#img2').fadeIn(500)
				})
				$('#p1').mouseout(function() {
					$('#img2').fadeOut(500)
					$('#img1').fadeIn(500)
				})
				$('.pinside').hover(
                                   function(){
								   $(this).prev('.price').css('background-color', "yellow")},
                                   function(){
                               $(this).prev('.price').css('background-color', "#ff3385")        
                                   })
				
				$('form').find('input[type="checkbox"]').hide()
				$('form').find('input[type="checkbox"]').after("<img class='mychk' src='images/chk3.jpg' />")
				$('form').find('input[type="checkbox"]').mychk()
			})
		</script>
                <?php  include_once ('lib/functions.php');
                       $module = get_module_name();
                       include_once ('templates/modules/'.'m'."$module");
                       get_style(); ?>
	</head>
	<body onload="showSlides()">
	<a name="start"></a>
		<div class="container"> 
				<img class = "logo" src = 'images\kiki.jpg'  />
				<p class ="logoText">KikiCutest</p>
			<div class="header"> 
				<?php include_once('templates/nav.php'); ?>
			</div>
			<div class="middle">