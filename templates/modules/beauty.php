<?php

function get_title(){
    return 'beauty';
}
function get_content(){ ?>
				
				<div class="left2">
				</div>
				
				
				<div class="content2">
				
				<?php if($lipgloss): ?>
				<h2>برق لب قرصی</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/capsul7.jpg"	/><img	id='img2' src="images/beautyandhealth/capsul9.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul1.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul3.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul4.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/capsul6.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
				
				<?php if($lamp): ?>
				<h2>برق لب لامپی</h2>
					<div class="doutside ftr"><img src="images/beautyandhealth/lamp6.jpg"/><p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp1.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp2.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp3.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp4.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/lamp5.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				<?php if($brush): ?>
				<h2>براش</h2>
					<div class="doutside ftr d1"><img	id='img1'	src="images/beautyandhealth/newbrush.jpg"	/><img	id='img2' src="images/beautyandhealth/newbrush2.jpg"	/><p id='p1'><p class="pinside"></p></div>
					<div class="doutside ftr"><img src="images/beautyandhealth/nbrush5.jpg"/><p><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/abrush5.jpg"	/><p class="pinside"></p></div>
					<div class="doutside ftr"><img	src="images/beautyandhealth/cbrush5.jpg"	/><p class="pinside"></p></div>
					
					<div class="dani"><img	style="position:absolute; top:4px; float:right; border-radius:45px" src="images/up.jpg"	/><a id='contact' href="#start" style="position:absolute; text-decoration: none; "><p class="pani"></p></a></div>
					<?php endif; ?>
					
				</div>
				<div class="right2">
				<?php if($lamp || $lipgloss || $brush): ?>
				<fieldset>
					<legend><span style="font-size:15pt; text-align:right; direction:rtl"><b>کالای مورد نیاز خود را جست و جو کنید:</b></span></legend>
					<form action="beautyandhealth.php" >
						<input type="checkbox"    name="lamp"    id="lamp"    value="show" />
						<label for="lamp"><b>برق لب لامپی</b></label><br/>
						
						<input type="checkbox"    name="lipgloss"    id="lipgloss"    value='show' />
						<label for="lipgloss"><b>برق لب قرصی</b></label><br/>
						
						<input type="checkbox"    name="brush"    id="brush"    value='show' />
						<label for="brush"><b>براش</b></label><br/>
						
						<input type="submit" value="جست و جو" />
					</form>
				</fieldset>
					<?php endif; ?>
				</div>
<?php }