<!doctype html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Overleat Care Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="<?= ROOT_PATH; ?>/apple-touch-icon.png">

		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= ASSET_PATH; ?>/css/main.css">

		<script src="<?= ASSET_PATH; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<header>
		<nav class="navbar navbar-custom navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= ROOT_PATH; ?>/">Overleat Care Home</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li<?php if ($active == 'home'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li<?php if ($active == 'activities'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/activities-and-outings">Activities &amp; Outings</a>
						</li>
						<li<?php if ($active == 'meals'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/meals-and-diets">Meals &amp; Diets</a>
						</li>
						<li<?php if ($active == 'accomodation'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/accomodation">Accomodation</a>
						</li>
						<li<?php if ($active == 'respite'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/respite-care">Respite Care</a>
						</li>
						<li<?php if ($active == 'why'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/why-choose-overleat">Why choose Overleat?</a>
						</li>
						<li<?php if ($active == 'contact'): echo ' class="active"'; endif; ?>>
							<a href="<?= ROOT_PATH; ?>/contact-us">Contact Us</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>