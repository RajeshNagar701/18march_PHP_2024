<?php

class model
{
	public $conn="";
		
	function __construct()
	{
							// hostname // username // pass // db name
		$this->conn=new mysqli('localhost','root','','php2024');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
}
$obj=new model

?>