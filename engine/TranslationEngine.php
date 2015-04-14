<?php

class TranslationEngine extends Engine{

	public static function load(){
		
		/**
		 * Declared when TranslationEngine is loaded.
		 * Translate a string to users language.
		 *
		 * Actually just return the received string
		 *
		 * @param $text string
		 * @return array
		 */
		function _t($text){
			return $text;			
		}		
	}	
	
	
}

