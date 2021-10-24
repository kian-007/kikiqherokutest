<?php


function get_title(){
    echo 'پروفایل';
}


function authentication_required(){
    return true;
}

function get_content(){ ?>

	<?php $current_user = get_current_user_data(); ?>
	<h3><?php echo $current_user['username']; ?></h3>
	<div class="left2 col-l-1 col-12">
    </div>
    <div class="content2 col-l-9 col-12">

        <div class="dform">
            <form method="post">
                <h1>Please sign in</h1>
                <div class="dinput">
                    <?php
                        $username ='';
                        if(isset($_POST['username'])){
                            $username = $_POST['username'];
                        }  
                     ?>
                    <input class="input second" id="new_username" name='new_username' placeholder="username" />
                    <label for="new_username">نام کاربری جدید:</label>
                </div>
                <div class="dinput">
                    <input class="input second" type="password" id="password" name='password' placeholder="Password" />
                    <label for="password">رمز عبور جدید:</label>
                </div>
                <br/>
                <button class="first" type="submit" name="save">Save</button>
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





	function css_link(){ ?>

		<link type="text/css"	rel="stylesheet"	href="index.css" />
		<link type="text/css"	rel="stylesheet"	href="index3.css" />
		
	<?php }