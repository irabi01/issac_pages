<!doctype html>
<html lang="en">
  <head>
    <title>Log in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css">
  </head>
  <body>

    <!--<div class="login_container">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4 center_column_login">
            <div class="login_content w3-card-4">
              <div class="login_page">
                <h1>Log in</h1>
                <hr>
                <form>
                  <div class="form-group">
                    <input type="text" name="" value="" placeholder="Email or Username" class="w3-input">
                  </div>
                  <div class="form-group">
                    <input type="password" name="" value="" placeholder="Password" class="w3-input">
                  </div>
                  <div class="remember_me_and_forget_pass">
                    <div class="remember_me pull-left">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="forget_pass pull-right">
                      <div class="form-group">
                        <p><a href="#">Forgot Password?</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="button" class="btn btn-sm btn-block button_login">Log In</button>
                  </div>
                  <div class="horizontal_rule">
                    <hr>
                    <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
	<div class="login_container">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="form_container">
						<form method="post" action="home.php">
							<div class="form-group">
							<input type="text" placeholder="username" class="form-control"/>
							</div>
							<div class="form-group">
								<input type="password" placeholder="password" class="form-control"/>
							</div>
							<div class="form-group">
								<button class="btn btn-sm button_login btn-block" >log in</button>
							</div>
							<hr class="horizontal_rule"/>
							<div class="forget_password_and_sign_up">
								<a href="#">Forgot password</a>
							</div>
							<hr class="horizontal_rule"/>
							<div class="_sign_up">
								Don't have an account?<a href="register.php"> Sign up</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jqueryfile.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
