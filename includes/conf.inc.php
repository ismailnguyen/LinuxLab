<?php
session_start();
 
define("DEBUG", true); //false


define("DB_HOST", "localhost"); // database host
define("DB_USER", "root"); // database username
define("DB_PASSWORD", ""); // database password
define("DB_NAME", "linuxlab"); // database name

if(DEBUG)
{
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
}
?>
