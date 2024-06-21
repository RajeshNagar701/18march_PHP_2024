<?php


include_once('../website/model.php'); // step 1 model include 


class control extends model  // step 2  extend model for func call 
{
	function __construct()
	{
		
		model::__construct(); // step 3 call model __construct for db connection
		
		$path=$_SERVER['PATH_INFO'];	
		
		switch($path)
		{
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_categories':
				include_once('add_categories.php');
			break;
			case '/manage_categories':
				$data=$this->select('categories');
				include_once('manage_categories.php');
			break;
			case '/add_services':
				include_once('add_services.php');
			break;
			case '/manage_services':
				$data=$this->select('services');
				include_once('manage_services.php');
			break;
			case '/add_blog':
				include_once('add_blog.php');
			break;
			case '/manage_blog':
				$data=$this->select('blogs');
				include_once('manage_blog.php');
			break;
			case '/manage_customer':
				$data=$this->select('customers');
				include_once('manage_customer.php');
			break;
			case '/manage_contact':
				$data=$this->select('contacts');
				include_once('manage_contact.php');
			break;
			case '/index':
				include_once('admin.php');
			break;
		}
		
	}
}
$obj=new control

?>