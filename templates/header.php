<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="keywords"  content="kikicutest,کیکی کیوتست,ارایشی,بهداشتی,فانتزی,پوست,مو" />
		<meta name="description"  content="کیکی کیوتست ارائه کننده انواع محصولات فانتزی و آرایشی و بهداشتی پوست مو" />
		<meta name="author"  content="kikicutest" />
		<meta name="viewport"  content="width=device-width, initial-scale=1.0" />

            <?php   include_once ('lib/functions.php');
					$module = get_module_name();
					$module_file = "templates/modules/$module.php";
					if(file_exists($module_file)){
						include_once ("templates/modules/$module.php");
					}else{
						include_once ('templates/modules/home.php');
					}
                  ?>
            <title><?php echo get_title(); ?></title>

			<?php css_link(); ?>
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
				

				
				// for header2 -------------------------
				$('.ulmenue2').find('li:nth-child(2)').click(function(){ 
					$('.showmenue').fadeToggle()
					$('.showmenue').toggleClass('show')

					if($('.showmenue').hasClass('show')){
						$('body').css('background-color', "rgba(0,0,0,0.5)")
						$('.footer').css('background-color', "rgba(0,0,0,0.5)")
						$('.middle').css('-webkit-filter', "blur(10px)")
						$('.footer').css('-webkit-filter', "blur(10px)")
					}else{
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

				$('.secondulmenue').children('li').children('li').click(function() {
					$(this).addClass('showarrow')
					$(this).find('.subul2').addClass('current')
					$(this).find('.subul2').slideToggle()
					$('.subul2').not('.current').slideUp()
					$(this).find('.subul2').removeClass('current')
					$(this).removeClass('showarrow')
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
                <?php   include_once ('lib/functions.php');
						$module = get_module_name();
						$module_file = "templates/modules/$module.php";
						if(file_exists($module_file)){
							include_once ("templates/modules/$module.php");
						}else{
							include_once ('templates/modules/home.php');
						}
                       get_style(); ?>
	</head>
	<body onload="showSlides()">
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