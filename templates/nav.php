				<?php	include_once('config.php');?>
				<div class= "menue col-l-12 col-12">
				<ul class="login">
				<?php if(is_user_logged_in()): ?>
					<li><a href="<?php echo home_url('logout'); ?>">خروج</a></li>
				<?php else: ?>
					<li><a href="<?php echo home_url('login'); ?>">ورود</a></li>
				<?php endif; ?>
					<li><a href="<?php echo home_url('dashboard'); ?>">صفحه کاربری</a></li>
				</ul>
				<ul class ="ulmenue" >
					<li><a href='#'>آرایشی و بهداشتی</a>
						<ul class ="subul">
							<li><a href="<?php echo home_url('beautyandhealth'); ?>?bag=1">کیف لوازم آرایشی</a></li>
							<li><a href="<?php echo home_url('beautyandhealth'); ?>?lamp=1">برق لب لامپی</a></li>
							<li><a href="<?php echo home_url('beautyandhealth'); ?>?lipgloss=1">برق لب قرصی</a></li>
							<li><a href="<?php echo home_url('beautyandhealth'); ?>?icebalm=1">برق لب آبمیوه ای</a></li>
							<li><a href="#">براش</a>
								<ul class="subul-2">
									<li><a href="<?php echo home_url('beautyandhealth'); ?>?brush=1">براش فانتزی 4تیکه</a></li>
									<li><a href="<?php echo home_url('beautyandhealth'); ?>?brushbh=1">براش BH Cosmetics</a></li>
									<li><a href="<?php echo home_url('beautyandhealth'); ?>?brushmask=1">براش ماسک</a></li>
								</ul>
							</li>
							<li><a href="<?php echo home_url('beautyandhealth'); ?>?rimmel=1">ریمل Hudamoji</a></li>
						</ul>
					</li>
					
					<li><a href='#'>پوست</a>
						<ul class ="subul">
							<li style="height: 60px"><a href="<?php echo home_url('skin'); ?>?handcream=1">کرم مرطوب کننده دست</a></li>
							<li style="height: 60px"><a href="<?php echo home_url('skin'); ?>facebrush=1">فیس براش چکشی هولوگرامی</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
					
					<li><a href='#'>مو</a>
						<ul class ="subul">
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>
					
					<li><a href='#'>فانتزی</a>
						<ul class ="subul" >
							<li><a href='#'>پاپوش یونیکورن</a></li>
							<li><a href="<?php echo home_url('fantasy'); ?>">آیینه</a></li>
							<li><a href='#'>empty</a></li>
							<li><a href='#'>empty</a></li>
						</ul>
					</li>

					<li id='homeli'><a href="<?php echo home_url('home'); ?>">خانه</a></li>
					<li><span>دسته بندی</span></li>
				</ul>
				<h1 class ="h1">KikiCutest</h1>
				</div>