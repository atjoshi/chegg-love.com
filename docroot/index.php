<?php

error_reporting(E_ALL | E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if (!isset($tmpPath))
{
	$tmpParts = explode('/', realpath(__FILE__));
	$tmpPath  = implode('/', array_slice($tmpParts, 0, count($tmpParts) - 2)) . '/';
}
define('__APP', 'Love');
// getting all the global configuration

use \Lovecom\System as System; 

require $tmpPath . 'build/StaticConfig.php';
require $tmpPath . 'System/Autoloader.php';

System\Autoloader::registerAutoloader(); 
\Lovecom\Mvc\MvcHelper::setResourceMap(StaticConfig::getResourceMap()); 
\Lovecom\Mvc\MvcHelper::setResourceDatabase(StaticConfig::getResourceDatabase()); 


$rounter = new System\Router(); 
$rounter->startMvc(); 

?>
