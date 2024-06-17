<?php

class model
{
	public $conn="";
		
	function __construct()
	{
							// hostname // username // pass // db name
		$this->conn=new mysqli('localhost','root','','mayphp2024');
		
		function select($tbl)
		{
			$sel="select * from $tbl"
		}
		
	}
}
$obj=new model

?>