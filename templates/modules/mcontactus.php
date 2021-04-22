<?php

function get_title(){
return 'تماس با ما';
}

function get_content(){ ?>

				
				<div class="left2 col-1">
				</div>
				<div class="content2 col-9">
				<span style="color:gray;float:right; position:relative; top:70px; right:250px">تماس با ما  < </span><a href="index.php"	style="text-decoration: none; color: black;float:right; position:relative; top:70px; right:100px">صفحه اصلی  <</a>
					<div id=pcontainer >
						<div id="dimages">
							<span style="font-size:15pt; position:relative; float:right; text-align:right;">KikiCutest را در شبکه های اجتماعی دنبال کنید</span>
							<p class="mg" style="color:white; position: relative; top:50px"><a href="https://www.instagram.com/kikicutest_online/">kikicutest_online@</a><img style="float:right" class="imglogo" src="images\instagram.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:70px"><a href="https://t.me/kikicutest_online">kikicutest_online@</a><img style="clear:right; float:right;"class="imglogo" src="images\telegram.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:90px"><a href="https://mail.google.com/mail/u/1/#inbox">kikiqutest.online@gmail.com</a><img style="clear:right; float:right;" class="imglogo" src="images\email.svg"  /></p>
							<p class="mg" style="color:white; position: relative; top:110px">phone > 09931556696</p>
						</div>
					</div>
					
					
				</div>
				<div class="right2 col-1">
				</div>
<?php }

function get_style(){ ?>
        <style>
			#pcontainer
			{
				position:relative;
				top: 100px;
				background-color:#dddddd;
				width: 500px;
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
				float: left;
				top:100px;
				left: 100px;
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
			a
			{
				color: white;
			}
		</style>
<?php }

function css_link(){ ?>

	<link type="text/css"	rel="stylesheet"	href="index.css" />
	<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }