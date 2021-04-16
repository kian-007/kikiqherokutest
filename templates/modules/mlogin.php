<?php

function get_title(){
    return 'ورود به صفحه کاربری';
}
function get_content(){ ?>

<div class="row mb-3">
      <div class="col-md-4 themed-grid-col"></div>
      <div class="col-md-4 themed-grid-col">
          
          <br/>
          <br/>
          <main class="form-signin">
              <form    method="post">
                  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                  <div class="form-floating">
                        <input class="form-control" id="username" name='username' placeholder="username">
                        <label for="floatingInput">Username</label>
                  </div>
                  <div class="form-floating">
                        <input type="password" class="form-control" id="password" name='password' placeholder="Password">
                        <label for="floatingPassword">Password</label>
                  </div>
                  <br/>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                </form>
          </main>
          
      </div>
      <div class="col-md-4 themed-grid-col"></div>
</div>



<?php }

function css_link(){ ?>

    <link href="<?php echo SITE_URL;  ?>bootstrap.min.css" rel="stylesheet"/>

<?php }