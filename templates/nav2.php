				<?php	include_once('config.php');?>
				<div class= "menue2 col-l-12 col-12">
					<ul class="login2">
					<?php if(is_user_logged_in()): ?>
						<li><a href="<?php echo home_url('logout'); ?>">خروج</a></li>
                        <li><a href="<?php echo home_url('dashboard'); ?>">صفحه کاربری</a></li>
                        <?php $current_user = get_current_user_data(); ?>
                        <li><?php echo "«".$current_user['username']."»\n"; ?>خوش آمدید</li>
                    <?php else: ?>
                        <li><a href="<?php echo home_url('login'); ?>">ورود</a></li>
                        <li><a href="<?php echo home_url('signup'); ?>">ثبت نام</a></li>
                    <?php endif; ?>
					</ul>
					<ul class ="ulmenue2" >
						<li id='homeli2'><a href="<?php echo home_url('home'); ?>">خانه</a></li>
						<li><span>دسته بندی</span></li>
					</ul>
					<h1 class ="h1">KikiCutest</h1>
				</div>
				<div class="showmenue">
					<ul class ="secondulmenue" >
						<li><a href='#'>آرایشی و بهداشتی</a>
							<ul class ="subul2">
								<li><a href="<?php echo home_url('beautyandhealth'); ?>?bag=1">کیف لوازم آرایشی</a></li>
								<li><a href="<?php echo home_url('beautyandhealth'); ?>?lamp=1">برق لب لامپی</a></li>
								<li><a href="<?php echo home_url('beautyandhealth'); ?>?lipgloss=1">برق لب قرصی</a></li>
								<li><a href="<?php echo home_url('beautyandhealth'); ?>?icebalm=1">بالم لب آبمیوه ای</a></li>
								<li><a href="#">براش</a>
									<ul class="subul3">
										<li><a href="<?php echo home_url('beautyandhealth'); ?>?brush=1">براش فانتزی 4تیکه</a></li>
										<li><a href="<?php echo home_url('beautyandhealth'); ?>?brushbh=1">براش BH Cosmetics</a></li>
										<li><a href="<?php echo home_url('beautyandhealth'); ?>?brushmask=1">براش ماسک</a></li>
									</ul>
								</li>
								<li><a href="<?php echo home_url('beautyandhealth'); ?>?rimmel=1">ریمل Hudamoji</a></li>
							</ul>
						</li>
						
						<li><a href='#'>پوست</a>
							<ul class ="subul2">
								<li><a href="<?php echo home_url('skin'); ?>?handcream=1">کرم مرطوب کننده دست</a></li>
								<li style="height: 60px"><a href="<?php echo home_url('skin'); ?>?facebrush=1">فیس براش چکشی هولوگرامی</a></li>
								<li><a href='#'>empty</a></li>
								<li><a href='#'>empty</a></li>
							</ul>
						</li>
						
						<li><a href='#'>مو</a>
							<ul class ="subul2">
								<li><a href='#'>empty</a></li>
								<li><a href='#'>empty</a></li>
								<li><a href='#'>empty</a></li>
								<li><a href='#'>empty</a></li>
							</ul>
						</li>
						
						<li><a href='#'>فانتزی</a>
							<ul class ="subul2" >
								<li><a href='#'>پاپوش یونیکورن</a></li>
								<li><a href="<?php echo home_url('fantasy'); ?>">آیینه</a></li>
								<li><a href='#'>empty</a></li>
								<li><a href='#'>empty</a></li>
							</ul>
						</li>
					</ul>

					<P style="box-shadow: 4px 4px 7px #d966ff,inset -8px -8px 7px rgba(255, 179, 236, 0.5);background-color: #ffb3ec; border-radius: 35px; width: auto; height: 50px; margin: 150px 17px;"><a href="<?php echo home_url('contactus'); ?>" style="font-family: Sahel, Shabnam;text-decoration: none; margin: 8px 70px;">تماس با ما</a></p>
				</div>