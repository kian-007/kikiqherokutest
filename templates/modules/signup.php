<?php


function get_title(){
    echo 'ثبت نام';
}


function get_content(){ ?>

    <div class="left2 col-l-1 col-12">
    </div>
    <div class="content2 col-l-9 col-12">

        <div class="dform">
            <form method="post">
                <h2 style="margin-left: auto">ثبت نام</h2>
                <span>فیلد هایی که با  * مشخص شده اند پر کردنشان اجباری است.</span>
                <div class="dinput">
                    <label for="username">* نام کاربری جدید خود را وارد کنید:</label>
                    <input class="input second" id="username" name="username" placeholder="Username">
                </div>
                <br>
                <div class="dinput">
                    <label for="email">ایمیل خود را وارد کنید:</label>
                    <input type="email" class="input second" id="email" name="email" placeholder="Email" aria-describedby="emailHelp">
                </div>
                <div class="dinput">
                    <br>
                    <label for="phone_number">* شماره همراه خود را وارد کنید:</label>
                    <input class="input second" id="phone_number" name="phone_number" placeholder="Phone Number">
                </div>
                <br>
                <div class="dinput">
                    <label for="password">* رمز عبور جدید خود را وارد کنید:</label>
                    <input type="password" class="input second" id="password" name="password" placeholder="Password">
                </div>
                <br/>
                <button type="submit" name="signup" class="first" style="margin-right: 50px">ذخیره و ثبت نام</button>
                <p style="margin-left: 110px;">&copy;2020–2021</p>
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

    if(!isset($_POST['signup'])){
        return;
    }

    if(isset($_POST['username'])){
        $username = strtolower($_POST['username']);
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    if(isset($_POST['phone_number'])){
        $phone_number = $_POST['phone_number'];
    }

    if(isset($_POST['first_name'])){
        $first_name = $_POST['first_name'];
    } else {
        $first_name = '';
        $_POST['first_name'] = $first_name;
    }

    if(isset($_POST['last_name'])){
        $last_name = $_POST['last_name'];
    } else {
        $last_name = '';
        $_POST['last_name'] = $last_name;
    }

    if(empty($username)){
        add_message('نام کاربری نمیتواند خالی باشد!', 'error');
        return;
    }
    if(empty($password)){
        add_message('رمز عبور نمیتواند خالی باشد!', 'error');
        return;
    }

    if(empty($phone_number)){
        add_message('فیلد شماره تماس نمیتواند خالی باشد!', 'error');
        return;
    }

//    var_dump($_POST);

    add_user($_POST);
    user_login($username, $password);

    if(!is_user_logged_in()){
        add_message('لطفا همه فیلد های * دار را پر کنید', 'danger');
    } else {
        add_message('ثبت نام شما موفقیت آمیز بود', 'success');
        sleep(3);
        redirect_to(home_url());
    }

}




function get_style(){ ?>
    <style>
        h1 {
            margin-left: 75px;
        }

        .dinput input{
            text-align: center;
            margin-right: 50px;
        }

        .dform {
            background: #d1bbbb;
            margin: 0px auto;
            border-radius: 30px;
            width: 85%;
            height: auto;
            box-shadow: 7px 7px 10px rgba(0, 0, 0, 0.7), -7px -7px 7px rgb(255, 255, 255) ;
            text-align: center;
            direction: rtl;
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
            .dinput input{
                margin-right: 120px;
            }
        }


        @media only screen and (min-width: 768px){
            .dform{
                width: 400px;
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

function get_script(){ ?>
    <script>
        window.scrollBy(0,450)
    </script>
<?php }