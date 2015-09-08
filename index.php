<?php
	// define a working directory
	define('APP_PATH', getcwd()); // PHP v5.3+

	// load
	require APP_PATH . '/vendor/autoload.php';

	// init app
	$app = New \SlimController\Slim(array(
	    'templates.path'             => APP_PATH . '/resources',
	    'controller.class_prefix'    => '\\Overleat\\Controller',
	    'controller.method_suffix'   => 'Action',
	    'controller.template_suffix' => 'php',
	));

	$app->addRoutes(array(
	    '/'							=> 'Home:index',
	    '/home'						=> 'Home:index',
	    '/activities-and-outings' 	=> 'Home:activities',
	    '/meals-and-diets'		 	=> 'Home:meals',
	    '/accomodation'			 	=> 'Home:accomodation',
	    '/respite-care'			 	=> 'Home:respite',
	    '/why-choose-overleat'	 	=> 'Home:why',
	    '/contact-us'			 	=> 'Contact:form',
	    '/message-sent'	 			=> 'Contact:success',
	));

	$app->run();
?>
