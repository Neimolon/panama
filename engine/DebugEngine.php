<?php
class DebugEngine{

	//Array(Error Description, User, Time)
	//All errors are added here
	//
	private $error_log;
	
	
	function __construct(){
		$this->error_log = array();	
	}
	
	public function getErrorLog(){
		
	}
	
	public static function showErrors(){
		echo '<p>';
		print_r(DebugEngine::$error_log);
		echo '<p>';
	}
	
	public static function registerError($error,$user = "Unknown"){
		//if user::islogged 
		array_push($this->error_log,$error);
	}
	
	
}