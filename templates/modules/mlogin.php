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
                            <div>
                                  <input class="form-control" id="username" name='username' placeholder="username">
                                  <label for="username">Username</label>
                            </div>
                            <div>
                                  <input type="password" id="password" name='password' placeholder="Password">
                                  <label for="password">Password</label>
                            </div>
                            <br/>
                            <button type="submit">Sign in</button>
                            <p>&copy; 2017–2021</p>
                        </form>
                    </div>
				<div class="right2">
				</div>
<?php }

function get_style(){ ?>
    <style>
       
    </style>
<?php }

function css_link(){ ?>

<link type="text/css"	rel="stylesheet"	href="index.css" />
<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }