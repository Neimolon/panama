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
 
  
 class LoadEngine{
	 	
 	public static function run(){
 		//Cargar archivos config
 		LoadEngine::loadRequires();
				

 			
 			
	 		//Definicion de rutas -->LoadEngine
	 		//Cargar URL ammigables--> RewriteEngine
	 		//Conectar con la Base de Datos --> LoadEngine -> ConnectionEngine

 		//Cargar Debug -> DebugEngine
 		
 		//Comprobar si existe cookie en el navegador --> LoadEngine.getCookie()
 			//Si-Cargar Datos
 			//No-Crear Datos

 		//Comprobar lenguaje Usuario LanguageEngine
 		
 		//Mostrar Login -- LoginEngine
 		
 		
 	}
 	
 	private static function loadRequires(){
 		//	Defines
 		require_once _ROOT_DIR.'/defines/path.php';
 		require_once _ENGINE_DIR.'/Engine.php';
 	}
 	
 	
 }
?>