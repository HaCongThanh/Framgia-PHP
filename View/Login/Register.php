<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Framgia - Register</title>

    <link href="../../Assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../Assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../../Assets/css/style.css" rel="stylesheet">
    <link href="../../Assets/css/style-responsive.css" rel="stylesheet">
</head>

<body>
	<div id="login-page">
	  	<div class="container">
		    <form role="form" class="form-login" action="index.php?module=login&act=store" method="POST">
		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">
		        	<input type="text" name="name" class="form-control" placeholder="Your Name" autofocus required>
		        	<br>
		            <input type="email" name="email" class="form-control" placeholder="Email" required>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password" value="" required>
		            <br>
		            <input type="password" name="password-confirm" class="form-control" placeholder="Password Confirm" value="" required>
		            
		            <?php 
		            	if (isset($_COOKIE['error'])) {
		            		echo $_COOKIE['error'];
		            	}
		            ?>

		            <br>
		            <button class="btn btn-theme btn-block" name="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>

		            <div class="login-social-link centered">
			            Do you already have an account?<br/>
		                <a class="" href="index.php?module=login&act=index">
		                    Sign in now
		                </a>
			            <p>or you can sign in via your social network</p>
			                <button class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
			                <button class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
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