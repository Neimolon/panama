<?php
/*
 * 2015
 * 
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL) 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/gpl-3.0.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web.
 *
 *  @author Diego Martínez Matos
 *  @license https://www.gnu.org/licenses/gpl-3.0.txt  GNU General Public License (GPL) 3.0
 */
 
  
 class LoadEngine extends Engine{
	 	
 	public static function load(){
 		//Cargar archivos config
 		
 		LoadEngine::loadRequires();
 		LoadEngine::loadMainEngine();
 		LoadEngine::loadTranslationEngine();
 		LoadEngine::loadDebugEngine();
 		LoadEngine::loadDbEngine();
 		
 			
 		//Cargar URL ammigables--> RewriteEngine
	 		//Conectar con la Base de Datos --> LoadEngine -> ConnectionEngine

 		
 		//Comprobar si existe cookie en el navegador --> LoadEngine.getCookie()
 			//Si-Cargar Datos
 			//No-Crear Datos

 		//Comprobar lenguaje Usuario LanguageEngine
 		
 		//Mostrar Login -- LoginEngine
 		
 		
 	}

 	/**
 	 * Load various required files
 	 * 
 	 */
 	private static function loadRequires(){
 		
 		require_once _ROOT_DIR.'/config/defines.php';
 		
 		
 	}

 	/**
 	 * Require files and loads TranslationEngine
	 */
 	private static function loadTranslationEngine(){
 		require_once _ENGINE_DIR.'/TranslationEngine.php';
 		TranslationEngine::load();
 	}
 	
 	private static function loadDebugEngine(){
 		require_once _ENGINE_DIR.'/DebugEngine.php';
 		DebugEngine::load();
 	}
 	
 	private static function loadMainEngine(){
 		require_once _ENGINE_DIR.'/MainEngine.php';
 		MainEngine::load();
 	}
 	
 	private static function loadDbEngine(){
 		require_once _ENGINE_DIR.'/DbEngine.php';
 		DbEngine::load();
 	}
 }
?>