			</div>
			<div class="footer">
				<p class="rights"><span style="color:red;">  2021©  کلیه حقوق این سایت محفوظ میباشد</span></p>
				<b><a class="contact" href="<?php echo home_url('contactus'); ?>" >تماس با ما</a></b>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff66b3" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,53.3C384,64,480,96,576,128C672,160,768,192,864,197.3C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
			</div>
		</div>
		<?php
			simple_load_module();
			if(function_exists('get_script')){
            	get_script();
			}
		?>
			<script type="text/javascript">
				document.getElementsByClassName('prevli2').style.backgroundColor = "yellow"
			</script> 
	</body> 
</html>