<?php
function get_title(){
    return 'ورود به صفحه کاربری';
}

function get_content(){ ?>
    <div class="left2 col-l-1 col-12">
    </div>
    <div class="content2 col-l-9 col-12">

        <div class="dform">
            <form method="post">
                <h1>ورود به حساب کاربری</h1>
                <div class="dinput">
                    <?php
                        $username ='';
                        if(isset($_POST['username'])){
                            $username = $_POST['username'];
                        }  
                     ?>
                    <input class="input second" id="username" name='username' placeholder="username" value="<?php echo $username; ?>" />
                    <label for="username">نام کاربری</label>
                </div>
                <div class="dinput">
                    <input class="input second" type="password" id="password" name='password' placeholder="Password" />
                    <label for="password">رمز عبور</label>
                </div>
                <br/>
                <button class="first" type="submit" name="login">Sign in</button>
                <p style="margin-left: 140px;">&copy;2020–2021</p>
            </form>
        </div>

    </div>
    <div class="right2 col-l-2 col-12">
    </div>
<?php }


function process_inputs(){
    include_once ('lib/users.php');
    include_once ('lib/modules.php');

    if(!isset($_POST['login'])){
        return;
    }

    if(isset($_POST['username'])){
        $username = strtolower($_POST['username']);
    }

    if(empty($username)){
        add_message('نام کاربری نمی تواند خالی باشد !', 'error');
        return;
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if(empty($password)){
        add_message('رمز عبور نمی تواند خالی باشد !', 'error');
        return;
    }

    user_login($username, $password);

    if(!is_user_logged_in()){ 
        
        add_message('نام کاربری یا رمز عبور اشتباه است', 'error');
    }else{
        redirect_to(home_url());
		add_message('user login was successfully', 'success');
    }
}


function get_style(){ ?>
    
        h1 {
            margin-left: 75px;
        }
        .dform {
            background: #d1bbbb;
            margin: 0px auto;
            border-radius: 30px;
            width: 350px;
            height: 350px;
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
                margin-top: -25;
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


    
<?php }




function css_link(){ ?>
    <link type="text/css"	rel="stylesheet"	href="index.css" />
    <link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }

function get_script(){ ?>
    <script>
        window.scrollBy(0,250)
    </script>
<?php }