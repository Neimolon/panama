<?php
class DebugEngine{

	//Array(Error Description, User, Time)
	//All errors are added here
	//
	private $error_log;
	
	
	function __construct(){
		$this->error_log = array();	
	}
	
	public static function showErrors(){
		
	}
	
	public static function registerError($error,$user = "Unknown"){
		//if user::islogged 
		array_push($this->error_log,$error);
	}
	
	
}