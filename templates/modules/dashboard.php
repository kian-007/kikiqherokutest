<?php


function get_title(){
    echo 'پروفایل';
}


function authentication_required(){
    return true;
}

function get_content(){ ?>

	<div class="left2 col-l-1 col-12">
    </div>
    <div class="content2 col-l-9 col-12">
    <?php $current_user = get_current_user_data(); ?>

        <span>کاربر: <?php echo $current_user['username']; ?></span>
        <div class="dform">
            <form method="post">
                <h1>ویرایش اطلاعات کاربری</h1>
                <br>
                <div class="dinput">
                    <input class="input second" id="new_username" name='new_username' placeholder="نام کاربری" />
                    <label for="new_username">نام کاربری جدید:</label>
                </div>
                <div class="dinput">
                    <input class="input second" type="password" id="password" name='password' placeholder="رمز عبور" />
                    <label for="password">رمز عبور جدید:</label>
                </div>
                <button class="first" type="submit" name="save">ذخیره</button>
                <p style="margin-left: 140px;">&copy;2017–2021</p>
            </form>
        </div>

    </div>
    <div class="right2 col-l-2 col-12">
    </div>

<?php }




function process_inputs(){
    
    //    if(is_user_logged_in()){
    //        redirect_to(home_url());
    //    }
        
        if(!isset($_POST['save'])){
            return;
        }
        
        $current_user = get_current_user_data();
        $username = $current_user['username'];
        $_POST['username'] = $username;
        
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }

        if(isset($_POST['new_username'])){
            $new_username = $_POST['new_username'];
        }
        

        if(empty($new_username)){
            add_message('نام کاربری جدید نمیتواند خالی باشد', 'error');
            return;
        }

        if(empty($password)){
            add_message('رمز عبور نمیتواند خالی باشد!', 'error');
            return;
        }
        
        if(user_exists($new_username)){
            add_message('این نام کاربری قبلا انتخاب شده است!', 'warning');
            return;
        }

        update_user($_POST);
        
        $user = get_user($new_username);
        if($user){
            add_message('تغیرات جدید با موفقیت ذخیره شد', 'info');
            user_login($new_username, $password);
        } else {
            add_message('خطا!', 'error');
        }

        
    }



	function get_style(){ ?>
		<style>
            label{
                position: relative;
                bottom: 100px;
                margin-left: 50px;
            }
			h1 {
				margin-left: 75px;
			}
			.dform {
				background: #d1bbbb;
				margin: 0px auto;
				border-radius: 30px;
				width: 420px;
				height: 350px;
				padding-right: 100px;
				box-shadow: 7px 7px 10px rgba(0, 0, 0, 0.7), -7px -7px 7px rgb(255, 255, 255) ;
			}
			button {
				margin-left: 35px;
				width: 200px;
				height: 50px;
				background: rgb(91, 33, 182);
				color: #fff;
				position: relative;
				margin-bottom: 25px;
				border-radius: 32px;
				text-align: center;
				cursor: pointer;
			}
			button:hover {
				background-color: rgb(202, 67, 168);
			}
			.input {
				margin-left: -50px;
				width: 200px;
				height: 50px;
				background: #d1bbbb;
				position: relative;
				margin-bottom: 25px;
				border-radius: 32px;
				text-align: center;
			}
			.input::placeholder {
				line-height: 100px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 32px;
				font-weight: semibold;
				z-index: 6;
			}
			.first {
				box-shadow: 6px 6px 10px rgba(255, 255, 255, 0.8), -6px -6px 10px rgba(0, 0, 0, 0.2);
				color: white;
			}
			.second {
				box-shadow: inset -4px -4px 7px rgb(255, 255, 255), inset 8px 8px 7px rgba(0, 0, 0, 0.5);
				color: gray;
			}
			input :hover {
				border-top-color: blue;
				border-left-color: blue;
				border-right-color: blue;
			}
			.input:focus ~label{
				margin-top: -25;
				margin-left: 0px;
				color: #03e9f4; font-size: 14px;
			}
	
			@media only screen and (max-width: 768px){
				.input ~label{
					position: relative;
					margin-bottom: 25px;
                    margin-left: 14px;
					left: -115px;
					z-index: 7;
					transition: .5s;
				}
			}
	
	
			@media only screen and (min-width: 768px){
				.dform{
					width: 375px;
				}
				.input{
					margin-left: 95px;
				}
				.input:focus ~label{
					margin-top: -25;
					margin-left: 0px;
					color: #03e9f4; font-size: 14px;
				}
				.input ~label{
					position: relative;
					margin-top: -25;
					left: 15px;
					z-index: 7;
					transition: .5s;
				}
				button{
					margin-left: 100px;
				}
			}
	
	
		</style>
	<?php }



	function css_link(){ ?>

		<link type="text/css"	rel="stylesheet"	href="index.css" />
		<link type="text/css"	rel="stylesheet"	href="index3.css" />
		
	<?php }