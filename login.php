<?php
  include ("inc/classes/User.php");
  include_once ("inc/classes/session.php");
?>
<?php
  $userSession = new Session();
  if ($userSession->getSession('login') == true) {
    header('Location: chat.php');
  }

  $user = new User();
  $registration = $user->userRegistration($_POST);
  $login = $user->userLogin($_POST);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/style.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="assets/main.js"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        	<div class="row">
    			<div class="col-md-6 col-md-offset-3">
          <?php
            if (isset($registration)) {
              echo $registration;
            }
            if (isset($login)) {
              echo $login;
            }
          ?>
    				<div class="panel panel-login">
    					<div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-6">
    								<a href="#" class="active" id="login-form-link">Login</a>
    							</div>
    							<div class="col-xs-6">
    								<a href="#" id="register-form-link">Register</a>
    							</div>
    						</div>
    						<hr>
    					</div>
    					<div class="panel-body">
    						<div class="row">
    							<div class="col-lg-12">
    								<form id="login-form" action="" method="post" role="form" style="display: block;">
    									<div class="form-group">
    										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    									</div>

    									<div class="form-group">
    										<div class="row">
    											<div class="col-sm-6 col-sm-offset-3">
    												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
    											</div>
    										</div>
    									</div>

    								</form>

    								<form id="register-form" action="" method="post" role="form" style="display: none;">
    									<div class="form-group">
    										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
    									</div>
    									<div class="form-group">
    										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
    									</div>
    									<div class="form-group">
    										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    									</div>
    									<div class="form-group">
    										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
    									</div>
    									<div class="form-group">
    										<div class="row">
    											<div class="col-sm-6 col-sm-offset-3">
    												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
    											</div>
    										</div>
    									</div>
    								</form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

  </body>
</html>
