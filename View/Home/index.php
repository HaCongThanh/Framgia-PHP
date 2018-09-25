<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>FRAMGIA EDUCATION - Do It Awesome!</title>

    <link href="../../Assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../Assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="../../Assets/css/style.css" rel="stylesheet">
    <link href="../../Assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>

            <a href="index.php" class="logo"><b>FRAMGIA EDUCATION</b></a>

            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                    </li>

                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                    </li>
                </ul>
            </div>

            <?php 
            	if (isset($_COOKIE['msg'])) {
					echo $_COOKIE['msg'];
            	}
            ?>

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php?module=login&act=logout"><b style="color: white;">Logout</b></a></li>
            	</ul>
            </div>
        </header>
  </section>
	
	<script src="../../Assets/js/jquery.js"></script>
    <script src="../../Assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../../Assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../../Assets/img/recruit.framgia.jpg", {speed: 500});
    </script>
  
  </body>
</html>