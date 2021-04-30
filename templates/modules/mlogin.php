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
                <h1>Please sign in</h1>
                <div class="dinput">
                    <input class="input second" id="username" name='username' placeholder="username" />
                    <label for="username">Username</label>
                </div>
                <div class="dinput">
                    <input class="input second" type="password" id="password" name='password' placeholder="Password" />
                    <label for="password">Password</label>
                </div>
                <br/>
                <button class="first" type="submit">Sign in</button>
                <p style="margin-left: 170px;">&copy;2017–2021</p>
            </form>
        </div>

    </div>
    <div class="right2 col-l-2 col-12">
    </div>
<?php }

function get_style(){ ?>
    <style>
        h1 {
            margin-left: 170px;
        }
        .dform {
            background: #d1bbbb;
            margin-top: 100px;
            margin-left: 300px;
            border-radius: 30px;
            width: 500px;
            height: 500px;
            box-shadow: 7px 7px 10px rgba(0, 0, 0, 0.7), -7px -7px 7px rgb(255, 255, 255), ;
        }
        button {
            margin-left: 170px;
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
            margin-left: 170px;
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
    </style>
<?php }

function css_link(){ ?>
    <link type="text/css"	rel="stylesheet"	href="index.css" />
    <link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }