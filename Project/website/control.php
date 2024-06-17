<?php

include_once('model.php'); // step 1 model include 


class control extends model  // step 2  extend model for func call 
{
	function __construct()
	{
		
		model::__construct(); // step 3 call model __construct for db connection
		
		$path=$_SERVER['PATH_INFO'];	
		
		switch($path)
		{
			case '/index':
				include_once('index.php');
			break;
			case '/about':
				include_once('about.php');
			break;
			case '/service':
				include_once('service.php');
			break;
			case '/feature':
				include_once('feature.php');
			break;
			case '/team':
				include_once('team.php');
			break;
			case '/appointment':
				include_once('appointment.php');
			break;
			case '/testimonial':
				include_once('testimonial.php');
			break;
			case '/contact':
				include_once('contact.php');
			break;
			case '/signup':
				include_once('signup.php');
			break;
			case '/login':
				include_once('login.php');
			break;
		}
		
	}
}
$obj=new control

?>