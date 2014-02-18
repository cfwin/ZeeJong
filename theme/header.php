<?php
/*
Template part for header

Created: February 2014
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Soccer Betting System</title>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href="<?php echo SITE_URL ?>style/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo SITE_URL ?>style/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo SITE_URL ?>style/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<script src="<?php echo SITE_URL ?>js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="<?php echo SITE_URL ?>js/script.js" type="text/javascript"></script>
	<script src="<?php echo SITE_URL ?>js/bootstrap.js" type="text/javascript"></script>

</head>
<body>

	<header>
		
		<div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="brand" href="#">ZeeJong</a>
			  <div class="nav-collapse collapse">
				<ul class="nav">
				  <li class="active"><a href="#">Upcomming Events</a></li>
				  <li><a href="#">Players</a></li>
				  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Leagues <b class="caret"></b></a>
					<ul class="dropdown-menu">
					  <li><a href="#">World Cup</a></li>
					  <li><a href="#">Olympics</a></li>
					  <li><a href="#">...</a></li>
					</ul>
				  </li>
				</ul>
				<form class="navbar-form pull-right">
				  <input class="span2" type="text" placeholder="Email">
				  <input class="span2" type="password" placeholder="Password">
				  <button type="submit" class="btn">Sign in</button>
				</form>
			  </div><!--/.nav-collapse -->
			</div>
		  </div>
		</div>
		
	</header>
	
	
	<div class="container">
	