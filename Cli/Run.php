<?php

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
\Lovecom\Mvc\MvcHelper::setResourceDatabase(StaticConfig::getResourceDatabase()); 

function arguments($argv)
{
    $_ARG = array(); 
    $reg = array(); 
    foreach($argv as $arg)
    {
        if(preg_match('/--([^=]+)=(.*)/', $arg, $reg))
        {
            $_ARG[$reg[1]] = $reg[2]; 
        }
        else if(preg_match('/-([a-zA-Z0-9])/', $arg, $reg))
        {
            $_ARG[$reg[1]] = 'true'; 
        }
    }
    return $_ARG; 
}

$control = arguments($argv); 
if(!isset($control['class']) || !class_exists($control['class']))
{
    $print = <<<SYSOUT
--class=\Lovecom\Cli\Sample : classname is needed \n
SYSOUT;
    exit($print);
}
$classname = $control['class']; 
unset($control['class']);
$rc = new \ReflectionClass($classname);
$cli = $rc->newInstanceArgs(array());
call_user_func_array(array($cli, 'execute'),array('argv' => $control));
