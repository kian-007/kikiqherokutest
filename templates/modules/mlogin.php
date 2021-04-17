<?php

function get_title(){
    return 'ورود به صفحه کاربری';
}

function get_content(){ ?>

                <div class="left2">
				</div>

				<div class="content2">
                    <div class="dform">
                        <form    method="post">
                            <h1>Please sign in</h1>
                            <div class="dinput">
                                  <input class="input first" type="text" id="username" name='username' placeholder="username">
                                  <label for="username">Username</label>
                            </div>
                            <div class="dinput">
                                  <input class="input second" type="password" id="password" name='password' placeholder="Password">
                                  <label for="password">Password</label>
                            </div>
                            <br/>
                            <button type="submit">Sign in</button>
                            <p style="margin-left: 170px;">&copy; 2017–2021</p>
                        </form>
                    </div>
				<div class="right2">
				</div>
<?php }

function get_style(){ ?>
    <style>
        h1
        {
            margin-left: 170px;
        }
       .dform
       {
            background-color: gray;
            margin-top: 100px;
            margin-left: 300px;
            botder: solid black 1px;
            width: 500px;
            height: 500px;
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color=#274540)";/*IE 8*/
            -moz-box-shadow: 3px 3px 3px 3px #274540;/*FF 3.5+*/
            -webkit-box-shadow: 3px 3px 3px 3px #274540;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
            box-shadow: 3px 3px 3px 3px #274540;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
            filter: progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color=#274540); /*IE 5.5-7*/
       }
       button
       {
           margin-left: 170px;
           background-color: blue;
           width: 200px;
           height: 30px;
       }
       input
       {
           margin-left: 170px;
           width: 200px;
           height: 30px;
       }
       input :hover
       {
            border-top-color: blue;
            border-left-color: blue;
            border-right-color: blue;

       }
       input ::placeholder
       {
            color: blue;
            font-size: small;
            font-weight: 100;
       }
      
    </style>
<?php }

function css_link(){ ?>

<link type="text/css"	rel="stylesheet"	href="index.css" />
<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }