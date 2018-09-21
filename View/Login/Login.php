<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Framgia - Login</title>

    <link href="../../Assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../Assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../Assets/css/style.css" rel="stylesheet">
    <link href="../../Assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form role="form" class="form-login" action="" method="POST">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="email" name="email" class="form-control" placeholder="Email" autofocus required>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" value="" required>
		            <?php 
		            	if (isset($_COOKIE['error'])) {
		            		echo $_COOKIE['error'];
		            	}
		            ?>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		                </span>
		                <span class="pull-left" style="margin-left: 7%;">
		                    <input type="checkbox" name="remember" id="remember" value="1">Remember Me
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="forget_email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		      </form>
	  	</div>
	  </div>

    <script src="../../Assets/js/jquery.js"></script>
    <script src="../../Assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../Assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../../Assets/img/recruit.framgia.jpg", {speed: 500});
    </script>

  </body>
</html>