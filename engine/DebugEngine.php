<?php

/**
 * 
 * @author Admin
 * @abstract 
 * Just a log error while I don´t know what I am doing
 *
 */
class DebugEngine extends Engine{

		
	private static $error_log = array();
	
	
	public static function load(){
		//check log file etcetc
		
		
	}
	
	public function getErrorLog(){
		return DebugEngine::$error_log;		
	}
	
	public static function showErrors(){
		echo '<p>';
		print_r(DebugEngine::$error_log);
		echo '<p>';
	}
	/**
	 * Pushes a error into the error log
	 * @param string $error is the error we want to log
	 * @param string $user is just junk for a while
	 */
	public static function registerError($error,$user = "Unknown"){
		//if user::islogged 
		array_push($this->error_log,$error);
	}
	
	
}